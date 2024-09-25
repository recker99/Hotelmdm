<?php
    function cargarPrecios() {
        $preciosFile = './precios.xml'; 
        $preciosXml = simplexml_load_file($preciosFile);

        if ($preciosXml === false) {
            echo "Error al cargar el archivo XML.";
            foreach (libxml_get_errors() as $error) {
                echo "<br>", $error->message;
            }
            return []; // Devuelve un array vacío si hay un error
        }

        $precios = [];
        foreach ($preciosXml->precio as $precio) {
            $precios[] = (string) $precio; // Convertir a string si es necesario
        }

        return $precios; 
    }
?>
