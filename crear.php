<?php include("conexion.php"); 

if(isset($_POST['guardar'])){
    $dest = $_POST['destinatario'];
    $dir = $_POST['direccion'];
    $desc = $_POST['descripcion'];

    $conexion->query("INSERT INTO envios(destinatario, direccion, descripcion) VALUES('$dest','$dir','$desc')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css">
<title>Crear Envio</title></head>
<body>
<h2>Nuevo Envio</h2>

<form method="POST">
    Destinatario: <input type="text" name="destinatario" required><br><br>
    Dirección: <input type="text" name="direccion" required><br><br>
    Descripción: <textarea name="descripcion" required></textarea><br><br>
    <button type="submit" name="guardar">Guardar</button>
</form>

</body>
</html>
