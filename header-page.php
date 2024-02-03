<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Digitalcotech - Website Design and Development">
    <meta name="author" content="Digitalcotech">
    <link rel="icon" href="images/favicon.ico">

    <!-- Title -->
    <title>Digitalcotech - Website Design and Development</title>
    <link rel="apple-touch-icon" sizes="57x57" href="image/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="image/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="image/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="image/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="image/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="image/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="image/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="image/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="image/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="image/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="image/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="image/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="image/favicon-16x16.png">
    <!-- Necessary CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">            									<!-- Bootstrap CSS Only GRID -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/google-font.css">              									<!-- Google Font -->
    <link rel="stylesheet" href="css/font-awesome.min.css?v=123">         									<!-- Font Awesome Icons -->
    <link rel="stylesheet" href="css/swiper.min.css?v=123">               									<!-- Swiper slider -->								<!-- Video background -->
    <link rel="stylesheet" href="css/template.css?v=123">                 									<!-- Template CSS -->
    <link rel="stylesheet" href="css/custom.css?v=1234">                 									<!-- Template CSS -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Wrapper -->
<div class="site-wrapper">

    <!-- Top Bar -->
    <div class="site-top-bar">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- Left section -->
                    <div class="site-top-bar-left-section">

                    <a href="tel:+917875794608">
                            <!-- Icon -->
                            <i class="fa fa-phone"></i>
                            <!-- Text -->
                            <span>+91 7875794608</span>
                        </a>

                    </div>
                    <!-- End Left Section -->


                    <!-- Right Section -->
                    <div class="site-top-bar-right-section">

                        <!-- Link -->
                       

                        <!-- Link -->
                        <a href="mailto:contact.digitalcotech@gmail.com">
                            <!-- Icon -->
                            <i class="fa fa-envelope"></i>
                            <!-- Text -->
                            <span>contact.digitalcotech@gmail.com</span>
                        </a>

                    </div>
                    <!-- End Right Section -->

                </div>
            </div>
        </div>
        <!-- End Bootstrap -->

    </div>
    <!-- End Top Bar -->

    <!-- Header -->
    <header class="site-header" id="sticky-header">

        <!-- Bootstrap -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- Logo -->
                    <div class="site-logo">
                        <!-- Link -->
                        <div class="company-logo" style="float: left;">
                            <a href="/">
                                <img src="image/logo.png" alt="Logo">
                            </a>
                        </div>
                        <div class="company-name-headings" style="float: right;">
                            <h3><a href="/">Digitalcotech</a></h3>
                        </div>
                        <div style="clear: both;"></div> <!-- Clear floats to prevent layout issues -->
                    </div>
                    

                    <!-- End logo -->

                    <!-- Navigation Toggle Button -->
                    <div class="site-nav-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- End Nav Toggle Button -->

                    <!-- Navigation -->
                    <nav class="site-nav">
                        <ul>
                            <!-- Active Item (Use the active class) -->
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="about-us.php">About us</a></li>
                            <li><a href="service.php">Services</a></li>
                            <li><a href="contact-us.php">contact us</a></li>
                        </ul>
                    </nav>
                    <!-- End Navigation -->

                </div>
            </div>
        </div>
        <!-- End Bootstrap -->

    </header>
    <!-- End Header -->
    <?php



if (isset($_SESSION['success_message'])) {
    echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
    unset($_SESSION['success_message']); // Remove the session message to prevent it from showing again
}
if (isset($_SESSION['error_message'])) {
    echo '<script>alert("' . $_SESSION['error_message'] . '");</script>';
    unset($_SESSION['error_message']); // Remove the session message to prevent it from showing again
}
?>