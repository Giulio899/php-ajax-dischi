<?php

  include __DIR__ . '/php-partials/database.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- CDN fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <title>Dischi musicali</title>
</head>
<body>

  <header>
    <nav class="left">
      <ul>
        <li><a href="#">Social</a></li>
        <li><a href="#">Negozi</a></li>
        <li><a href="#">Eventi</a></li>
        <li><a href="#">Volantino</a></li>
        <li><a href="#">Libri Feltrinelli</a></li>
        <li><a href="#">Laeffe</a></li>
        <li><a href="#">Carta più</a></li>
      </ul>
    </nav>
    <nav class="right">
      <ul>
        <li><a href="#">App</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Registrati</a></li>
        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="container">
      <div class="section-container">
        <h2>Novità per te</h2>

        <div class="album-container">

          <?php foreach ($arrayDischi as $item) { ?>
            <div class="item">
              <img src="img/<?php echo $item['imgUrl']; ?>" alt="">
              <h3><?php echo $item['album']; ?></h3>
              <h4><?php echo $item['autore']; ?></h4>
              <small>€ <?php echo $item['prezzo']; ?></small>
            </div>
          <?php } ?>

        </div>

      </div>
    </div>
  </main>

  <footer></footer>

</body>
</html>
