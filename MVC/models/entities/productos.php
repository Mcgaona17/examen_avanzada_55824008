<?php

namespace app\models\entities;

use app\models\drivers\conexDB;

class Productos extends Entity

{
    protected $id = null;
    protected $nombre = "";
    protected $cantidad = null;
    protected $precio_unitario = null;

    public function all()
    {
        $sql = "select * from productos";
        $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql);
        $productos = [];
        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
                $producto = new Productos();
                $producto->set('id', $rowDb['id']);
                $producto->set('nombre', $rowDb['nombre']);
                $producto->set('cantidad', $rowDb['cantidad']);
                $producto->set('precio_unitario', $rowDb['precio_unitario']);
                array_push($productos, $producto);
            }
        }
        $conex->close();
        return $productos;
    }

    public function save()
    {
        $sql = "insert into productos (nombre,cantidad,precio_unitario) values ";
        $sql .= "('" . $this->nombre . "','" . $this->cantidad . "'," . $this->precio_unitario . ")";
        $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql);
        $conex->close();
        return $resultDb;
    }
    
}