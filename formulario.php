<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

 // Datos para el correo
$destinatario = "abdeelart@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";


// Enviando Mensaje

19

mail($destinatario, Sasunto, Scarta);

**20

header('Location:mensaje-de-envio.html")


?>