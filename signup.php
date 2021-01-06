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
        <h2>Regisztráció</h2>
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
            <button type = "submit" name = "submit" class = "button">Regisztráció</button>
        </form>
        <div class = "wrong">
            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Töltsd ki az összes mezőt!</p>";
                    }
                    else if ($_GET["error"] == "invaliduid") {
                        echo "<p>Válassz másik felhasználónevet!</p>";
                    }
                    else if ($_GET["error"] == "invalidemail") {
                        echo "<p>Válassz másik emailt!</p>";
                    }
                    else if ($_GET["error"] == "passworddontmatch") {
                        echo "<p>A jelszavak nem egyeznek!</p>";
                    }
                    else if ($_GET["error"] == "stmtfailed") {
                        echo "<p>Valami hiba történt, próbáld újra!</p>";
                    }
                    else if ($_GET["error"] == "usernametaken") {
                        echo "<p>Felhasználónév foglalt!</p>";
                    }
                    else if ($_GET["error"] == "none") {
                        echo "<p>Sikeres Belépés!</p>";
                    }
                }
            ?>
        </div>
    </section>

    <?php
        include_once 'footer.php';
    ?>
</body>
</html>