<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Unsere Produkte | Bacio</title>
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
            <img src="images/bacio-t-shirt.jpg" alt="Bacio T-Shirt" title="Bacio T-Shirt" class="img-fluid">
          </div>
          <div class="col-md-6 pizza-content bg-dark fg-white d-flex flex-column justify-content-center text-center">
            <h2>Bacio T-Shirt</h2>
            <p>Das Bacio T-Shirt vereint Komfort und Stil in einem zeitlosen Design.<br>In einer Einheitsgröße und bald auch in mehreren Farben erhältlich.</p>
            <a><button class="button-white mt-3 bestell-button">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
          </div>
        </div>
        <div id="aromi" class="pizza-menu d-flex flex-wrap-reverse" data-aos="fade-left" data-aos-duration="1000">
          <div class="col-md-6 pizza-content d-flex flex-column justify-content-center text-center">
            <h2>Bacio Aromi</h2>
            <p>Chili, Knoblauch, Paprika, Getrocknete Tomaten, Pfeffer, Salz<br>Perfekt, um deiner Pizza eine feurige Note zu geben<br> und gleichzeitig die Aromen der anderen Zutaten zu betonen.</p>
            <a><button class="button-dark mt-3 bestell-button">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
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
            <p>Die Bacio Stofftasche ist robust und stilvoll,<br> mit einem dezenten Logo bedruckt.<br>Sie bietet ausreichend Platz für Einkäufe und tägliche Gegenstände<br> und kann bequem über der Schulter getragen werden.</p>
            <a><button class="button-dark mt-3 bestell-button">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
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
          <h2>Was sollte es auch geben?</h2>
          <p>Wir sind immer daran interessiert, unser Angebot zu erweitern und auf deine Wünsche einzugehen. Fehlt dir etwas in unserer Kollektion oder hast du eine besondere Idee? Lass es uns wissen und hilf uns, unser Sortiment noch besser zu gestalten!</p>
          <a href="https://www.instagram.com/direct/t/17845550676236674"><button class="button-dark mt-3">teil es uns doch gerne auf instagram mit <i class="fa-solid fa-angle-right"></i></button></a>
        </div>
        <div class="col-md-6 radio">
          <audio controls>
            <source src="medien/bacio-radiospot.mp3" type="audio/mpeg">
            Dein Browser unterstützt das Audio-Element nicht.
          </audio>
          <h3 class="fg-primary">oder hör dir doch unsere neueste Idee an!</h3>
        </div>
      </div>
    </div>
   </section>

   <div class="bestell-bestaetigung p-1 fixed-bottom">
    Der Artikel wurde zum Wahrenkorb hinzugefügt.
  </div>

  </main>


<?php include 'footer.php'; ?>

  <script src="js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/script.js"></script>
  
</body>
</html>
