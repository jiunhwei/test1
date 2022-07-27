<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
    <?php 
    if(isset($_GET['success'])):
    ?>
        <h3> Successfully registered, <a href="login.php">click here to return</a></h3>
    <?php 
    else:
    ?>
<main>
    <form action="checkregister.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="password2">Confirm password:</label>
            <input type="password" name="password2" id="password2" required>
            <?php if(isset($_GET['pxp'])) echo "<b>Password and Confirm password does not match</b>";?>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit">Register</button>
        
        <?php if(isset($_GET['empty'])) echo "<b>The fields cannot be empty</b>";?>
        <?php if(isset($_GET['xmail'])) echo "<b>Email is invalid</b>";?>
        
        <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
</main>
    <?php 
    endif;
    ?>
</body>
</html>