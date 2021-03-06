<?php
include_once ('../bd/conexion.php');

$codigo = isset($_GET['codigo']) ? isset($_GET['codigo']) : '';


?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if($codigo == ''){ echo 'Nuevo Empleado'; }else{ echo 'Modificar Empleado'; } ?></title>            
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
				/*
				border: 4px solid #389879;
  				background: #389879;	
				*/
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
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                    
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="../gestion_de_empleados.php">Gestión de Empleados</a></li>                    
                    <li class="active">Nuevo Empleado</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <?php
					if($codigo == ''){
					?>                  
                    	<h2><span class="fa fa-arrow-circle-o-left"></span> Ingresar un nuevo Empleado</h2>
                    <?php
						$enlace = 'i';
					}else{
					?>
						<h2><span class="fa fa-arrow-circle-o-left"></span> Modificar Empleado</h2>
                    <?php
						$sql = "CALL PA_Buscar_Persona_Codigo({$_GET['codigo']})";
						$execute = $mysqli->query($sql);
						$mysqli->close();
						$data = mysqli_fetch_array($execute);
						$enlace = "m&&codigo=".$data['Cod_Persona'];
					}
					?>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">

                        <div class="col-md-15">                        

                            <!-- START JQUERY VALIDATION PLUGIN -->
                            <div class="block">
                                <form id="jvalidate" role="form" method="post" name="empleado" class="form-horizontal" action="javascript:alert('Form #validate2 submited');">
                                <div class="panel panel-info">
                                    <div class="panel-body">                                                                        
                                        
                                        <div class="row">
                                            
                                            <div class="col-md-4">
                                                 
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Apellido Paterno</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-text-height"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Apellido_Paterno']; } ?>" name="apellido_paterno" placeholder="Ingresar el Apellido Paterno" autofocus required/>
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Apellido Materno</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-text-height"></span></span>
                                                            <input type="text" class="form-control campos"  value="<?php if($codigo != ''){ echo $data['Apellido_Materno']; } ?>" name="apellido_materno" maxlength="30" placeholder="Ingresar el Apellido Materno"  />
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Nombres</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-text-height"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Nombres']; } ?>" name="nombres" maxlength="30" placeholder="Ingresar Nombres" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >DNI</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input type="text" class="form-control campos" name="dni" value="<?php if($codigo != ''){ echo $data['Dni']; } ?>" size="8" maxlength="8" placeholder="Ingresar N° de DNI" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                                              
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Estado Civil</label>
                                                    <div class="col-md-6">                        
                                                        <select class="form-control select" name="cod_estado_civil">
                                                            <option value="1" 
                                                            <?php 	if($codigo != '' and $data['Cod_Estado_Civil'] == '1' ){ 
                                                                        echo 'selected';
                                                                    } 
                                                            ?>
                                                            >
                                                            Casado
                                                            </option>
                                                            <option value="0"
                                                            <?php 	if($codigo != '' and $data['Cod_Estado_Civil'] == '0' ){ 
                                                                        echo 'selected';
                                                                    } 
                                                            ?>
                                                            >
                                                            Soltero
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                                                           
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Correo Electronico</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                            <input type="text" class="form-control campos"  name="email" value="<?php if($codigo != ''){ echo $data['Email']; } ?>" placeholder="Ingresar Correo Electrónico" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Genero</label>
                                                    <div class="col-md-6">                        
                                                        <select class="form-control select" name="genero">
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
                                                    <label class="col-md-4 control-label" >Dirección</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-home"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Direccion']; } ?>" name="direccion"  placeholder="Ingresar Dirección" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                                                                                                        
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Ciudad</label>
                                                    <div class="col-md-7">                                                                               
                                                        <select class="form-control select" data-live-search="true" name="cod_ciudad_direccion">
                                                            <?php
                                                            $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                            $sql = "CALL PA_Buscar_Ubigeo";
                                                            $execute = $mysqli->query($sql);
                                                            while ($data_ciudad = mysqli_fetch_array($execute)) {
                                                            ?>
                                                            <option value="<?php echo $data_ciudad['Cod_Ciudad'] ?>">
                                                                <?php echo $data_ciudad['Ciudad'] ?>
                                                            </option>
                                                            <?php
                                                            }$mysqli->close();
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Tipo de Sangre</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-tint"></span></span>
                                                            <input type="text" class="form-control campos"  name="tipo_sangre" value="<?php if($codigo != ''){ echo $data['Tipo_Sangre']; } ?>" placeholder="Ingresar Tipo de Sangre" />
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                            
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Entidad Financeria</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Nombre_Banco']; } ?>" name="nombre_banco" placeholder="Ingresar Nonbre de la Entidad"/>
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Nro de Cuenta</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                                            <input type="text" class="form-control campos" name="nro_cuenta_bancaria"  value="<?php if($codigo != ''){ echo $data['Nro_Cuenta_Bancaria']; } ?>"  placeholder="Ingresar el Nro de Cuenta Bancaria" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Fecha de Nacimiento</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                            <input type="text" class="form-control datepicker campos"  value="<?php if($codigo != ''){ echo $data['Fecha_Nacimiento']; }else{ echo '2014-06-11'; } ?>" name="fecha_nacimiento" /> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Lugar de Nacimiento</label>
                                                    <div class="col-md-7"> 
                                                                                                                                       
                                                        <select class="form-control select" data-live-search="true" name="cod_ciudad_nacimiento">
                                                            <?php
                                                            $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                            $sql = "CALL PA_Buscar_Ubigeo";
                                                            $execute = $mysqli->query($sql);
                                                            while ($data_ciudad = mysqli_fetch_array($execute)) {
                                                            ?>
                                                            <option value="<?php echo $data_ciudad['Cod_Ciudad'] ?>">
                                                                <?php echo $data_ciudad['Ciudad'] ?>
                                                            </option>
                                                            <?php
                                                            }$mysqli->close();
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
    
                                                                                            
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Telefono Fijo</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Tel_Domicilio']; } ?>" name="tel_domicilio" placeholder="Ingresar N° de Telefeno Fijo" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                                                                                                        
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Telefono Móvil</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-mobile-phone"></span></span>
                                                            <input type="text" class="form-control campos " value="<?php if($codigo != ''){ echo $data['Tel_Movil']; } ?>" name="tel_movil" placeholder="Ingresar N° de Telefono Móvil" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                                                                                                        
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Operador Móvil</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Operador_Movil']; } ?>" name="operador_movil" placeholder="Ingresar Nombre del Operador" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                                                                                                                                                    
                                                
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Persona Contacto</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Persona_Contacto']; } ?>" name="persona_contacto" placeholder="Ingresar Nombre de Persona de Contacto" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                                                                                                                            
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Telefono</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Tel_Contacto']; } ?>" name="tel_contacto" placeholder="Ingresar Nro de Telefono" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Ruc</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></span>
                                                            <input type="text" class="form-control campos"  value="<?php if($codigo != ''){ echo $data['Ruc']; } ?>" name="ruc" placeholder="Ingresar N° de RUC" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Profesión</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-suitcase"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Profesion']; } ?>" name="profesion" placeholder="Ingresar Profesión" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Afp</label>
                                                    <div class="col-md-7">                                                                                
                                                        <select class="form-control select" name="cod_afp">
                                                            <?php
                                                            $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                            $sql = "CALL PA_Buscar_Afp";
                                                            $execute = $mysqli->query($sql);
                                                            while ($data_afp = mysqli_fetch_array($execute)) {
                                                            ?>
                                                            <option value="<?php echo $data_afp['Cod_Afp'] ?>">
                                                                <?php echo $data_afp['Afp'] ?>
                                                            </option>
                                                            <?php
                                                            }$mysqli->close();
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Nro de Hijos</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-users"></span></span>
                                                            <input type="text" class="form-control campos"  value="<?php if($codigo != ''){ echo $data['Num_Hijos']; } ?>" name="num_hijos" placeholder="Ingresar el Nro de Hijos" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Estatura</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-resize-vertical"></span></span>
                                                            <input type="text" class="form-control campos"  value="<?php if($codigo != ''){ echo $data['Estatura_cm']; } ?>" name="estatuta_cm" placeholder="Ingresar Estatura" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Peso</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-heart"></span></span>
                                                            <input type="text" class="form-control campos"  value="<?php if($codigo != ''){ echo $data['Peso_kg']; } ?>" name="peso_kg" placeholder="Ingresar Peso" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Hobby</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-header"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Hobby']; } ?>" name="hobby" placeholder="Ingresar Hobby" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                                                            
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Deporte Favorito</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-road"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Deporte_Favorito']; } ?>" name="deporte_favorito" placeholder="Ingresar Deporte Favorito" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                                                                                                        
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" >Fotografía</label>
                                                    <div class="col-md-8">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input type="text" class="form-control campos" value="<?php if($codigo != ''){ echo $data['Foto_Persona']; } ?>" name="foto_persona" placeholder="Ingresar N° de DNI" />
                                                        </div> 
                                                    </div>
                                                </div>
                                                   
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Observacion de Empleado</label>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control campos"  name="observacion_persona" rows="1"><?php if($codigo != ''){ echo $data['Observacion_Persona']; } ?></textarea>
                                                    </div>
                                                </div>                                                                                    
                                                
                                                
                                                
                                            </div>
                                            
                                        </div>
    
                                    </div>
                                    <div class="panel-footer">
                                        <button class="btn btn-default" style="border-color:#389879;" type="reset">Limpiar Formulario</button>                                    
                                        <button class="btn btn-info pull-right" type="submit">Guardar Cambios</button>
                                    </div>
                                </div>
                                                                              
                                </form>
                            <!-- END JQUERY VALIDATION PLUGIN -->
                            </div>
                        </div>
                    </div>

                        
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
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
        
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-datepicker.js'></script>        
        <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>        

        <script type='text/javascript' src='../js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='../js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='../js/plugins/jquery-validation/jquery.validate.js'></script>                

        <script type='text/javascript' src='../js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <!-- END THIS PAGE PLUGINS -->               

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="../js/settings.js"></script>
        
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script type="text/javascript" src="../js/actions.js"></script>
        <!-- END TEMPLATE -->
        
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: { 
						apellido_paterno: {
                                required: true,
                                min: 1,
                                max: 5
                        }, 
						apellido_materno: {
                                required: true,
                                min: 1,
                                max: 5
                        },
						nombres: {
                                required: true,
                                minlength: 1,
                                maxlength: 5
                        },
						dni: {
                                required: true,
								digits:true,
                                minlength: 8,
                                maxlength: 8
                        },
                        email: {
                                required: true,
                                email: true
                        },
						direccion: {
                                required: true,
                                min: 1,
                                max: 5
                        },  
						tipo_sangre: {
                                required: true,
                                min: 1,
                                max: 5
                        },
						nombre_banco: {
                                required: true,
                                min: 1,
                                max: 5
                        },
						nro_cuenta_bancaria: {
                                required: true,
                                min: 1,
                                max: 5
                        },
                        fecha_nacimiento: {
                                required: true,
                                date: true
                        }, 
						tel_fijo: {
                                required: true,
                                min: 1,
                                max: 5
                        },
						tel_movil: {
                                required: true,
                                min: 1,
                                max: 5
                        },
						operador_movil: {
                                required: true,
                                min: 1,
                                max: 5
                        },
						persona_contacto: {
                                required: true,
                                min: 1,
                                max: 5
                        },  
						tel_contacto: {
                                required: true,
                                min: 1,
                                max: 5
                        },
						ruc: {
                                required: true,
                                min: 1,
                                max: 5
                        },
						profesion: {
                                required: true,
                                min: 1,
                                max: 5
                        },
						nro_hijos: {
                                required: true,
                                min: 1,
                                max: 20,
								minleght:1
                        },  
						estatura_cm: {
                                required: true,
                                min: 1,
                                max: 5
                        },                          
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






