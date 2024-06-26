<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Danke für deine Nachricht | Bacio</title>
  <?php include 'head.php'; ?>
</head>
<body>

  <?php include 'nav.php'; ?>

  <section id="danke">
    <div class="container">
      <div class="row d-flex align-items-center text-center">
        <div class="col-md-12 grazie">
          <h1>Danke für deine Nachricht !</h1>
          <p>Du erhälst in kürze eine Mail zur Bestätigung deiner Nachricht.</p>
          <img src="medien/bacio-pizza-animation.gif" alt="Eine Pizza wird gezeichnet" title="Eine Pizza wird gezeichnet" class="img-fluid">
        </div>>
      </div>
    </div>
  </section>

  <footer class="px-4 mt-5 fixed-bottom pt-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <a href="index.php" aria-label="Gehe zur Startseite"><img src="images/bacio-logo.png" alt="Baio Logo" title="Bacio Logo"></a>
        </div>
        <div class="col-md-9 d-flex footer-content">
          <div class="footer-menu d-flex">
            <a href="impressum.php">Impressum</a>
            <a href="datenschutz.php">Datenschutz</a>
            <a href="kontakt.php">Kontakt</a>
          </div>
          <div class="footer-socials d-flex">
            <a href="https://www.instagram.com/pizza.bacio/" aria-label="Sieh dir unsere Instagram Seite an"><i class="fa-brands fa-instagram fs-1 fg-white"></i></a>
            <a href="https://www.facebook.com/bizza.bacio" aria-label="Sieh dir unsere Facebook Seite an"><i class="fa-brands fa-facebook fs-1 fg-white"></i></a>
          </div>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
          <p>&copy; <?php echo date(Y) ?> Pizza Bacio GmbH</p>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>