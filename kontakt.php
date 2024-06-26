<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Kontakt | Bacio</title>
  <?php include 'head.php'; ?>
</head>
<body>

  <?php include 'nav.php'; ?>

  <main>
    <section id="pizzeria">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 data-aos="fade-up" data-aos-duration="1000">Besuch uns doch in unserer Pizzeria !</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.659761074392!2d11.39026627649128!3d47.262356071160376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479d6be47c2d74b5%3A0x285c061b1b992de9!2sMaximilianstra%C3%9Fe%2011%2C%206020%20Innsbruck!5e0!3m2!1sde!2sat!4v1718608056034!5m2!1sde!2sat" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="fade-up" data-aos-duration="1000"></iframe>
          </div>
        </div>
        <div class="row mt-3">
        <div class="col-md-6">
            <p data-aos="fade-up" data-aos-duration="1000">Pizza Bacio GmbH<br>Armando Ammirati & Andreas Schmid<br>Maximilianstraße 11<br>6020 Innsbruck<br>Österreich</p><br>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
            <a href="tel:+496542368512">T: +49 654 236 8512</a><br>
            <a href="mailto:info@pizzabacio.at">M: info@pizzabacio.at</a>
          </div>
        </div>
      </div>
    </section>
    <section id="kontaktformualr" class="my-4" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Oder hast du eine Frage?</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form action="mail.php" method="post" class="was-validated">
              <div class="input-group">
                <input type="text" id="name" name="name" placeholder="" required="">
                <label for="name">Vor- und Nachname</label>
                <div class="valid-feedback">Gültige Eingabe.</div>
                <div class="invalid-feedback">Bitte gib deinen Name ein.</div>
              </div>
              <div class="input-group">
                <input type="email" id="email" name="email" placeholder="" required="">
                <label for="email">E-Mail Adresse</label>
                <div class="valid-feedback">Gültige Eingabe.</div>
                <div class="invalid-feedback">Ungültige Eingabe</div>
              </div>
              <div class="input-group">
                <textarea name="nachricht" id="nachricht" placeholder="" required=""></textarea>
                <label for="nachricht">Nachricht</label>
                <div class="invalid-feedback">Bitte gib deine Nachricht ein.</div>
              </div>
              <div class="checkbox-group">
                <label for="datenschutz"><input type="checkbox" name="datenschutz" id="datenschutz" required=""> Ich akzeptiere die Datenschutzerklärung und stimme der Verarbeitung meiner Daten zu.</label>                
                <div class="invalid-feedback">Dem Datenschutz muss zugestimmt werden.</div>
              </div>
              <button type="submit" name="submit" class="button-dark">absenden <i class="fa-solid fa-angle-right"></i></button>
            </form>
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