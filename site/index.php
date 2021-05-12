<?php
session_start();
include("php/login/connection.php");
include("php/login/functions.php");
$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>descopera</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1"
    />

    <link rel="stylesheet" href="css/navbar.css" />
  </head>
  <body>
    <header>
      <div class="main">
        <ul class="header-ul">
          <li><a href="index.php" class="home-link">Home</a></li>
          <li><a href="about.html" class="home-link">About</a></li>
          <li><a href="gallery.html" class="home-link">Gallery</a></li>
          <li><a href="trips.php">Trips</a></li>
          <li><a href="contact.html" class="home-link">Contact</a></li>
          <li><a href ="php/login/logout.php">Logout</a></li>
        </ul>
      </div>
      <div class="title">
        <h1>Discover Moldova</h1>
      </div>
      <div class="clock">
        <span class="clock-time"></span>
      </div>
    </header>
    <script src="main.js"></script>
  </body>
</html>
