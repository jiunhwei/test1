<?php
    //$servername = "mysql:host=localhost;dbname=infosystem";
    //$username = "localhost";
    //$password = "1234";

    // Create connection
    //$conn = new mysqli($servername, $username, $password);
    
    $conn = mysqli_connect("localhost", "root", "","infosystem" );

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";
?>
