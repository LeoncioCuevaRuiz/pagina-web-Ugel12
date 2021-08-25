<?php


$destinatario = 'correo123@gmail.com';

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];

$header = "Enviado desde la pagina Ugel 12 Canta";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script";
echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";
        


?>