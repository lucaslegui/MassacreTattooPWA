<?php
if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $mail = $_POST['mail'];
    $fecha = $_POST['fecha'];
    $artista = $_POST['opciones'];

    $mailTo = 'lucas.leguizamon@davinci.edu.ar'; 

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
    $headers .= "from: $mail". "\r\n";
    

    $asunto = "Nueva reserva de $nombre $apellido"; 
    $cuerpo = "
        <h1>Nueva reserva</h1>
        <p>Nombre: $nombre $apellido</p>
        <p>Teléfono: $telefono</p>
        <p>Email: $mail</p>
        <p>Fecha: $fecha</p>
        <p>Artista: $artista</p>
    ";

    mail($mailTo, $asunto, $cuerpo, $headers);

    header("location: enviado.html");
}
?>
