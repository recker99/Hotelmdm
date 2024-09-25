<?php
    require_once './funciones/CargarPrecios.php';
    $precios = cargarPrecios(); //  llamar funcion
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Hotel Miras Del Mar</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Consulta de Habitaciones</h1>
        <form action="./VerPorPrecio.php" method="get">
            <label for="precio">Seleccione un precio:</label>
            <select name="precio" id="precio">
                <?php foreach ($precios as $precio): ?>
                    <option value="<?= $precio ?>"><?= $precio ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Buscar</button>
        </form>
        <a href="./verTodas.php">Ver todas las habitaciones</a>
    </div>
</body>
</html>

