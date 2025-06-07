<?php
include '../models/drivers/conexDB.php';
include '../models/entities/entity.php';
include '../models/entities/productos.php';
include '../controllers/productosController.php';

use app\controllers\ProductosController;

$controller = new ProductosController();
$producto = $controller->queryAllProduct();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
    <h1>Productos</h1>
    <br>
    <a href="form_productos.php">Registrar </a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($producto as $productos) {
                echo '<tr>';
                echo '  <td>' . $producto->get('nombre') . '</td>';
                echo '  <td>' . $producto->get('cantidad') . '</td>';
                echo '  <td>' . $producto->get('precio_unitario') . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>