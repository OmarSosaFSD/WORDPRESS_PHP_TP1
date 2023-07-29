<?php
#aca cargo en la variable "nombre_form" el valor que ocupa el atributo 'nombre' del POST
$nombre_form = $_POST['nombre']; 
$apellido_form = $_POST['apellido'];
$mail_form = $_POST['mail'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail =
"Nombre: " . $nombre_form . "\r\n";
"Apellido: " . $apellido_form . "\r\n";
"Correo: " . $mail_form . "\r\n";
"Mensaje: " . $mensaje_form;

mail("sosaomar22@gmail.com", "Mensaje de prueba TP1", $cuerpo_mail);

?>