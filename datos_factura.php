<?php

require_once "db.php";
class DatosFactura {
    private $Id_factura ;
    private $Descripcion_factura;
    private $Producto_factura;
    private $Cantidad_factura;
    private $Nombre_cliente;
    private $Fecha;
    private $Precio;


    public static function insertar($datosFactura)
    {
        try {
            $db = Db::getConnect();
            $db->beginTransaction();

            $consulta = $db->prepare("INSERT INTO tbl_factura (Descripcion_factura,Producto_factura,Cantidad_factura,Nombre_cliente,Fecha,Precio)"
                . " values (:Descripcion_factura,:Producto_factura,:Cantidad_factura,:Nombre_cliente,:Fecha,:Precio)");

            $consulta->bindValue(":Descripcion_factura", $datosFactura->getDescripcion_factura());
            $consulta->bindValue(":Producto_factura", $datosFactura->getProducto_factura());
            $consulta->bindValue(":Cantidad_factura", $datosFactura->getCantidad_factura());
            $consulta->bindValue(":Nombre_cliente", $datosFactura->getNombre_cliente());
            $consulta->bindValue(":Fecha", $datosFactura->getFecha());
            $consulta->bindValue(":Precio", $datosFactura->getPrecio());
            $consulta->execute();
            $db->commit(); 

        } catch (PDOException $e) {
            $db->rollBack(); 
            echo " Se ha presentado un error en la conexión " . $e->getMessage();
        }

    }
    public static function listarTodos()
    {
        $datos = []; 
        try {
            $db = Db::getConnect();
            $db->beginTransaction();

            $consulta = $db->prepare("SELECT Id_factura,Descripcion_factura,Producto_factura,Cantidad_factura,Nombre_cliente,Fecha,Precio from tbl_factura");

            $consulta->execute();
            $db->commit(); 
            foreach ($consulta->fetchAll() as $dato) {

                $datosfactura = new Datosfactura();
                $datosfactura->setId_factura($dato["Id_factura"]);
                $datosfactura->setDescripcion_factura($dato["Descripcion_factura"]);
                $datosfactura->setProducto_factura($dato["Producto_factura"]);
                $datosfactura->setCantidad_factura($dato["Cantidad_factura"]);
                $datosfactura->setNombre_cliente($dato["Nombre_cliente"]);
                $datosfactura->setFecha($dato["Fecha"]);
                $datosfactura->setPrecio($dato["Precio"]);
                $datos[] = $datosfactura;
            }
            return $datos;
        } catch (PDOException $e) {
            echo " Se ha presentado un error en la conexión " . $e->getMessage();
        }
    }

    /**
     * Get the value of Id_factura
     */ 
    public function getId_factura()
    {
        return $this->Id_factura;
    }

    /**
     * Set the value of Id_factura
     *
     * @return  self
     */ 
    public function setId_factura($Id_factura)
    {
        $this->Id_factura = $Id_factura;

        return $this;
    }

    /**
     * Get the value of Descripcion_factura
     */ 
    public function getDescripcion_factura()
    {
        return $this->Descripcion_factura;
    }

    /**
     * Set the value of Descripcion_factura
     *
     * @return  self
     */ 
    public function setDescripcion_factura($Descripcion_factura)
    {
        $this->Descripcion_factura = $Descripcion_factura;

        return $this;
    }

    /**
     * Get the value of Cantidad_factura
     */ 
    public function getCantidad_factura()
    {
        return $this->Cantidad_factura;
    }

    /**
     * Set the value of Cantidad_factura
     *
     * @return  self
     */ 
    public function setCantidad_factura($Cantidad_factura)
    {
        $this->Cantidad_factura = $Cantidad_factura;

        return $this;
    }

    /**
     * Get the value of Nombre_cliente
     */ 
    public function getNombre_cliente()
    {
        return $this->Nombre_cliente;
    }

    /**
     * Set the value of Nombre_cliente
     *
     * @return  self
     */ 
    public function setNombre_cliente($Nombre_cliente)
    {
        $this->Nombre_cliente = $Nombre_cliente;

        return $this;
    }

    /**
     * Get the value of Producto_factura
     */ 
    public function getProducto_factura()
    {
        return $this->Producto_factura;
    }

    /**
     * Set the value of Producto_factura
     *
     * @return  self
     */ 
    public function setProducto_factura($Producto_factura)
    {
        $this->Producto_factura = $Producto_factura;

        return $this;
    }

    /**
     * Get the value of Fecha
     */ 
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * Set the value of Fecha
     *
     * @return  self
     */ 
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;

        return $this;
    }

    /**
     * Get the value of Precio
     */ 
    public function getPrecio()
    {
        return $this->Precio;
    }

    /**
     * Set the value of Precio
     *
     * @return  self
     */ 
    public function setPrecio($Precio)
    {
        $this->Precio = $Precio;

        return $this;
    }
}

    ?>