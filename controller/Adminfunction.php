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
    $query = "SELECT * FROM admin WHERE email = ? AND password = ?";
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


  function getProfile($id) {
    $query = "SELECT * FROM users WHERE id =?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 0) {
        throw new Exception('User not found');
    }
    $profile = $result->fetch_assoc();
    return $profile;
}
  function getD($id) {
    $query = "SELECT * FROM deposit WHERE uid =?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 0) {
        throw new Exception('User not found');
    }
    $profile = $result->fetch_assoc();
    return $profile;
}
  function getW($id) {
    $query = "SELECT * FROM withdraw WHERE uid =?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 0) {
        throw new Exception('User not found');
    }
    $profile = $result->fetch_assoc();
    return $profile;
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
  public function getAllTrans() {
    $query = "SELECT *  FROM transac inner join users";
    $stmt = $this->conn->prepare($query);
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

public function getWallet() {
  $query = "SELECT *  FROM wallet i";
  $stmt = $this->conn->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  $transactions = [];
  while ($row = $result->fetch_assoc()) {
      $transactions[] = $row;
  }
  return $transactions;
}
public function getUser() {
    $query = "SELECT * FROM users";
    $stmt = $this->conn->prepare($query);

    // Check for errors during statement preparation
    if ($stmt === false) {
        $error = $this->conn->errno . ': ' . $this->conn->error;
        throw new Exception('Error preparing statement: ' . $error);
    }

    // Execute the prepared statement
    if (!$stmt->execute()) {
        $error = $stmt->errno . ': ' . $stmt->error;
        throw new Exception('Error executing statement: ' . $error);
    }

    // Get the result set
    $result = $stmt->get_result();

    // Check for errors during result retrieval
    if ($result === false) {
        $error = $this->conn->errno . ': ' . $this->conn->error;
        throw new Exception('Error retrieving result: ' . $error);
    }

    $people = [];
    while ($row = $result->fetch_assoc()) {
        $people[] = $row;
    }

    // Check for errors during result fetching
    if ($result->num_rows === 0) {
        throw new Exception('No users found');
    }

    return $people;
}

public function Addbal($bal,$id)
{
  $query = "UPDATE users SET bal=? +bal  WHERE id =?";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("ii", $bal, $id);
  return $stmt->execute();
  
  
  
}
public function AddDep($bal,$depo,$lid)
{
  $query = "UPDATE users SET bal=? +bal , deposit=?  WHERE id =?";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("iii", $bal,$depo, $lid);
  return $stmt->execute();
  
}

public function UpWith($bal,$sta,$lid)
{
  $query = "UPDATE withdraw SET amount=?, trans_status=?  WHERE id =?";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("isi", $bal, $sta, $lid);
  return $stmt->execute();
  
}
public function UprejectWith($bal,$sta,$lid)
{
  $query = "UPDATE withdraw SET amount=?, trans_status=?  WHERE id =?";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("isi", $bal, $sta, $lid);
  return $stmt->execute();
  
}
public function UprejectDep($bal,$sta,$lid)
{
  $query = "UPDATE deposit SET amount=?, trans_status=?  WHERE id =?";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("isi", $bal, $sta, $lid);
  return $stmt->execute();
  
}
public function UpDepo($bal,$sta,$id)
{
  $query = "UPDATE deposit SET amount=?, trans_status=?  WHERE id =?";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("isi", $bal, $sta, $id);
  return $stmt->execute();
  
}

public function Subbal($bal,$id)
{
  $query = "UPDATE users SET bal=? - bal  WHERE id =?";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("ii", $bal, $id);
  return $stmt->execute();
  
  
  
}


public function addTrans($id,$transmeth,$transtype,$transdate,$bal,$trans_status)
{
  $query = "INSERT INTO transac (uid, transmeth, transtype, transdate, amount, trans_status) VALUES (?, ?, ?, ?, ?,?)";
  $stmt = $this->conn->prepare($query);
  $stmt->bind_param("ssssss", $id,$transmeth,$transtype,$transdate,$bal,$trans_status);
  return $stmt->execute();
}

public function addWallet($wname, $wsub, $wid, $max)
{
    $query = "INSERT INTO wallet (walletname, subtitle, walletId, max) VALUES (?, ?, ?, ?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("ssss", $wname, $wsub, $wid, $max);
    $stmt->execute();
    return $stmt->execute();$stmt->affected_rows > 0;
}

public function Tdepo ()
{

  $query = "SELECT SUM(amount) as deposit_count FROM transac WHERE transtype='deposit'";
  $stmt = $this->conn->prepare($query);
  // $stmt->bind_param("s", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  return $row['deposit_count'];

}

public function Alltrans ()
{

  $query = "SELECT SUM(amount) as deposit_count FROM transac";
  $stmt = $this->conn->prepare($query);
  // $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  return $row['deposit_count'];

}

public function AllUsers ()
{

  $query = "SELECT count(amount) as deposit_count FROM transac";
  $stmt = $this->conn->prepare($query);
  // $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  return $row['deposit_count'];

}



}





?>