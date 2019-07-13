<?php
$name = $_POST['nombre'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['subject'] . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuelperdomo1710@icloud.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $subject, utf8_decode($message), $header);

header("Location:../index.html");
?>