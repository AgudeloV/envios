<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

    <title>Gestión de Envios</title>
</head>
<body>

<h2>Listado de Envios</h2>
<a href="crear.php">Agregar Nuevo Envio</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Destinatario</th>
        <th>Dirección</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>

    <?php
    $resultado = $conexion->query("SELECT * FROM envios");
    while($fila = $resultado->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$fila['id']."</td>";
        echo "<td>".$fila['destinatario']."</td>";
        echo "<td>".$fila['direccion']."</td>";
        echo "<td>".$fila['descripcion']."</td>";
        echo "<td>
              <a href='editar.php?id=".$fila['id']."'>Editar</a> |
              <a href='eliminar.php?id=".$fila['id']."'>Eliminar</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
