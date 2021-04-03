<?php

$destino= "becohernandez89@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$numero = $_POST["numero"];
$producto = $_POST["producto"];

$contenido = "Nombre: ". $nombre . "\nCorreo: " . $correo . "\nNumero: " . $numero . "\nProducto: " . $producto;
mail($destino,"Contacto", $contenido);
header("Location:index.html");

?>