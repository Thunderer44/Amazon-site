<?php
    include "connect.php";
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/signup.css">
</head>

<body>
<div class="loginbox">
            <img src="./images/blank profile.jpeg" class="avatar">
            <h1>Signup here</h1>
            <form action="signup.php" method="post">
                <p>Username</p>
                <input type="text" name="cust_uname" placeholder="Enter Username" >
                <p>Password</p>
                <input type="password" name="cust_psw" placeholder="Enter Password">
                <input type="submit" name="" placeholder="Login">
                <a href="signin.php">Already have an Account?</a>
            </form>
        </div>

</body>
</html>
