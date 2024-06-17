<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer/Exception.php';
require 'src/PHPMailer/PHPMailer.php';
require 'src/PHPMailer/SMTP.php';



if (isset($_POST['submit'])) {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['nachricht']);
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Bacio | Ein Kuss aus dem Ofen.</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/fontawesome-6.5.2/css/all.css">
  <link rel="stylesheet" href="css/style.css">

</head>


<body>
    <?php
    // E-Mail-Versand
    if (isset($_POST['submit'])) {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'utf-8';
        $mail->setLanguage('de');
        $mail->isSMTP();
        $mail->Host = "securemail-wda-innsbruck-at.prossl.de";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Username = "wiastud-newsletter";
        $mail->Password = "45YerkaidaAsaef5Kiap";
        $mail->From = "stud-newsletter@wda-innsbruck.at";
        $mail->FromName = "BACIO";

        //$mail->addAddress($email, $name );
        $mail->addAddress('vanessa.innerbichler@gmail.com', "Vanessa Innerbichler");

        $mail->isHTML(true);

        $mail->Subject = "Vielen Dank für deine Nachricht ";

        $mail->Body    = 
         
            "<h1 style='color:#fff5e8; background-color:#d44000; padding: 5px 10px;'>Vielen Dank für deine Nachricht</h1>" 
            . ""
            . "<p style='font-size: 18px;'>Guten Tag" . " " . $name . " " .  $nachname .",</p>" 
            . "<p>haha</p>" . "<br>"
            . "<h2>Bitte überprüfen Sie nochmal die folgenden Daten:</h2>" . "<br>"
            ."<div>Name:" . " ". $name . " " . $nachname . "</div>"
            . "<div>Email: " . $email . "</div>" ;
            

        try {
            $mail->send();
            echo '<h1>Danke</h1><h2>Wir melden uns bei Ihnen ' . $vorname . ' ' . $nachname . '</h2>';
            echo '<script>window.location.replace("danke.php")</script>';
            
        } catch (Exception $ex) {
            echo 'Es ist ein Fehler passiert!' . $mail->ErrorInfo;
        }

        //header("Location: danke.php");
    }
    
    ?>
</body>

</html>