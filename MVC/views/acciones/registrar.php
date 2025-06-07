<?php
include '../../models/drivers/conexDB.php';
include '../../models/entities/entity.php';
include '../../models/entities/productos.php';
include '../../controllers/productosController.php';

use app\controllers\ProductosController;

$controller = new ProductosController();
$result = empty($_POST['idInput']) ?
    $controller->saveNewProduct($_POST) : false;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar productos</title>
</head>

<body>
    <h1>Registrar productos</h1>
    <?php
    if ($result) {
        echo '<p>Datos guardados</p>';
    } else {
        echo '<p>No se pudo guardar los datos</p>';
    }
    ?>
    <a href="../productos.php">Volver</a>
</body>

</html>