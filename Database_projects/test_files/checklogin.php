<?php 
    $conn = mysqli_connect("localhost", "root", "","infosystem" );

    $user = $_POST['username'] ; 
    $pass = $_POST['password'] ;
    $u = mysqli_real_escape_string($conn, $user);
    $p = mysqli_real_escape_string($conn, $pass);

$sql = "SELECT * FROM user_details WHERE Name = '$u' and Password = '$p' " ; 

$search_result = mysqli_query($conn , $sql);    // search table NOW!
$list = mysqli_fetch_assoc($search_result);

// Return the number of rows in search result
$userfound = mysqli_num_rows($search_result);

if($userfound >= 1)
	{
        {
		    //If user record is found in the userinfo table
            session_start();
            $_SESSION["MM_username"]=$u;
            $_SESSION['last_time'] = time();
            header("Location:p1_login.php?F=1");  	// go to success.php
        }
    }
else     
{
// User record is NOT found in the userinfo table
header("Location:p1_login.php?fail=1");  	// go back to login page
}
	
	
?>
