<?php
$nombre = $_POST['nombre'];
$direccion:$_POST['direccion'];
$telefono:$_POST['telefono'];
$mail = $_POST['mail'];
$consulta = $_POST['consulta'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su direccion es: " . $direccion. " \r\n";
$mensaje .= "Su telefono es: " . $telefono. " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "consulta: " . $_POST['consulta'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'leo_savina@hotmail.com';
$asunto = 'Mensaje del sitio Compañia de Andinismo Profesional de Mendoza';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("location: index.html");
?>
