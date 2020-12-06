<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

<form action="userAPI.php">
    <div class="input-group">
        <label for="username">Username</label>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="hidden" name="txtAction" value="login">
    </div>
    <div class="input-group">
        <button type="submit" name="login_user" class="btn">Login</button>
    <p>Not yet  a member? <a href="register.php">Sign up </a></p>
</form>
</body>
</html>