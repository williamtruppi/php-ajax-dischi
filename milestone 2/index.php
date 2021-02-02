<?php

include './partials/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="dist/css/style.css">
</head>

<body>

  <!-- apertura navbar -->
  <nav>
    <div class="navbar container d-flex">
      <img src="dist/img/logo.png" alt="">
    </div>
  </nav>
  <!-- chiusura navbar -->

  <!-- apertura main -->
  <main>

    <!-- apertura disk_box -->
    <div class="disk_box container d-flex">

      <?php foreach ($diskList as $disk) { ?>

        <!-- apertura disk_container -->
        <div class="disk_container">

          <!-- apertura disk -->
          <div class="disk d-flex">
            <img src="<?php echo $disk['poster']; ?>" alt="">
            <h1><?php echo $disk['title']; ?></h1>
            <h3><?php echo $disk['author']; ?></h3>
            <h3><?php echo $disk['genre']; ?></h3>
            <h3><?php echo $disk['year']; ?></h3>
          </div>
          <!-- chiusura disk -->

        </div>
        <!-- chiusura disk_container -->

      <?php } ?>

    </div>
    <!-- chiusura disk_box -->

  </main>
  <!-- chiusura main -->

  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="dist/js/main.js"></script>
</body>

</html>