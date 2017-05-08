<?php
include_once ('../bd/conexion.php');

$codigo = isset($_GET['codigo']) ? isset($_GET['codigo']) : '';


?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if($codigo == ''){ echo 'Nuevo Derecho Habiente'; }else{ echo 'Modificar Derecho Habiente'; } ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="../icono.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
        <style>
			input:focus,textarea:focus {
				border: 4px solid #389879;
  				background: #389879;	
			}
		

		</style>
        
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="../panel.php">Software II</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-title">Navegacion</li>
                    <li class="active">
                        <a href="../panel.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Planillas</span></a>
                        <ul>
                            <li><a href="../pages/planilla/gestion_de_empleados.php"><span class="fa fa-image"></span> Gestión de Empleados</a></li>
                            <li><a href="../pages/planilla/gestion_de_contratos.php"><span class="fa fa-user"></span> Gestión de Contratos</a></li>
                            <li><a href="../pages/planilla/gestion_de_derechos_habientes.php"><span class="fa fa-users"></span> Gestión de Derechos Habientes</a></li>
                            <li><a href="../pages/planilla/gestion_de_boletas.php"><span class="fa fa-users"></span> Gestión de Boletas</a></li>
                            <li><a href="../pages/planilla/gestion_de_asistencias.php"><span class="fa fa-users"></span> Gestión de Asistencias</a></li>
                            <li><a href="../pages/planilla/mantenimiento_planillas.php"><span class="fa fa-users"></span> Mantenimiento de Planillas</a></li>                        
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Hotel</span></a>
                        <ul> 
                            <li><a href="../pages/hotel/gestion_de_clientes.php"><span class="fa fa-user"></span> Gestión de Clientes</a></li>
                            <li><a href="../pages/hotel/gestion_de_habitaciones.php"><span class="fa fa-users"></span> Gestión de Habitaciones</a></li>
                            <li><a href="../pages/hotel/gestion_de_servicios.php"><span class="fa fa-users"></span> Gestión de Servicios</a></li>
                            <li><a href="../pages/hotel//movimientos.php"><span class="fa fa-users"></span> Movimientos</a></li>
                            <li><a href="../pages/hotel/mantenimiento_hotel.php"><span class="fa fa-users"></span> Mantenimiento del Hotel</a></li>                       
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Supermercado</span></a>
                        <ul>
                            <li><a href="../pages/supermercado/ventas.php"><span class="fa fa-image"></span> Ventas</a></li>
                            <li><a href="../pages/supermercado/compras.php"><span class="fa fa-user"></span> Compras</a></li>
                            <li><a href="../pages/supermercado/gestion_de_ventas.php"><span class="fa fa-users"></span> Gestión de Ventas</a></li>
                            <li><a href="../pages/supermercado/gestion_de_compras.php"><span class="fa fa-users"></span> Gestión de Compras</a></li>
                            <li><a href="../pages/supermercado/mantenimiento_supermercado.php"><span class="fa fa-users"></span> Mantenimiento de Supermercado</a></li> 
                            <li><a href="../pages/supermercado/movimientos.php"><span class="fa fa-users"></span> Movimientos</a></li>                          
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Reportes</span></a>
                        <ul> 
                            <li><a href=""><span class="fa fa-user"></span> Gestion de Planillas</a></li>
                            <li><a href=""><span class="fa fa-users"></span> Gestion de Asistencias</a></li>                       
                        </ul>
                    </li>
                    
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="../gestion_de_derechos_habientes.php">Gestión de Derechos de Empleados</a></li>                    
                    <li class="active"><?php if($codigo == ''){ echo 'Nuevo Derecho Habiente'; }else{ echo 'Modificar Derecho Habiente'; } ?></li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">  
                	<?php
					if($codigo == ''){
					?>                  
                    	<h2><span class="fa fa-arrow-circle-o-left"></span> Ingresar un nuevo Derecho Habiente</h2>
                    <?php
						$enlace = 'i';
					}else{
					?>
						<h2><span class="fa fa-arrow-circle-o-left"></span> Modificar Derecho Habiente</h2>
                    <?php
						$sql = "CALL PA_Buscar_Derecho_Habiente_Codigo({$_GET['codigo']})";
						$execute = $mysqli->query($sql);
						$mysqli->close();
						$data = mysqli_fetch_array($execute);
						$enlace = "m&&codigo=".$data['Cod_Derecho_Habiente'];
					}
					?>
                </div>                   
                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row" >
                        <div class="col-md-12" >
							
                            <form method="post" action="../bd/phpbase.php?table=derecho_habiente&&tipo=<?php echo $enlace ?>" class="form-horizontal" name="derecho_habiente" role="form">
                                <div class="col-md-6" >
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nombres</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                <input type="text" class="form-control" name="nombres_dh" value="<?php if($codigo != ''){ echo $data['Nombres_DH']; } ?>" required autofocus/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Apellido Paterno</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                <input type="text" class="form-control" name="apellido_paterno_dh" value="<?php if($codigo != ''){ echo $data['Apellido_Paterno_DH']; } ?>" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Apellido Materno</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                <input type="text" class="form-control" name="apellido_materno_dh" value="<?php if($codigo != ''){ echo $data['Apellido_Materno_DH']; } ?>" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Dni</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                <input type="text" class="form-control" name="dni_dh" value="<?php if($codigo != ''){ echo $data['Dni_DH']; } ?>" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Genero</label>
                                        <div class="col-md-6">                                                                                
                                            <select class="form-control select" name="genero_dh" required>
                                                <option value="M"
                                                <?php 	if($codigo != '' and $data['Genero'] == 'M' ){ 
														  echo 'selected';
												        } 
												?>
                                                                
                                                >
                                                    Masculino
                                                </option>
                                                <option value="F"
                                               <?php 	if($codigo != '' and $data['Genero'] == 'F' ){ 
                                                          echo 'selected';
                                                        } 
												?>     
                                                >
                                                    Femenino
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Empleado</label>
                                        <div class="col-md-6">                                                                                
                                            <select class="form-control select" data-live-search="true" name="cod_persona">
                                                <?php
                                                $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                $sql = "CALL PA_Buscar_Empleado";
                                                $execute = $mysqli->query($sql);
                                                while ($data_empelado = mysqli_fetch_array($execute)) {
                                                ?>
                                                <option value="<?php echo $data_empelado['Cod_Persona'] ?>"
                                                <?php 	if($codigo != '' and $data['Cod_Persona'] == $data_empelado['Cod_Persona'] ){ 
                                                                echo 'selected';
                                                        } 
                                                ?>
                                                >
                                                    <?php echo $data_empelado['Nombres'].' '.$data_empelado['Apellido_Paterno'].' '.$data_empelado['Apellido_Materno'] ?>
                                                </option>
                                                <?php
                                                }$mysqli->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Parentesco</label>
                                        <div class="col-md-6">                                                                                
                                            <select class="form-control select" data-live-search="true" name="cod_parentesco">
                                                <?php
                                                $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                $sql = "CALL PA_Buscar_Parentesco";
                                                $execute = $mysqli->query($sql);
                                                while ($data_parentesco = mysqli_fetch_array($execute)) {
                                                ?>
                                                <option value="<?php echo $data_parentesco['Cod_Parentesco'] ?>"
                                                <?php 	if($codigo != '' and $data['Cod_Parentesco'] == $data_parentesco['Cod_Parentesco'] ){ 
                                                                echo 'selected';
                                                        } 
                                                ?>
                                                >
                                                    <?php echo $data_parentesco['Parentesco'] ?>
                                                </option>
                                                <?php
                                                }$mysqli->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Correo Electronico</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                <input type="text" class="form-control" name="email_dh" value="<?php if($codigo != ''){ echo $data['Email_DH']; } ?>" required/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Direccion</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                <input type="text" class="form-control" name="direccion_dh" value="<?php if($codigo != ''){ echo $data['Direccion_DH']; } ?>" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Ciudad</label>
                                        <div class="col-md-6">                                                                                
                                            <select class="form-control select" data-live-search="true" name="cod_ciudad_direccion">
                                                <?php
                                                $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                $sql = "CALL PA_Buscar_Ubigeo";
                                                $execute = $mysqli->query($sql);
                                                while ($data_ciudad = mysqli_fetch_array($execute)) {
                                                ?>
                                                <option value="<?php echo $data_ciudad['Cod_Ciudad'] ?>"
                                                <?php 	if($codigo != '' and $data['Cod_Ciudad_Direccion'] == $data_ciudad['Cod_Ciudad'] ){ 
                                                                echo 'selected';
                                                        } 
                                                ?>        
                                                >
                                                    <?php echo $data_ciudad['Ciudad'] ?>
                                                </option>
                                                <?php
                                                }$mysqli->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Telefono Domicilio</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                <input type="text" class="form-control" name="tel_domicilio_dh" value="<?php if($codigo != ''){ echo $data['Tel_Domicilio_DH']; } ?>" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Telefono Movil</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                <input type="text" class="form-control" name="tel_movil_dh" value="<?php if($codigo != ''){ echo $data['Tel_Movil_DH']; } ?>" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Fecha de Nacimiento</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" value="2014-06-11" name="fecha_nacimiento_dh" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Lugar de Nacimiento</label>
                                        <div class="col-md-6">                                                                                
                                            <select class="form-control select" data-live-search="true" name="cod_ciudad_nacimiento" required>
                                                <?php
                                                $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                $sql = "CALL PA_Buscar_Ubigeo";
                                                $execute = $mysqli->query($sql);
                                                while ($data_ciudad = mysqli_fetch_array($execute)) {
                                                ?>
                                                <option value="<?php echo $data_ciudad['Cod_Ciudad'] ?>"
                                                <?php 	if($codigo != '' and $data['Cod_Ciudad_Nacimiento'] == $data_ciudad['Cod_Ciudad'] ){ 
                                                                echo 'selected';
                                                        } 
                                                ?>        
                                                >
                                                    <?php echo $data_ciudad['Ciudad'] ?>
                                                </option>
                                                <?php
                                                }$mysqli->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Observacion</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" name="observacion_dh" rows="5"><?php if($codigo != ''){ echo $data['Observacion_DH']; } ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1" align="left">
                                    <button type="reset" class="btn btn-default" style="border-color:#389879;" >Limpiar Formulario</button>
                                </div>
                                <div align="right">
                                    <button type="submit" class="btn btn-info" >Guardar Cambios</button>
                                </div>
                            </form>
                     
                                
                                
                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER --> 
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="../audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="../js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>  
        <!-- END THIS PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="../js/plugins.js"></script>        
        <script type="text/javascript" src="../js/actions.js"></script>        
        <!-- END TEMPLATE -->
        
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        login: {
                                required: true,
                                minlength: 2,
                                maxlength: 8
                        },
                        password: {
                                required: true,
                                minlength: 5,
                                maxlength: 10
                        },
                        're-password': {
                                required: true,
                                minlength: 5,
                                maxlength: 10,
                                equalTo: "#password2"
                        },
                        age: {
                                required: true,
                                min: 18,
                                max: 100
                        },
                        email: {
                                required: true,
                                email: true
                        },
                        date: {
                                required: true,
                                date: true
                        },
                        credit: {
                                required: true,
                                creditcard: true
                        },
                        site: {
                                required: true,
                                url: true
                        }
                    }                                        
                });                                    

        </script>
        
        
        
    <!-- END SCRIPTS -->         
    </body>
</html>






