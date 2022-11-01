<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $departamento = $_POST["departamento"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    $sql = "INSERT INTO usuarios (nombre, departamento, precio, cantidad)". 
    "VALUES ('".$nombre."', ".$departamento.", ".$precio.", '".$cantidad."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatosProyecto.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatosProyecto.php'>Regresar</a>";
    }

    $conexion->close();
?>