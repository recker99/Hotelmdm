<?php
    require_once 'funciones/BuscarPorPrecio.php';
    $precio = $_GET['precio'];
    $habitaciones = buscarPorPrecio($precio);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones por Precio</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
    <body>
        <div class="container">
            <h1>Habitaciones con precio <?= htmlspecialchars($precio) ?></h1>
            <ul>
                <?php foreach ($habitaciones as $habitacion): ?>
                    <li>Código: <?= $habitacion['codigo'] ?>, Nombre: <?= $habitacion['nombre'] ?>, Precio: <?= $habitacion['precio'] ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="inicio.php">Volver</a>
        </div>
    </body>
</html>
