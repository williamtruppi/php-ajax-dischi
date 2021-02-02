<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="dist/css/style.css">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>

  <div class="wrapper">

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

        <!-- apertura disk_container -->
        <div class="disk_container" v-for="disc in discList">
          <!-- apertura disk -->
          <div class="disk d-flex">
            <div class="poster_image">
              <img :src="`${disc.poster}`" alt="">
            </div>
            <h1>{{disc.title}}</h1>
            <h3>{{disc.author}}</h3>
            <h3>{{disc.genre}}</h3>
            <h3>{{disc.year}}</h3>
          </div>
          <!-- chiusura disk -->

        </div>
        <!-- chiusura disk_container -->

      </div>
      <!-- chiusura disk_box -->

    </main>
    <!-- chiusura main -->

  </div>


  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="src/main.js"></script>
</body>

</html>