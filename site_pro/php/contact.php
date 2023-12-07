<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
?>

<section id="contact">
<h1>Contact</h1>
    <form action="index.php#contact" method="post">
    <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    <label for="email">Adresse e-mail</label>
        <input type="email" name="email" id="email">
    <label for="subject">Objet</label>
        <input type="text" name="subject" id="subject">
    <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>
        <input type="submit" value="Envoyer">
    </form>
    </section>
<?php
$mail = new PHPMailer();
$mail->From = $_POST["email"]; 
$mail->FromName = $_POST["name"]; 
$mail->isHTML(true); 
$mail->Subject = $_POST["subject"]; 
$mail->Body = $_POST["message"];
$mail->addAddress('gabriel.reuziault@sts-sio-caen.info', 'Gabriel Reuziault'); 
if(!$mail->send()) 
{ 
echo "Erreur lors de l'envoi : " . $mail->ErrorInfo;
} 
else 
{ 
echo "Le message a bien été envoyer"; 
}
?>
