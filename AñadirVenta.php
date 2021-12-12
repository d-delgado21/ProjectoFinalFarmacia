<?php
	
	require_once "db.php";
    require_once 'nav2.php';
    require_once 'Estilo.php';
 
?>

 <div class="container outer-section" >
        
 <form action="factura.php" method="POST">
  
             <div class="row ">
             <hr />
                 <div class="col-lg-6 col-md-6 col-sm-6">
                     <h2>Detalles del cliente :</h2>

                     <select name="Nombre_cliente"  id= "Nombre_cliente" required>
						<option value="0">Selecciona el cliente</option>
                        
                    <?php
                     $db = Db::getConnect();
                      $cliente="SELECT * FROM tbl_clientes";
                      $resultado=mysqli_query($conexion,$cliente);
                      while ($valores=mysqli_fetch_array($resultado)){
                          echo'<option value="'.$valores["Nombre_cliente"].'">'.$valores["Nombre_cliente"].' </option>';
                      }
                    ?>
                    </select><br><br>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Detalles de la factura:</h2>
                    
                    <h4 id="Fecha"><strong>Fecha: </strong> <?php echo date("d/m/Y");?></h4>
	
                    <textarea  class="form-control" id="Descripcion_factura" name="Descripcion_factura"   placeholder="Detalles" ></textarea>
                    
                  
                </div>
            </div>
            
         
            <div class="row">
			<hr />
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped  table-hover">
                            <thead>
                                <tr>
                                    <th >Producto</th>
									<th >Cantidad</th>
                                    <th >Cliente</th>
                                    <th >Fecha</th>
                                    <th >Precio unitario</th>
                                    <th ></th>
									<th ></th>
                                </tr>

                        <tr>
                            <th>
                                <input id="Descripcion_factura" type="text" class="form-control "  name="Descripcion_factura"  required/>
                            </th>
                            <th>
                                <input id="Cantidad_factura" type="numero" class="form-control "  name="Cantidad_factura" required/>
                            </th>
                            
                            <select name="Nombre_cliente"  id= "Nombre_cliente" required>
						<option value="0">Selecciona el cliente</option>
                        
                    <?php
                     $db = Db::getConnect();
                      $cliente="SELECT * FROM tbl_clientes";
                      $resultado=mysqli_query($conexion,$cliente);
                      while ($valores=mysqli_fetch_array($resultado)){
                          echo'<option value="'.$valores["Nombre_cliente"].'">'.$valores["Nombre_cliente"].' </option>';
                      }
                    ?>
                    </select><br><br>
                            </th>
                            <th>
                            <?php
                               date_default_timezone_set('America/Costa_Rica');
                               $fecha_actual=date("Y-M-D H:i");

                              ?>
                                <input id="Fecha" type="datetime" class="form-control " name="Fecha" value="<?=$fecha_actual?>"required/>
                            </th>
                            <th>
                                <input id="Precio" type="numero" class="form-control "  name="precio" required/>
                            </th>
                            </div>
               
               <button type="submit" class="btn btn-primary ">Añadir Datos</button>
           </form>
           <br><br><br>

       </div>   
	
   

	
