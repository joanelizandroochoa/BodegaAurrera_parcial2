<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $tipo = $_POST["tipo"];
    $precio = $_POST["precio"];
    $fecha_entrega = $_POST["fecha_entrega"];

    $sql = "INSERT INTO productos (nombre, tipo, precio, fecha_entrega)". 
    "VALUES ('".$nombre."', '".$tipo."', ".$precio.", '".$fecha_entrega."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>