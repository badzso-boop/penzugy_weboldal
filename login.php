<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pénzügy</title>
</head>
<body>
  <?php
  include_once 'header.php';
  ?>

  <section class="signup-form">
    <h2>Log In</h2>
    <div class="signup-form-form">
      <form action="includes/login.inc.php" method="post">
        <input type="text" class = "form" name="uid" placeholder="Username/Email...">
        <br>
        <input type="password" class = "form" name="pwd" placeholder="Password...">
        <br>
        <button type="submit" name="submit" class = "button">Sign up</button>
      </form>
    </div>

  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Wrong login!</p>";
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
