
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
  if(!isset($_SESSION['admin_name']))
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/user_page.css">
   <link rel="stylesheet" href="css/sidebar.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <style>
    body{
  background-image: url("ap.jpg");
  background-repeat: no-repeat, repeat;
  background-size: cover;
  background-position: center;
}
   </style>
</head>
<body>
<!-- <script>
function myfunction() {
  var x = document.getElementsById("hide");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script> -->
    <nav>  
    <!-- <a href="#" onclick="myfunction()">
    <i class="fas fa-bars" id="btn" style="color:white; height:20px; width:40px;">list</i></a> -->
        <div class="menu">
          <div class="logo">
            <a href="#">R.J.Gym</a>
          </div>
          <ul>
          <li><a href="/log.html"><i class="fas fa-home fa-fw" style="background:black"></i>Home</a></li>
            <li><a href="#">effects</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="package.html">Packages</a></li>
            <li><a href="bmi.html">BMI</a></li>
            <li><a href="logout.php" class="btn"><i class='fas fa-power-off'></i>logout</a></li>
          </ul>
        </div>
      </nav>
      
<div class="sidebar">
<header><img src="dp1.jpg" alt="">Admin</header> 
<ul>
<br><br>
<li><a href="dashboard.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
<!-- <li><a href="register_form.php"><i class="fa fa-user-plus" aria-hidden="true"></i></i>New user</a></li> -->
<li><a href="#"><i class="fas fa-stream"></i>overview</a></li>
<li><a href="#"><i class="fas fa-calendar-week"></i>Events</a></li>
<li><a href="about.php"><i class="fas fa-question-circle"></i>About</a></li>
<li><a href="package.html"><i class="fas fa-sliders-h"></i>Packages</a></li>
<li><a href="contact.php"><i class="fas fa-envelope"></i>Contact</a></li>
<li><a href="logout.php"><i class='fas fa-power-off'></i>Logout</a></li>
</ul>
</div>


<div class="container">

   <?php
  include("display.php");
  ?> 

</div>

</body>
</html>