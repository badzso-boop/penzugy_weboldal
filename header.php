<?php
    session_start();
?>

<ul class = "header">
    <li>
        <a href="index.php">Home</a>
    </li>
    <?php 
        if (isset($_SESSION["useruid"])) {
            echo "<li><a href='profile.php'>Profile</a></li>";
            echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
        }
        else {
            echo "<li><a href='signup.php'>Sign Up</a></li>";
            echo "<li><a href='login.php'>Log In</a></li>";
        }
    ?>
</ul>   
<div class = "main">