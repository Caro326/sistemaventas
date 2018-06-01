<?php 

ob_start();
session_start();

if(!isset($_SESSION["nombre"])){
  header("location:login.html");
}else{

  require('header.php');
    if($_SESSION['compras']==1){

?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Proveedores <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            
                              <th>Opciones</th>
                              <th>Nombre</th>
                              <th>Documento</th>
                              <th>Número</th>
                              <th>Teléfono</th>
                              <th>Email</th>
                            
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                           
                              <th>Opciones</th>
                              <th>Nombre</th>
                              <th>Documento</th>
                              <th>Número</th>
                              <th>Teléfono</th>
                              <th>Email</th>
                           
                          </tfoot>
                        </table>
                    </div>
                     <div class="panel-body "  id="formularioregistros">
                       <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="hidden" name="idpersona" id="idpersona">
                            <input type="hidden" name="tipo_persona" value="Proveedor" id="tipo_persona">
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre del proveedor" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tipo de Documento:</label>
                            <select class="form-control select-picker" name="tipo_documento" id="tipo_documento" required>
                              <option value="DNI">DNI</option>
                              <option value="CUIT">CUIT</option>
                            </select>                           
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Número Documento:</label>
                              <input type="text" name="num_documento" id="num_documento" placeholder="Documento" class="form-control" maxlength="20">
                          </div>
                           <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Dirección:</label>
                              <input type="text" name="direccion" id="direccion" placeholder="Dirección" class="form-control" maxlength="70">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Teléfono:</label>
                              <input type="text" name="telefono" id="telefono" placeholder="Teléfono" class="form-control" maxlength="20">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>E-mail:</label>
                              <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" maxlength="50">
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

  <?php 
}else{
        require 'noacceso.php';
      }
  require('footer.php');

   ?>
   <script type="text/javascript" src="scripts/proveedores.js"></script>
   <script src="../public/bootbox.min.js" type="text/javascript"></script>
<?php
    } 
    ob_end_flush();
?>
