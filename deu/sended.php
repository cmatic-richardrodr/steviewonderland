<?php

$idioma = $_GET['idioma'];

include '../correo_contacto.php';
$mensaje = 'Nachricht gesendet.\nDarüber hinaus empfehlen wir Ihnen, uns über unsere anderen auf dieser Website angegebenen Kontaktformulare zu kontaktieren.';
include '../mensaje_alerta.php';

$url = 'index.php';
echo "<script>window.location='$url';</script>";

?>