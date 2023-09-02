<?php
/*Este codigo se encarga de enviar la info al correo con la funcion "mail" 
y tambien de hacer la conexion con la base de datos con la funcion "mysqli_connect()" */

require_once("conexiondb.php");//aca traigo los datos de las variables de conexion a la bd

#aca cargo en la variable "nombre_form" el valor que ocupa el atributo 'nombre' del POST
$nombre_form = $_POST['nombre']; 
$apellido_form = $_POST['apellido'];
$mail_form = $_POST['mail'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail =
"Nombre: " . $nombre_form . "\r\n".
"Apellido: " . $apellido_form . "\r\n".
"Correo: " . $mail_form . "\r\n".
"Mensaje: " . $mensaje_form;

mail("sosaomar22@gmail.com", "Mensaje de prueba TP1", $cuerpo_mail);

//CONEXION CON LA BASE DE DATOS

$entorno = "local";
 if ($entorno === "local") {
$conexion = mysqli_connect("$local_host", "$local_user", "$local_pass", "$local_db"); 
    if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
 }
 else{
    $conexion = mysqli_connect("$online_host", "$online_user", "$online_pass", "$online_db"); 
    if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
 }
 }
}

mysqli_query($conexion, "INSERT INTO pedidos VALUES 
(DEFAULT, '$nombre_form', '$apellido_form', '$mail_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location:contacto.php?ok");

?>