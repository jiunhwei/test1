
<?php session_start(); 
// $namer = $_SESSION['qty'][0];
// if(isset($_SESSION['qty'])) 
//  echo $namer."hello";?>
<!doctype html>
<html lang="en">
  <head>
    <title>ReCircle</title>
    <!-- (adding bootstrap CDN)-->
    <link href="main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
      <!--Navigation bar-->
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
    <div class="border rounded banner shadow-lg p-1 text-center text-white">
      <div class="col-md-6 mx-auto my-3">
        <h1 class="display-4 font-weight-normal"> ReCircle <span class="spinner spinner-grow spinner-grow-sm text-success"></span></h1>
        <p class="lead font-weight-normal">Scrap for Cash!</p>
        <p class="lead font-weight-normal">Please <a class="py-2" href="p5-signin.php">Login</a> to access more</p>
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
    </div>
    <!-- 1st row of 2 aisles -->
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <a href="p2-aisle-vegetable.php"> <!-- 1st aisle -->
      <div class="paper border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
        <div class="my-3 py-3 border" >
          <h2 class="display-5">Paper</h2>
          <p class="display-5"></p>
        </div>
        <div style="height: 300px;"></div>
      </div>
      </a>
      <a href="p2-aisle-fruit.php">  <!-- 2nd aisle -->
      <div class="plastic border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
        <div class="my-3 py-3 border">
          <h2 class="display-5">Plastic</h2>
          <p class="display-5"></p>
        </div>
        <div style="height: 303px;"></div>
      </div>
      </a>
    </div>
    <!-- 2nd row of aisles -->
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <a href="p2-aisle-dairy.php"> <!-- 3rd aisle -->
        <div class="glass border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
          <div class="my-3 p-3 border">
            <h2 class="display-5">Glass</h2>
            <p class="display-5"></p>
          </div>
          <div style="height: 300px;"></div>
        </div>
      </a>
      <a href="p2-aisle-meat.php">  <!-- 4th aisle -->
        <div class="metal border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
          <div class="my-3 py-3 border">
            <h2 class="display-5">Metal</h2>
            <p class="display-5"></p>
          </div>
          <div style="height: 300px;"></div>
        </div>
      </a>
    </div>
    <!-- footer -->
<!--
      <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; 2020-2021 </br> Soen 287</small>
        </div>
        <div class="col-6 col-md">
          <h5>Team</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted">Matthew Pan</a></li>
            <li><a class="text-muted">Ribelle El Ayoubi</a></li>
            <li><a class="text-muted">Mohammad Ali Zahir</a></li>
            <li><a class="text-muted">Maya McRae</a></li>
            <li><a class="text-muted">Lea Lakkis</a></li>
            <li><a class="text-muted">Mira Aji</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted">Locations (Coming soon)</a></li>
            <li><a class="text-muted">Privacy</a></li>
            <li><a class="text-muted">Terms</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted">Coming Soon</a></li>
            <li><a class="text-muted" href="#top">Jump to top of page</a></li>
          </ul>
        </div>
        </footer>
-->
  </body>
</html>