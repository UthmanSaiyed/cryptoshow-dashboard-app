<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptoshow</title>
    <link rel="stylesheet" href="./style.css" type="text/css">
</head>
<body>
    <nav>
        <ul>
            <a href="index.php"><li>Home</li></a>
            <a href="eventsView.php"><li>Events</li></a>
            
            <?php if(!isset($_SESSION['usersId'])) : ?>
                <a href="signup.php"><li>Sign Up</li></a>
                <a href="login.php"><li>Login</li></a>
               
            <?php else: ?>
                <a href="profileView.php"><li>Profile</li></a>
                <a href="./controllers/UsersController.php?q=logout"><li>Logout</li></a>
            <?php endif; ?>
        </ul>
    </nav>
