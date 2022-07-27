<?php
    session_start();
    
    $Name = $_POST['username'];
    $pass = $_POST['password'] ; 
    $passconfirm = $_POST['password2'] ;
    $Email = $_POST['email'];
    
    $messagesubject = "Validation";
    $body = "Please validate your email";

    //$emailaddress = 'test@gmail.com';
    $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
    
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) //if username empty
    {
        header("Location:p3_register.php?empty=1");   //empty error
    }

    if ($pass !== $passconfirm) 
    {
        header("Location:p3_register.php?pxp=1");   //pass and confim pass error
    }

    if (preg_match($pattern, $Email) === 1) 
    {
        // emailaddress is valid
        mail($Email, $messagesubject, $body); // require live server to work
        
        $conn = mysqli_connect("localhost", "root", "","infosystem" );
    
        $sql_ = "INSERT INTO `user_details` (Name, Password, Email) VALUES ('$Name', '$pass', '$Email')";

        $result = mysqli_query ( $conn, $sql_);

        mysqli_close($conn);

        if ($result>0)
            {
                header("Location:p3_register.php?success=1"); 
            }
            else 
                header("SaveInsert.php");
    }

    /*if(!filter_var($Email, FILTER_VALIDATE_EMAIL)) //Check Email is valid
    {
        mail($Email, $messagesubject, $body);
    }*/
    else // if invalid
    {
        header("Location:p3_register.php?xmail=1"); //return to register
    }     
    
?>