<?php include("conexion.php"); 

$id = $_GET['id'];
$envio = $conexion->query("SELECT * FROM envios WHERE id=$id")->fetch_assoc();

if(isset($_POST['actualizar'])){
    $dest = $_POST['destinatario'];
    $dir = $_POST['direccion'];
    $desc = $_POST['descripcion'];

    $conexion->query("UPDATE envios SET destinatario='$dest', direccion='$dir', descripcion='$desc' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head><title>Editar Envio</title></head>
<body>

<h2>Editar Envio</h2>

<form method="POST">
    Destinatario: <input type="text" name="destinatario" value="<?= $envio['destinatario']; ?>" required><br><br>
    Dirección: <input type="text" name="direccion" value="<?= $envio['direccion']; ?>" required><br><br>
    Descripción: <textarea name="descripcion" required><?= $envio['descripcion']; ?></textarea><br><br>
    <button type="submit" name="actualizar">Actualizar</button>
</form>

</body>
</html>
