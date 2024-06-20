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
   <section id="produkte">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-5">
          <h1>Entdecke unsere Produkte</h1>
        </div>
        <div id="t-shirt" class="pizza-menu d-flex flex-wrap slide-in-left"  data-aos="fade-right" data-aos-duration="1000">
          <div class="col-md-6">
            <img src="images/bacio-t-shirt.jpg" alt="Bacio  T-Shirt" title="Bacio  T-Shirt" class="img-fluid">
          </div>
          <div class="col-md-6 pizza-content bg-dark fg-white d-flex flex-column justify-content-center text-center">
            <h2>Bacio T-Shirt</h2>
            <p>hochwertige Baumwolle, verschiedene Designs</p>
            <a href="produkte.php"><button class="button-white mt-3">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
          </div>
        </div>
        <div id="aromi" class="pizza-menu d-flex flex-wrap-reverse" data-aos="fade-left" data-aos-duration="1000">
          <div class="col-md-6 pizza-content d-flex flex-column justify-content-center text-center">
            <h2>Baio Aromi</h2>
            <p>Basilikum, Oregano, Rosmarin, Thymian, Salbei</p>
            <p>Chili, Knoblauch, Paprika, Getrocknete Tomaten, Pfeffer, Salz</p>
            <a href="produkte.php"><button class="button-dark mt-3">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
          </div>
          <div class="col-md-6">
            <img src="images/bacio-aromi.jpg" alt="Bacio Aromi" title="Bacio Aromi" class="img-fluid">
          </div>
        </div>
        <div id="borsa" class="pizza-menu d-flex flex-wrap"  data-aos="fade-right" data-aos-duration="1000">
          <div class="col-md-6">
          <img src="images/bacio-borsa.jpg" alt="Bacio Borsa" title="Bacio Borsa" class="img-fluid">
          </div>
          <div class="col-md-6 pizza-content d-flex flex-column justify-content-center text-center">
            <h2>Bacio Borsa</h2>
            <p>umweltfreundlicher Stoff, langlebig, robust</p>
            <a href="produkte.php"><button class="button-dark mt-3">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
          </div>
        </div>
      </div>
    </div>
    <?php include 'dialog.php'; ?>
   </section>
   <section id="ideen">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <h2>Was sollte es in deinen Augen auch geben?</h2>
          <p>Wir sind immer daran interessiert, unser Angebot zu erweitern und auf deine Wünsche einzugehen. Fehlt dir etwas in unserer Kollektion oder hast du eine besondere Idee? Lass es uns wissen und hilf uns, unser Sortiment noch besser zu gestalten!</p>
          <a href="https://www.instagram.com/direct/t/17845550676236674"><button class="button-dark mt-3">teil es uns doch gerne auf instagram mit <i class="fa-solid fa-angle-right"></i></button></a>
        </div>
      </div>
    </div>
   </section>
  </main>


<?php include 'footer.php'; ?>

  <script src="js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/script.js"></script>
  
</body>
</html>