<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $producto = $_POST["producto"];
    $departamento = $_POST["departamento"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    $sql = "UPDATE usuarios SET nombre='".$nombre."' , producto= ".$producto.",". 
    "departamento = '".$departamento."', precio = '".$precio."', cantidad ='".$cantidad."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatosProyecto.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatosProyecto.php'>Regresar</a>";

    }

    $conexion->close();

?>