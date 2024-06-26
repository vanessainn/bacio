<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Unsere Pizzen | Bacio</title>
  <?php include 'head.php'; ?>
</head>
<body>

 <?php include 'nav.php'; ?>

  <main>
   <section id="pizza">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-5">
          <h1>Finde deine Lieblingspizza</h1>
        </div>
        <div class="pizza-menu d-flex flex-wrap slide-in-left"  data-aos="fade-right" data-aos-duration="1000">
          <div class="col-md-6">
            <img src="images/bacio-pizza-margherita.jpg" alt="Bacio Pizza Margherita" title="Bacio Pizza Margherita" class="img-fluid">
          </div>
          <div class="col-md-6 pizza-content bg-dark fg-white d-flex flex-column justify-content-center text-center vegetarisch">
          <i class="fa-solid fa-leaf vegetarisch-icon fs-1 fg-primary"></i>
            <h2>Pizza Margherita</h2>
            <p>Tomatensauce, Mozzarella, frisches Basilikum</p>
            <div>
              <a><button class="button-primary mt-3 bestell-button me-4">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
              <a><button id="margherita" class="button-white mt-3">mehr erfahren <i class="fa-solid fa-angle-right"></i></button></a>
            </div>
          </div>
        </div>
        <div class="pizza-menu d-flex flex-wrap-reverse" data-aos="fade-left" data-aos-duration="1000">
          <div class="col-md-6 pizza-content d-flex flex-column justify-content-center text-center vegetarisch">
          <i class="fa-solid fa-leaf vegetarisch-icon fs-1 fg-primary"></i>
            <h2>Pizza Spinaci e Ricotta</h2>
            <p>Tomatensauce, Mozzarella, Spinat, Ricotta-Käse</p>
            <div>
              <a><button class="button-primary mt-3 bestell-button me-4">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
              <a><button id="spinaci-ricotta" class="button-dark mt-3">mehr erfahren <i class="fa-solid fa-angle-right"></i></button></a>
            </div>
          </div>
          <div class="col-md-6">
            <img src="images/bacio-pizza-spinaci-ricotta.jpg" alt="Bacio Pizza Spinaci e Ricotta" title="Bacio Pizza Spinaci e Ricotta" class="img-fluid">
          </div>
        </div>
        <div class="pizza-menu d-flex flex-wrap"  data-aos="fade-right" data-aos-duration="1000">
          <div class="col-md-6">
          <img src="images/bacio-pizza-prosciutto-funghi.jpg" alt="Bacio Pizza Prosciutto e Funghi" title="Bacio Pizza Prosciutto e Funghi" class="img-fluid">
          </div>
          <div class="col-md-6 pizza-content d-flex flex-column justify-content-center text-center">
            <h2>Pizza Prosciutto e Funghi</h2>
            <p>Tomatensauce, Mozzarella, Schinken, Champignons</p>
            <div>
              <a><button class="button-primary mt-3 bestell-button me-4">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
              <a><button id="prosciutto-funghi" class="button-dark mt-3">mehr erfahren <i class="fa-solid fa-angle-right"></i></button></a>
            </div>
          </div>
        </div>
        <div class="pizza-menu d-flex flex-wrap-reverse" data-aos="fade-left" data-aos-duration="1000">
          <div class="col-md-6 pizza-content bg-dark fg-white d-flex flex-column justify-content-center text-center">
            <h2>Pizza Salame</h2>
            <p>Tomatensauce, Mozzarella, Salami</p>
            <div>
              <a><button class="button-primary mt-3 bestell-button me-4">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
              <a><button id="salame" class="button-white mt-3">mehr erfahren <i class="fa-solid fa-angle-right"></i></button></a>
            </div>
          </div>
          <div class="col-md-6">
          <img src="images/bacio-pizza-salame.jpg" alt="Bacio Pizza Salame" title="Bacio Pizza Salame" class="img-fluid">
          </div>
        </div>
        <div class="pizza-menu d-flex flex-wrap" data-aos="fade-right" data-aos-duration="1000">
          <div class="col-md-6">
          <img src="images/bacio-pizza-quattro-formaggi.jpg" alt="Bacio Pizza Quattro Formaggi" title="Bacio Pizza Quattro Formaggi" class="img-fluid">
          </div>
          <div class="col-md-6 pizza-content d-flex flex-column justify-content-center text-center vegetarisch">
             <i class="fa-solid fa-leaf vegetarisch-icon fs-1 fg-primary"></i>
            <h2>Pizza Quattro Formaggi</h2>
            <p>Tomatensauce, Mozzarella, Bergkäse,<br>Cheddar und Blauschimmelkäse</p>
            <div>
              <a><button class="button-primary mt-3 bestell-button me-4">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
              <a><button id="quattro-formaggi" class="button-dark mt-3">mehr erfahren <i class="fa-solid fa-angle-right"></i></button></a>
            </div>
          </div>
        </div>
        <div class="pizza-menu d-flex flex-wrap-reverse" data-aos="fade-left" data-aos-duration="1000">
          <div class="col-md-6 pizza-content d-flex flex-column justify-content-center text-center">
            <h2>Pizza Prosciutto e Ananas</h2>
            <p>Tomatensauce, Mozzarella, Schinken, Ananas</p>
            <div>
              <a><button class="button-primary mt-3 bestell-button me-4">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
              <a><button id="prosciutto-ananas" class="button-dark mt-3">mehr erfahren <i class="fa-solid fa-angle-right"></i></button></a>
            </div>
          </div>
          <div class="col-md-6">
          <img src="images/bacio-pizza-prosciutto-ananas.jpg" alt="Bacio Pizza Prosciutto e Ananas" title="Bacio Pizza Prosciutto e Ananas" class="img-fluid">
          </div>
        </div>
        <div class="pizza-menu d-flex flex-wrap" data-aos="fade-right" data-aos-duration="1000">
          <div class="col-md-6">
          <img src="images/bacio-pizza-tonno-cipolla.jpg" alt="Bacio Pizza Tonno e Cipolla" title="Bacio Pizza Tonno e Cipolla" class="img-fluid">
          </div>
          <div class="col-md-6 pizza-content bg-dark fg-white d-flex flex-column justify-content-center text-center">
            <h2>Pizza Tonno e Cipolla</h2>
            <p>Tomatensauce, Mozzarella, Thunfisch, rote Zwiebeln</p>
            <div>
              <a><button class="button-primary mt-3 bestell-button me-4">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
              <a><button id="tonno-cipolla" class="button-white mt-3">mehr erfahren <i class="fa-solid fa-angle-right"></i></button></a>
            </div>
          </div>
        </div>
        <div class="pizza-menu d-flex flex-wrap-reverse" data-aos="fade-left" data-aos-duration="1000">
          <div class="col-md-6 pizza-content mb-5 d-flex flex-column justify-content-center text-center">
            <h2>Pizza Salame Piccante</h2>
            <p>Tomatensauce, Mozzarella, scharfe Salami</p>
            <div>
              <a><button class="button-primary mt-3 bestell-button me-4">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
              <a><button id="salame-piccante" class="button-dark mt-3">mehr erfahren <i class="fa-solid fa-angle-right"></i></button></a>
            </div>
          </div>
          <div class="col-md-6 mb-5">
          <img src="images/bacio-pizza-salame-piccante.jpg" alt="Bacio Pizza Salame Piccante" title="Bacio Pizza Salame Piccante" class="img-fluid">
          </div>
        </div>
        </div>
    </div>
    <?php include 'dialog.php'; ?>
   </section>

  <div class="bestell-bestaetigung fixed-bottom">
    Der Artikel wurde zum Wahrenkorb hinzugefügt.
  </div>

  </main>


<?php include 'footer.php'; ?>

  <script src="js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/script.js"></script>
  
</body>
</html>