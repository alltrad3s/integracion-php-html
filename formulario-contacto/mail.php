<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false) {

    // Configuración inicial de nuestro servidor de correos, podemos utilizar mailtrap.io para correos de prueba pero 
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'cdd5c5ef5c44b9';
    $phpmailer->Password = '556d5e361647e0';

    //  Añadiendo destinatarios
    $phpmailer->setFrom('mark@facebook.com', 'Mark Zuckerberg');
    $phpmailer->addAddress($email, $name); 

    // Definiendo el contenido de mi email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Mandar el correo
    $phpmailer->send();
    
}

?>