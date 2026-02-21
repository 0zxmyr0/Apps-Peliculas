<?php
include("conexion.php");

$titulo      = $_POST['titulo'];
$genero      = $_POST['genero'];
$anio        = $_POST['anio'];
$descripcion = $_POST['descripcion'];
$imagen      = $_POST['imagen'];

$sql = "INSERT INTO peliculas (titulo, genero, anio, descripcion, imagen)
        VALUES ('$titulo', '$genero', '$anio', '$descripcion', '$imagen')";

if ($conexion->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error al guardar";
}
?>
