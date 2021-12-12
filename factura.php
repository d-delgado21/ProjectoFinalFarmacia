<?php

require_once "db.php";
require_once "datos_factura.php";

$Descripcion_factura = $_POST["Descripcion_factura"];
$Producto_factura = $_POST["Producto_factura"];
$Cantidad_factura = $_POST["Cantidad_factura"];
$Nombre_cliente = $_POST["Nombre_cliente"];

$datos1 = new DatosFactura();

$datos1->setDescripcion_factura($Descripcion_factura);
$datos1->setProducto_factura($Producto_factura);
$datos1->setCantidad_factura($Cantidad_factura);
$datos1->setProducto_factura($Producto_factura);

DatosFactura::insertar($datos1);
header("location:index.php");

?>