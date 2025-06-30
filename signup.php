<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>

    <h1 class="header" id="signup-heading">Please Sign Up</h1>

    <?php flash('register') ?>

    <form method="post" action="./controllers/UsersController.php" aria-labelledby="signup-heading">
        <input type="hidden" name="type" value="register">

        <label for="usersName">Full Name:</label>
        <input type="text" id="usersName" name="usersName" placeholder="Enter your full name..." required>

        <label for="usersEmail">Email:</label>
        <input type="email" id="usersEmail" name="usersEmail" placeholder="Enter your email address..." required>

        <label for="usersUid">Username:</label>
        <input type="text" id="usersUid" name="usersUid" placeholder="Choose a username..." required>

        <label for="usersPwd">Password:</label>
        <input type="password" id="usersPwd" name="usersPwd" placeholder="Enter your password..." required>

        <button type="submit" name="submit">Sign Up</button>
    </form>
    
<?php 
    include_once 'footer.php'
?>
