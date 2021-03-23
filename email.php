<?php
    $destinatario = 'franco11navarro11@gmail.com';
    $asunto = 'Reserva';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $adultos = $_POST['adultos'];
    $ninos = $_POST['ninos'];

    $header = "Enviado desde marisqueria";
    $mensajeCompleto = $nombre . "\nQuiere reservar una mesa para: " . $adultos . " adultos y " . $ninos . "niños";

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    header("location:/index.html");
?>