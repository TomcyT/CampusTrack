<?php
require 'connect.php';
$getCars = "SELECT * FROM `details` WHERE vehicletype = 'Car'";
$getCarsQuery = mysqli_query($conn,$getCars);
$cars = mysqli_num_rows($getCarsQuery);

$getBikes = "SELECT * FROM `details` WHERE vehicletype = 'Bike'";
$getBikesQuery = mysqli_query($conn,$getBikes);
$bikes = mysqli_num_rows($getBikesQuery);

$getOthers = "SELECT * FROM `details` WHERE vehicletype = 'Others'";
$getOthersQuery = mysqli_query($conn,$getOthers);
$others = mysqli_num_rows($getOthersQuery);

$getFaculty = "SELECT * FROM `details` WHERE usertype = 'Faculty'";
$getFacQuery = mysqli_query($conn,$getFaculty);
$fac = mysqli_num_rows($getFacQuery);

$getStudents = "SELECT * FROM `details` WHERE usertype = 'Student'";
$getStudentsQuery = mysqli_query($conn,$getStudents);
$Students = mysqli_num_rows($getStudentsQuery);

$totalVeh = $cars + $bikes + $others;
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="homePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
  </head>
  <body>
    

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fa fa-bars" aria-hidden="true" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3><span><i class="fa fa-home" aria-hidden="true"></i> Home</span></h3>
      </div>
      <div class="logo">
          <img src="logo-campusTrack.jpg" class="profile_image" alt="">
      </div>
      <div class="right_area">
        <a href="index.html" class="logout_btn"><span><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</span></a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="1.png" class="profile_image" alt="">
        <h4>Admin</h4>
      </center>
      <div class="active-link"><a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a></div>
      <a href="searchPage.html"><i class="fa fa-search" aria-hidden="true"></i><span>Search </span></a>
      <a href="addNewEntry.html"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Add </span></a>
      <a href="update.php"><i class="fa fa-spinner" aria-hidden="true"></i><span>Update</span></a>
      <a href="deleteRecord.html"><i class="fa fa-trash" aria-hidden="true"></i><span>Delete</span></a>
      <a href="aboutUs.html"><i class="fa fa-question-circle" aria-hidden="true"></i><span>About us</span></a>
    </div> 
    <div class="stat-cards">
    <div class="card-body color1">
            <div class="float-left">
                <h3>
                    <span class="currency"></span>
                    <span class="count"><?php echo $cars; ?></span>
                </h3>
                <p>Cars</p>
            </div>
            <div class="float-right">
                <i class="fa fa-car" aria-hidden="true"></i>
            </div>
        </div>
        <!--Widget End-->
        <!--Widget Start-->
        <div class="card-body color2">
            <div class="float-left">
                <h3>
                    <span class="count"><?php echo $bikes; ?></span>
                </h3>
                <p>Bikes</p>
            </div>
            <div class="float-right">
                <i class="fa fa-motorcycle" aria-hidden="true"></i>
            </div>
        </div>
        <!--Widget End-->
        <!--Widget Start-->
        <div class="card-body color3">
            <div class="float-left">
                <h3>
                    <span class="count"><?php echo $others; ?></span>
                </h3>
                <p>Other Vehicles</p>
            </div>
            <div class="float-right">
                <i class="fa fa-truck" aria-hidden="true"></i>
            </div>
        </div>
    <div class="stat-cards-2">
    <div class="card-body color1">
            <div class="float-left">
                <h3>
                    <span class="currency"></span>
                    <span class="count"><?php echo $fac; ?></span>
                </h3>
                <p>Faculty Vehicles</p>
            </div>
            <div class="float-right">
                <i class="fa fa-id-badge" aria-hidden="true"></i>
            </div>
        </div>
        <!--Widget End-->
        <!--Widget Start-->
        <div class="card-body color2">
            <div class="float-left">
                <h3>
                    <span class="count"><?php echo $Students; ?></span>
                </h3>
                <p>Student Vehicles</p>
            </div>
            <div class="float-right">
                <i class="fa fa-id-badge" aria-hidden="true"></i>
            </div>
        </div>
        <!--Widget End-->
        <!--Widget Start-->
        <div class="card-body color3">
            <div class="float-left">
                <h3>
                    <span class="count"><?php echo $totalVeh; ?></span>
                </h3>
                <p>Total Vehicles</p>
            </div>
            <div class="float-right">
                <i class="fa fa-id-badge" aria-hidden="true"></i>
            </div>
        </div>
  </div>
  
