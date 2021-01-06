<?php
    include 'db_connection.php';
    $conn = OpenCon();
    CloseCon($conn);
?>
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
    <?php 
        if (isset($_SESSION["useruid"])) {
            echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
        }
    ?>
    <h1 class = "cim">Pénzügy</h1>
    <p class = "szoveg">Üdvözöllek a saját online pénztárcádban! <br> Először is <a href = "signup.php" class = "cimszavak">regisztrálj</a> vagy ha már van fiókod <a href = "login.php" class = "cimszavak">lépj be!</a></p>
    <?php
        include_once 'footer.php';
    ?>
</body>
</html>