<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer/Exception.php';
require 'src/PHPMailer/PHPMailer.php';
require 'src/PHPMailer/SMTP.php';



if (isset($_POST['submit'])) {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $nachricht = htmlspecialchars($_POST['nachricht']);
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Bacio | Ein Kuss aus dem Ofen.</title>

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
        $mail->FromName = "Bacio";

        //$mail->addAddress($email, $name );
        $mail->addAddress('vanessa.innerbichler@gmail.com', "Vanessa Innerbichler");

        $mail->isHTML(true);

        $mail->Subject = "Team Bacio kümmert sich um deine Nachricht.";

        $mail->Body    = 
         
            "<h1 style='font-family: 'Allan', sans serif; color: #5B91C7; font-size: 20px;>Vielen Dank für deine Nachricht!</h1>" 
            . ""
            . "<p style='font-size: 16px;'>Hier sind alle Daten und die Nachchricht nochmal zusammengefasst:</p>" 
            . $name . "<br>"
            . $email . "<br>"
            . $nachricht . "<br>"
            . "<p>Das Team Bacio bemüht sich deine Nachricht so zeitnah wie möglich zu bearbeiten.</p>";
            

        try {
            $mail->send();
            echo '<h1>Danke</h1><h2>Wir melden uns bei Ihnen ' . $vorname . ' ' . $nachname . '</h2>';
            echo '<script>window.location.replace("danke.php")</script>';
            
        } catch (Exception $ex) {
            echo 'Es ist ein Fehler passiert!' . $mail->ErrorInfo;
        }
    }
    
    ?>
</body>

</html>