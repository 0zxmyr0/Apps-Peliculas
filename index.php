<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Películas</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        form { margin-bottom: 30px; }
        input, textarea { display:block; margin-bottom:10px; width:300px; }
        table { border-collapse: collapse; }
        th, td { border:1px solid black; padding:8px; }
    </style>
</head>
<body>

<h2>Registrar Película</h2>

<form action="guardar.php" method="POST">
    <input type="text" name="titulo" placeholder="Título" required>
    <input type="text" name="genero" placeholder="Género" required>
    <input type="number" name="anio" placeholder="Año" required>
    <textarea name="descripcion" placeholder="Descripción" required></textarea>
    <input type="text" name="imagen" placeholder="URL Imagen">
    <button type="submit">Guardar</button>
</form>

<h2>Lista de Películas</h2>

<table>
<tr>
    <th>ID</th>
    <th>Título</th>
    <th>Género</th>
    <th>Año</th>
    <th>Descripción</th>
</tr>

<?php
$resultado = $conexion->query("SELECT * FROM peliculas");

while($fila = $resultado->fetch_assoc()){
    echo "<tr>
            <td>{$fila['id']}</td>
            <td>{$fila['titulo']}</td>
            <td>{$fila['genero']}</td>
            <td>{$fila['anio']}</td>
            <td>{$fila['descripcion']}</td>
          </tr>";
}
?>

</table>

</body>
</html>
