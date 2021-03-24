<?php
session_start();
if ( !isset($_SESSION['login']) ) {
	header('location: login.php');
	
} 
?>

<!DOCTYPE html>
<html>
	
	  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo.png">

    <title>Dashboard Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <style>
      
      .navbar {
        background-color: #fff;
        padding-top: 10px;
      }

      .navbar-header {
        padding-right: 100px;
      }

      .navbar ul li a.link{
        color: #50C88F;
        font-size: 15px;
        text-decoration: none;
        padding-right: 30px;
      }
      .navbar ul li a.link:hover {
        color: #50C88F;
        font-size: 15px;
        font-weight: bold;
        text-decoration: none;
        padding-right: 30px;
        background-color: #fff;
      }

      .navbar ul li a.logout{
        color: red;
        font-size: 15px;
        text-decoration: none;
        border: 1px solid red;
        border-radius: 50px;
        margin-left: 25px;
        padding: 14px 20px 14px 20px;
      }
      .navbar ul li a.logout:hover {
        color: red;
        font-size: 15px;
        text-decoration: none;
        background-color: #fff;
        
      }

      .navbar-brand {
        font-size: 20px;
        font-family: Poppins;
        font-weight: bolder;
        text-decoration: none;
      }
      .navbar-brand:hover {
        font-size: 20px;
        text-decoration: none;
      }
    </style>

  </head>

<body>
	
	<!-- Fixed navbar -->
    <nav class="navbar navbar-expand fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="./">
            SMK CN
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./" class="link">HOME</a></li>
            <li><a href="dataadmin.php" class="link">DATA ADMIN</a></li>
            <li><a href="dataguru.php" class="link">DATA GURU</a></li>
            <li><a href="datawali.php" class="link">DATA WALI KELAS</a></li>
            <li><a href="datasiswa.php" class="link">DATA SISWA</a></li>
            <li><a href="transaksi.php" class="link">TRANSAKSI</a></li>
            <li><a href="laporan.php" class="link">LAPORAN</a></li>
            <li><a href="logout.php" class="logout">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>

  