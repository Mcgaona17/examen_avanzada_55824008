<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>
        <?php echo empty($_GET['id']) ? 'Registrar productos' : 'Editar producto'; ?>
    </h1>
    <form action="acciones/registrar.php" method="post">
        <?php
        if (!empty($_GET['id'])) {
            echo '<input type="hidden" name="idInput" value="' . $_GET['id'] . '">';
        }
        ?>
        <div>
            <label>Nombre</label>
            <input type="text" name="nombreInput" required>
        </div>
        <div>
            <label>Cantidad</label>
            <input type="number" name="cantidadInput" min="1" required>
        </div>
        <div>
            <label>Precio Unitario</label>
            <input type="number" name="precio_unitarioInput" min="1" required>
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
    <a href="productos.php">Volver</a>
</body>

</html>