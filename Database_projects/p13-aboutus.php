<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ReCircle</title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
body 
{
    font-family: Arial, Helvetica, sans-serif;margin: 0;
}
html 
{
    box-sizing: border-box;
}
*, *:before, *:after 
{
    box-sizing: inherit;
}
.container {padding: 0 16px;}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.title 
{
    color: lightcoral;
    font-size: 50px;
}
/*
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: grey;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
.button:hover {background-color: #555;}
*/
.center
{
    align-content: center;
    font-size: 25px;
}
.names
{
    color: lightcoral;
}
</style>
</head>
<body>
<nav class="site-header sticky-top py-1 border rounded">
        <icon>
            <a class="py-2" href="index.php">
                <img src="Pictures/Logo_icon.jpg" height="35%" width="35%">  
            </a>
        </icon>
      <div class="container d-flex justify-content-between">
        <a class="py-2" href="p13-aboutus.php">About us</a> 
        <a class="py-2" href="FAQ.php">FAQ</a>
        <a class="py-2" href="location.php">Location</a>
        <a class="py-2" href="p4-cart.php">Cart</a>
          
        <?php
        if(!isset($_SESSION['userId']))
        {
            echo '<a class="py-2" href="p6-signup.php">Sign up</a>'; //sign up
        }
        else
        {
            echo '<a class="py-2" href="">Logout</a>';
            echo '<a class="py-2" href="">Rewards</a>';
        }
        ?>
        <a class="py-2" href="p5-signin.php">Login</a>
          
      </div>
    </nav>
    <!-- Banner/Header -->
    <div class="border rounded banner shadow-lg p-1 text-center text-white">
      <div class="col-md-6 mx-auto my-3">
        <h1 class="display-4 font-weight-normal"> ReCircle <span class="spinner spinner-grow spinner-grow-sm text-success"></span></h1>
        <p class="lead font-weight-normal">Scrap for Cash!</p>
        <!-- The session ids were set during the login phase. Here, if a user session exists, we display logout, otherwise we display login. The html are 'echo'ed to the page, 
             use dots to join php elements such as $name. If double quotes instead, html would not work because of interpolation. -->
        <?php 
        //$name = $_SESSION['userName'];
        if(isset($_SESSION['userId']))
        {
            $name = $_SESSION['userName'];
            echo '<div class="container border rounded m-3 p-2" style="width: 30%; position: relative; left: 48%; transform: translate(-50%);">Hi '.$name.',<br>You are logged in!</div>
            <form action="includes/logout.inc.php" method="post"><button class="btn btn-outline-warning" type="submit" name="logout-submit">Logout</button></form>';
        }
        else 
        {
          
        }
        ?>
        <p class="small mt-2"></p>
      </div>
<h2 class="display-4 text-center p-2">Get to know Us</h2>
    <div class="center">
      <img src="Pictures/Logo_icon.jpg" alt="the_team" height="200" width="200">
      
        <p class="title">The Team </p>
        <p>Temp description</p>
        <br>
        Team member 1
        <br>
        <p class = "names">Yang Ting</p>
        Team member 2
        <br>
        <p class = "names">Tan Jiun Hwei</p>
        Team member 3
        <br>
        <p class = "names">Kuon Suhyun</p>
        Team member 4
        <br>
        <p class = "names">Kavinraaj Banurekha Varadaraju</p>
        Team member 5
        <br>
        <p class = "names">Cheng Jun Calvin Yeo</p>
        
<!--        <p class="col-md-11 text-center" ><button type="button" class="btn btn-outline-warning"><a href="mailto:matthewdukepan@gmail.com" class="text-warning">Contact</a> </button></p>-->

    </div>
    
    </body>
  </html>