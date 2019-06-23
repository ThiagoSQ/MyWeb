<?php
    $destinatario = "httpsmyweb@gmail.com";
    $nombre = $_POST["nombre"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $email = $_POST["email"];

    $header = "Enviado desde la pagina de MyWeb";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $email, $header);
    echo "<script>alert("Correo Enviado Exitosamente")</script>";
    echo "<script> setTimeout(\"location.href="contactanos.html"\",1000)</script>";

?>
