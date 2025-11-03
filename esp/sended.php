<?php

$idioma = $_GET['idioma'];

include '../correo_contacto.php';
$mensaje = 'Mensaje enviado.\nAdicionalmente, le sugerimos contactarnos a nuestras otras formas de contacto indicados en este sitio web.';
include '../mensaje_alerta.php';

$url = 'index.php';
echo "<script>window.location='$url';</script>";

?>