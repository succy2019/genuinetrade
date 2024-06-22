<?php
include('db.php');
class User {
  private $host = 'localhost';
  private $dbname = 'gen';
  private $username = 'root';
  private $password = '';
  public $conn;

  public function __construct($host,$username,$password,$dbname) {
    // $this->conn = $conn;
    $this->conn =mysqli_connect($host,$username,$password,$dbname);
  }

  public function register($fname,$uname,$email,$phone,$pass) {
    // $password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $this->conn->prepare("SELECT email FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0)
    {
      echo '<script> alert("USER EMAIL ALREADY EXIST");</script>';
      echo '<script> window.location="login.php";</script>';

    }else
    {

      $query = "INSERT INTO users (fname, uname, email, phone, password) VALUES (?, ?, ?, ?, ?)";
      $stmt = $this->conn->prepare($query);
      $stmt->bind_param("sssss", $fname, $uname,$email,$phone,$pass);
      return $stmt->execute();
    }


  }

  public function login($email, $pass) {
    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("ss",  $email,$pass);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['userlog'] =$row['id'];

        return true;
      
    }
    return false;
  }


  public function getProfile($id) {
    $query = "SELECT * FROM users WHERE id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
  }

  public function getTrans($id) {
    $query = "SELECT *  FROM transac inner join users on transac.uid = users.id WHERE transac.uid =?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $transactions = [];
    while ($row = $result->fetch_assoc()) {
        $transactions[] = $row;
    }
    return $transactions;
}
  public function getDeps($id) {
    $query = "SELECT *  FROM deposit inner join users on deposit.uid = users.id WHERE deposit.uid =?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $transactions = [];
    while ($row = $result->fetch_assoc()) {
        $transactions[] = $row;
    }
    return $transactions;
}

public function wallet() {
  $query = "SELECT *  FROM wallet";
  $stmt = $this->conn->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  $transactions = [];
  while ($row = $result->fetch_assoc()) {
      $wall[] = $row;
  }
  return $wall;
}
public function getwallet($id) {
  $query = "SELECT * FROM wallet WHERE id = ?";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  return $result->fetch_assoc();
}

public function addTrans($id,$transmeth,$transtype,$transdate,$bal,$trans_status)
{
  $query = "INSERT INTO transac (uid, transmeth, transtype, transdate, amount, trans_status) VALUES (?, ?, ?, ?, ?,?)";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("ssssss", $id,$transmeth,$transtype,$transdate,$bal,$trans_status);
  return $stmt->execute();
}

public function Tdepo ($id)
{

  $query = "SELECT SUM(amount) as deposit_count FROM transac WHERE transtype='deposit' AND uid=?";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("s", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  return $row['deposit_count'];

}

public function Alltrans ($id)
{

  $query = "SELECT SUM(amount) as deposit_count FROM transac WHERE  uid=?";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  return $row['deposit_count'];

}


}





?>