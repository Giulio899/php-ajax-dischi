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
