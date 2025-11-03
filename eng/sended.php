<?php

$idioma = $_GET['idioma'];

include '../correo_contacto.php';
$mensaje = 'Sended message.\nAdditionally, we suggest you contact us through our other contact forms indicated on this website.';
include '../mensaje_alerta.php';

$url = 'index.php';
echo "<script>window.location='$url';</script>";

?>