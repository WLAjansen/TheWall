<?php 
require ('header.php');
?>

<?php
   $_SESSION['username'] = "Admin";
   ?> 
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>The Wall | Galerij</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <header>
         <!-- <a href="index.html" class="header-brand">InstaPost</a>
            <nav>
               <ul>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="about.html">About me</a></li>
                  <li><a href="contact.html">Contact</a>
               </ul>
               <a href="cases.html" class="header-cases">Cases</a>
            </nav> --> 
         <!-- gebruik navbar van inlogsysteem -->
      </header>
      <main>
         <section class="gallery-links">
            <div class="wrapper">
            <h2>Galerij</h2>

            <div class="gallery-container">
               <?php
               include_once 'includes/dbh.inc.php';

               $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed!";
        exit();
               } else {
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);

                  while ($row = mysqli_fetch_assoc($result)) {
                     echo '<a href="#">
                  <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
               </a>';
                  }
               }
               ?>
            </div>

            <?php
               if (isset($_SESSION['username'])) {
                  echo '</div class="gallery-upload">
               <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
               <input type="text" name="filename" placeholder="Naam van het bestand...">
               <input type="text" name="filetitle" placeholder="Titel van bestand...">
               <input type="text" name="filedesc" placeholder="Beschrijving van bestand...">
               <input type="file" name="file">
               <button type="submit" name="submit">Upload</button>
               </form>
               </div>';
               }
               ?>
         </section>
      </main>
   </body>
</html>