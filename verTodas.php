<?php
    require_once 'funciones/BuscarTodas.php';
    $habitaciones = buscarTodas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todas las Habitaciones</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
    <body>
        <div class="container">
            <h1>Todas las Habitaciones</h1>
            <ul>
                <?php foreach ($habitaciones as $habitacion): ?>
                    <li>Código: <?= $habitacion['codigo'] ?>, Nombre: <?= $habitacion['nombre'] ?>, Precio: <?= $habitacion['precio'] ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="inicio.php">Volver</a>
        </div>
    </body>
</html>
