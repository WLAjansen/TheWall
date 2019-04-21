<?php
require "header.php"; // Maak met CSS
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Registreren</h1>
            <?php 
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="signuperror">Vul alle velden in!</p>'; //Laat met de css deze tekst rood worden
                }
                else if ($_GET["error"] == "invaliduidmail") {
                    echo '<p class="signuperror">Ongeldige gebruikersnaam en e-mail!</p>'; // Laat met css deze tekst oranje worden (maak wel een nieuwe class aan: bijv "signuperror2")
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo '<p class="signuperror">Ongeldige gebruikersnaam!</p>'; // Laat met css deze tekst oranje worden (maak wel een nieuwe class aan: bijv "signuperror2")
                }
                else if ($_GET["error"] == "invalidmail") {
                    echo '<p class="signuperror">Ongeldige e-mail!</p>'; // Laat met css deze tekst oranje worden (maak wel een nieuwe class aan: bijv "signuperror2")
                }
                else if ($_GET["error"] == "passwordcheck") {
                    echo '<p class="signuperror">Ongeldige e-mail!</p>'; // Laat met css deze tekst oranje worden (maak wel een nieuwe class aan: bijv "signuperror2")
                }
                else if ($_GET["error"] == "usertaken") {
                    echo '<p class="signuperror">Gebruikersnaam is al in gebruik!</p>'; // Laat met css deze tekst oranje worden (maak wel een nieuwe class aan: bijv "signuperror2")
                }
            }
            else if ($_GET["signup"] == "success") {
                echo '<p class="signupsuccess">Login succesvol!</p>'; // Laat met css deze tekst groen worden gebruik wel de "signupsuccess" class!
            }
            ?>
            <form class="form-signup" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Gebruikersnaam">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Wachtwoord">
            <input type="password" name="pwd-repeat" placeholder="Herhaal wachtwoord">
            <button type="submit" name="signup-submit">Registreren</button>
        </form>

        <?php 
        if (isset($_GET["newpwd"])) {
            if ($_GET["newpwd"] == "passwordupdated") {
                echo '<p class="signupsuccess">Your password has been reset!</p>';
            }
        }

    ?>

            <a href="reset-password.php">Forgot your password?</a>
</section>
</div>
</main>


<?php 
require "footer.php"; // Maak met CSS
?>
