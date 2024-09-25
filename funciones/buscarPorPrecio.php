<?php
    require_once './clases/conexion.php';

    function buscarPorPrecio($precio) {
        $conexion = new Conexion();
        $db = $conexion->getConexion();

        $query = $db->prepare("SELECT codigo, nombre, precio FROM habitacion WHERE precio = :precio");
        $query->bindParam(':precio', $precio);
        $query->execute();

        $habitaciones = $query->fetchAll(PDO::FETCH_ASSOC);
        return $habitaciones;
    }
?>
