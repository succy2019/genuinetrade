<?php
session_start();
include('../controller/AdminFunction.php');
// $id = $_REQUEST['id'];
$tipe ="deposit";
$user = new User($host,$username,$password,$dbname);
$ro = $user->getUser();
$dpeos = $user->getDeps($tipe);
$ro = $user->getUser();
$dep = $user->getAllTrans();
$depcount = $user->Tdepo();
$Allcount = $user->Alltrans();
$Alluser = $user->AllUsers();
$AllWall = $user->getWallet();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Trade Genius">
  <meta name="author" content="https://product.quanten-x.online/tradegenius">
  <link href="assets/images/Yo7c3v0R1650180806.png" rel="icon">
  <title>Trade Genius</title>
  <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/admin/css/toastr.css" rel="stylesheet">
  <link href="assets/admin/css/select2.min.css" rel="stylesheet">
  <link href="assets/admin/css/tagify.css" rel="stylesheet">
  <link href="assets/admin/css/bootstrap-colorpicker.css" rel="stylesheet">
  <link href="assets/admin/css/bootstrap-iconpicker.css" rel="stylesheet">
  <link href="assets/admin/css/color-picker.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/admin/css/summernote.css">
  <link href="assets/admin/css/toastr.css" rel="stylesheet">
  <link href="assets/admin/css/plugin.css" rel="stylesheet" />
  <link href="assets/admin/css/ruang-admin.css" rel="stylesheet">
  <link href="assets/admin/css/custom.css" rel="stylesheet">

  
</head>

<body id="page-top">
            <div class="Loader" style="background: url(assets/images/BWZuw2HJ1661832829.gif) no-repeat scroll center center #FFF;"></div>
      <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin/dashboard">
        <div class="sidebar-brand-icon">
          <img src="assets/images/Jygvrizc1656849435.png">
        </div>
      </a>

      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>




  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#customer" aria-expanded="true"
      aria-controls="collapseTable">
      <i class="fas fa-user"></i>
      <span>Manage Customers</span>
    </a>
    <div id="customer" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="users.php">User List</a>
        </div>
    </div>
  </li>

    
    <li class="nav-item">
        <a class="nav-link" href="transactions.php">
            <i class="fas fa-chart-line"></i>
            <span>Transactions</span>
        </a>
    </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#withdraw" aria-expanded="true"
      aria-controls="collapseTable">
      <i class="fab fa-cc-mastercard"></i>
      <span>Withdraws</span>
    </a>
    <div id="withdrawal.php" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="withdrawal.php">Withdraw Request</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="deposit.php">
      <i class="fas fa-piggy-bank"></i>
      <span>Deposits</span>
    </a>
  </li>



  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment_gateways" aria-expanded="true"
      aria-controls="collapseTable">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Payment Settings</span>
    </a>
    <div id="payment_gateways" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="addwall.php">ADD WALLET</a>
        <a class="collapse-item" href="wallet.php">Payment Gateways</a>
      </div>
    </div>
  </li>

 






  
  
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link pr-0" target="_blank" href="https://product.quanten-x.online/tradegenius">
                  <i class="fas fa-globe fa-fw"></i>
              </a>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="assets/images/0PBOqZKb1661675813.jpg" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="admin/profile">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                <a class="dropdown-item" href="admin/password">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="admin/logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->