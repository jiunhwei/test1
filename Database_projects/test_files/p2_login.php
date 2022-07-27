<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Login</title>
</head>
<body>
<main>
    <form id="form1" name="form1" method="post" action="checklogin.php">
        <h1>Login</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            
            <?php if(isset($_GET['fail'])) echo "<b>Invalid username or password</b>";?>
            <?php if(isset($_GET['rip'])) echo "<b>Error occured please try loging back in</b>";?>
            <?php if(isset($_GET['F'])) echo "<b>login test success</b>";?>
            <?php if(isset($_GET['T'])) echo "<b>Login Session timeout</b>";?>
            
        </div>

        <button type="submit">Login</button>
        
        <footer>Not a member? <a href="register.php">Register now</a></footer>
        
    </form>
</main>
</body>
</html>