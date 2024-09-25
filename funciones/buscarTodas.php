<?php
    require_once './clases/conexion.php';

    function buscarTodas() {
        $conexion = new Conexion();
        $db = $conexion->getConexion();

        $query = $db->query("SELECT codigo, nombre, precio FROM habitacion");
        $habitaciones = $query->fetchAll(PDO::FETCH_ASSOC);
        return $habitaciones;
    }
?>
