<?php
require "header.php"; // Maak met CSS
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php 
            if (isset($_SESSION['userId'])) {
            echo '<p class="login-status">Je bent ingelogd!</p>'; // Stijl de tekst hiervan met CSS: bijv met een groen kleurtje en wat text-decoration!
            }
            else {
                echo '<p class="login-status">Je bent uitgelogd!</p>'; // Stijl de tekst hiervan met CSS: bijv met een blauw kleurtje en wat text-decoration!

            }
            ?>
            <?php
            if (isset($_SESSION['userId'])) {
   echo '<div class="gallery-upload">

               <div class="gallery-upload">
                  <h2>Upload</h2>
               <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
               <input type="text" name="filename" placeholder="File name...">
               <input type="text" name="filetitle" placeholder="Image title...">
               <input type="text" name="filename" placeholder="Image description...">
               <input type="file" name="file">
               <button type="submit" name="submit">UPLOAD</button>
               </form>
               </div>';
               }
             ?>
</section>
</div>
</main>

<?php 
require "footer.php"; // Maak met CSS
?>