<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php music</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <header>

    </header>
    <main>
      <!-- <img src="https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" alt=""> -->
      <div class="container">
        <?php
        include "var.php";
        $response = $data["response"];
        foreach ($response as $song ) {
          echo "<div>";
          ?>
          <img src="<?php echo $song["poster"]; ?>" alt="poster">
          <?php

          echo "<h3>" . $song["title"] . "</h3>";
          echo "<h4>" . $song["author"] . "</h4>";
          echo "<span>" .$song["year"];

          echo "</div>";
        }
         ?>
      </div>
    </main>
  </body>
</html>
