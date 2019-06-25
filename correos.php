<?php

// Llamando a los campos 
 $nombre = $_POST["nombre"];
 $asunto = $_POST["asunto"];
 $mensaje = $_POST["mensaje"];
 $email = $_POST["email"];

// Datos para el correo 
$destinatario = "httpsmyweb@gmail.com";
$asunto = "Enviado desde la pagina de MyWeb";  

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Mensaje: $mensaje \n";

// Enviando Mensaje
mail($destinatario, $carta);

?>
