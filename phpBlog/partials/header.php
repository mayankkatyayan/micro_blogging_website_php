<?php
require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MicroBlog App</title>
  <!--stylesheet-->
  <link rel="stylesheet" href="./css/style.css">
  <!--ICONSCOUT CDN-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

  <!--======GOOGLE FONTS========-->
  <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Roboto:wght@100&display=swap" rel="stylesheet">


</head>
<body>
  <nav>
    <div class="container nav__container">
      <a href="index.php" class="nav__logo">MicroBlog</a>
      <ul class="nav__items">
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="signin.php">SignIn</a></li>
        <li class="nav__profile">
          <div class="avatar">
            <img src="./Darjeeling Trip/IMG_1679.JPG" alt="no clip">
          </div>
          <ul>
            <li><a href="<?= ROOT_URL ?>admin/dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>

        </li>
      </ul>

      <button id="open__nav-btn"><i class="uil uil-list-ul"></i></button>
      <button id="close__nav-btn"><i class="uil uil-times-circle"></i></button>
    </div>
  </nav>
  <!--================ENF OF NAVBAR===========----->
   