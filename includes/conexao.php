<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco = 'filmeseseries';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
?>
