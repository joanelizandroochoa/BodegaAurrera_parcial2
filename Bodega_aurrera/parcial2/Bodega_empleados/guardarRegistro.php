<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $tipo = $_POST["tipo"];
    $precio = $_POST["precio"];
    $fecha_entrega = $_POST["fecha_entrega"];

    $sql = "UPDATE productos SET nombre='".$nombre."' , tipo= '".$tipo."',". 
    "precio = ".$precio.", fecha_entrega ='".$fecha_entrega."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>