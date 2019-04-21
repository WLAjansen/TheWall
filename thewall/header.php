<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="The wall">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>The wall | Regilio Spee</title> <!-- Verander title misschien nog naar bedrijfsnaam! -->
      <link rel="stylesheet" href="style.css"> <!-- Gebruik misschien meerdere stylesheets! -->
   </head>
   <body>
      <header>
         <nav class="nav-header-main">
             <a class="header-logo" href="index.php">
            <img src="img/upload-image.png" width="128" height="128" alt="logo">
            </a>
            <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="signup.php">Inloggen</a></li>
               <li><a href="#">Contact</a></li>
            </ul>
</nav>
            <div class="header-login">
               <?php 
                  if (isset($_SESSION['userId'])) {
                     echo '<form action="includes/logout.inc.php" method="post">
                     <button type="submit" name="logout-submit">Logout</button>
                     </form>';
                  }
                  else {
                    echo '<form action="includes/login.inc.php"  method="post">
                  <input type="text" name="mailuid" placeholder="Gebruikersnaam/e-mail...">
                  <input type="password" name="pwd" placeholder="Wachtwoord...">
                  <button type="submit" name="login-submit">Inloggen</button>
               </form>
               <a href="signup.php" class="header-signup">Registreren</a>';
                  }
               ?>
</div>
      </header>
   </body>
</html>