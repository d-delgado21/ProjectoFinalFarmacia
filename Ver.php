<?php
       require_once 'nav2.php';
       require_once 'Estilo.php';
       require_once 'datos_factura.php';
       if (!isset($_POST["getDescripcion_factura"])) {
           $listadoDatos = DatosFactura::listarTodos();
       }
?>

<body>
            <div class="container col-md-10 mx-auto mt-5">
            <form class="form-inline" method="POST">
                
            </form>
            <div class="container col-md-10 mx-auto mt-5">
        <h4>Registro de facturas</h4>
        <div>
        <table class="table table-hover">
        <table class="table table-hover">
        </div>
          <table class="table table-hover">
          <table class="table table-hover">
          <table class="table table-hover">
          <table class="table table-hover">
          <tr class="table-active">
          <th scope="row">id</th>
          <th scope="row">Detalle</th>
          <th scope="row">producto</th>
          <th scope="row">cantidad</th>
          <th scope="row">cliente</th>
          <th scope="row">Fecha</th>
          <th scope="row">Precio</th>
          <th scope="row"></th>
          </div>
     </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listadoDatos as $key => $dato) :
                ?>

                        <td><?= $dato->getId_factura() ?></td>
                        <td><?= $dato->getDescripcion_factura() ?></td>
                        <td><?= $dato->getProducto_factura() ?></td>
                        <td><?= $dato->getCantidad_factura() ?></td>
                        <td><?= $dato->getNombre_cliente() ?></td>
                        <td><?= $dato->getFecha() ?></td>
                        <td><?= $dato->getPrecio() ?></td>
                    </tr>
                <?php

                endforeach;
                ?>
            </tbody>
        </table>
    </div>
 
    
    </div>