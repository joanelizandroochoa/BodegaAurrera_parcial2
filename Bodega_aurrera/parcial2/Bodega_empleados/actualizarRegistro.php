<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodega Aurrera </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM productos WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar producto</h1><hr>
                <form method="post" action="guardarRegistro.php">
                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $registro["nombre"]; ?>" type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Tipo:</label>
                        <input value="<?php echo $registro["tipo"]; ?>" type="text" class="form-control" name="tipo" placeholder="Teclea el tipo de producto">
                    </div>

                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input value="<?php echo $registro["precio"]; ?>" type="number" class="form-control" name="precio" placeholder="Teclea el precio del producto">
                    </div>


                    <div class="form-group">
                        <label for="">Fecha de entrega:</label>
                        <input value="<?php echo $registro["fecha_entrega"]; ?>" type="date" class="form-control" name="fecha_entrega">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Ochoa Iribe Joan Elizandro y Bobadilla Araujo Rodrigo 
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
