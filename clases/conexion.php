<?php
    class Conexion {
        private $conexion;

        public function __construct() {
            $dsn = 'mysql:host=localhost;dbname=hotelmdm';
            $username = 'root';
            $password = '';
            try {
                $this->conexion = new PDO($dsn, $username, $password);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Error en la conexión: ' . $e->getMessage();
            }
        }

        public function getConexion() {
            return $this->conexion;
        }
    }
?>
