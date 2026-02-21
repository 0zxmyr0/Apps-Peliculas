<?php
include("../conexion.php");

$resultado = $conexion->query("SELECT * FROM peliculas");

$peliculas = [];

while ($fila = $resultado->fetch_assoc()) {
    $peliculas[] = $fila;
}

echo json_encode($peliculas);
?>
