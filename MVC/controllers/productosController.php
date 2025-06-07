<?php

namespace app\controllers;

use app\models\entities\productos;

class ProductosController
{

    public function queryAllProduct()
    {
        $producto = new Productos();
        $data = $producto->all();
        return $data;
    }

    public function saveNewProduct($request)
    {
        $producto = new Productos();
        $producto->set('nombre', $request['nombreInput']);
        $producto->set('cantidad', $request['cantidadInput']);
        $producto->set('precio_unitario', $request['precio_unitarioInput']);
        return $producto->save();
    }
}