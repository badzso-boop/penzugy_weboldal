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
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method = "post">
            <input type="text" name = "name" placeholder = "Teljes név" class = "form">
            <br>
            <input type="text" name = "email" placeholder = "Email cím" class = "form">
            <br>
            <input type="text" name = "uid" placeholder = "Felhasználónév" class = "form">
            <br>
            <input type="password" name = "pwd" placeholder = "Jelszó" class = "form">
            <br>
            <input type="password" name = "pwdrepeat" placeholder = "Jelszó újra" class = "form">
            <br>
            <button type = "submit" name = "submit" class = "button">Sign up</button>
        </form>

        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields</p>";
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo "<p>Chose another username!</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Chose another email!</p>";
                }
                else if ($_GET["error"] == "passworddontmatch") {
                    echo "<p>Password don't match</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrond, try again!</p>";
                }
                else if ($_GET["error"] == "usernametaken") {
                    echo "<p>Username alredy taken</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p>You have signed up!</p>";
                }
            }
        ?>
    </section>

    <?php
        include_once 'footer.php';
    ?>
</body>
</html>