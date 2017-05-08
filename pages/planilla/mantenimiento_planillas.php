<?php

include_once('bd/conexion.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Mantenimiento-Planillas</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="panel.php">Software II</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-title">Navegacion</li>
                    <li class="active">
                        <a href="panel.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Planillas</span></a>
                        <ul>
                            <li><a href="gestion_de_empleados.php"><span class="fa fa-image"></span> Gestión de Empleados</a></li>
                            <li><a href="gestion_de_contratos.php"><span class="fa fa-user"></span> Gestión de Contratos</a></li>
                            <li><a href="gestion_de_derechos_habientes.php"><span class="fa fa-users"></span> Gestión de Derechos Habientes</a></li>
                            <li><a href="gestion_de_boletas.php"><span class="fa fa-users"></span> Gestión de Boletas</a></li>
                            <li><a href="gestion_de_asistencias.php"><span class="fa fa-users"></span> Gestión de Asistencias</a></li>
                            <li><a href="mantenimiento_planillas.php"><span class="fa fa-users"></span> Mantenimiento de Planillas</a></li>                        
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Hotel</span></a>
                        <ul> 
                            <li><a href="gestion_de_clientes.php"><span class="fa fa-user"></span> Gestión de Clientes</a></li>
                            <li><a href="gestion_de_habitaciones.php"><span class="fa fa-users"></span> Gestión de Habitaciones</a></li>
                            <li><a href="gestion_de_servicios.php"><span class="fa fa-users"></span> Gestión de Servicios</a></li>
                            <li><a href="movimientos.php"><span class="fa fa-users"></span> Movimientos</a></li>
                            <li><a href="mantenimiento_hotel.php"><span class="fa fa-users"></span> Mantenimiento del Hotel</a></li>                          
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Supermercado</span></a>
                        <ul>
                            <li><a href="ventas.php"><span class="fa fa-image"></span> Ventas</a></li>
                            <li><a href="compras.php"><span class="fa fa-user"></span> Compras</a></li>
                            <li><a href="gestion_de_ventas.php"><span class="fa fa-users"></span> Gestión de Ventas</a></li>
                            <li><a href="gestion_de_compras.php"><span class="fa fa-users"></span> Gestión de Compras</a></li>
                            <li><a href="mantenimiento_supermercado.php"><span class="fa fa-users"></span> Mantenimiento de Supermercado</a></li> 
                            <li><a href="movimientos.php"><span class="fa fa-users"></span> Movimientos</a></li>                          
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
                    <li><a href="panel.php">Dashboard</a></li>                    
                    <li class="active">Mantenimiento de Planillas</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Mantenimiento de Planillas</h2>
                </div>
                <!-- END PAGE TITLE --> 
                
                <!-- PAGE CONTENT WRAPPER -->
                
                	    <div class="row">    
        <div class="col-md-3">
            <ul class="nav holiday_navbar">
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Area">
                        <i class="fa fa-calendar"></i> Area </a>                
                    </li>
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Cargo">
                        <i class="fa fa-calendar"></i> Cargo </a>                
                    </li>
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Tipo_Contrato">
                        <i class="fa fa-calendar"></i> Tipo de Contrato </a>                
                    </li>
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Aseguradora_Salud">
                        <i class="fa fa-calendar"></i> Aseguradora de Salud </a>                
                    </li>
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Afp">
                        <i class="fa fa-calendar"></i> Afp </a>                
                    </li>
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Condicion_Empleado">
                        <i class="fa fa-calendar"></i> Condición de Empelado </a>                
                    </li>
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Parentesco">
                        <i class="fa fa-calendar"></i> Parentescos </a>                
                    </li>
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Turno">
                        <i class="fa fa-calendar"></i> Turnos </a>                
                    </li>
                                    
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                      <div id="Area" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-home"></i> Areas</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Areas</h3>
                                            <ul class="panel-controls">
                                                <li><a href="form/area.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Area</th>
                                                        <th>Descripcion</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Area";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_areas = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_areas['Area'] ?></td>
                                                        <td><?php print $data_areas['Descripcion_Area'] ?></td>                                             
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='form/area.php?codigo=<?php echo $data_areas['Cod_Area'] ?>'"   >
                                                    	<span class="fa fa-pencil"></span>
                                                    </button>
                                                            <button class="btn btn-danger btn-rounded btn-sm" title="Suprimir" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                        </td>
                                                    </tr>
                                         
                                                    <?php												
                                                    }$mysqli->close();
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END DEFAULT DATATABLE -->
                                </div>
                                 
                                 
                                 
                                 
                                 
                                 
                            </div>
                        </div>
                    </div>  
                                             
                      <div id="Cargo" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-calendar"></i> Cargos</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Cargos</h3>
                                            <ul class="panel-controls">
                                                <li><a href="form/cargo.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Cargo</th>
                                                        <th>Area</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Cargo";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_cargos = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_cargos['Cargo'] ?></td>
                                                		<td><?php print $data_cargos['Area'] ?></td>                                             
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='form/cargo.php?codigo=<?php echo $data_cargos['Cod_Area'] ?>'"   >
                                                    	<span class="fa fa-pencil"></span>
                                                    </button>
                                                            <button class="btn btn-danger btn-rounded btn-sm" title="Suprimir" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                        </td>
                                                    </tr>
                                         
                                                    <?php												
                                                    }$mysqli->close();
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END DEFAULT DATATABLE -->
                                </div>
                                
                                
                                 
                            </div>
                        </div>
                    </div> 
                                              
                      <div id="Tipo_Contrato" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-calendar"></i> Tipo de Contratos</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Tipo de Contratos</h3>
                                            <ul class="panel-controls">
                                                <li><a href="form/tipo_contrato.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Tipo de Contrato</th>
                                                        <th width="">Descripcion de Contrato</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Tipo_Contrato";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_tipo_contrato = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_tipo_contrato['Tipo_Contrato'] ?></td>                                            			<td><?php print $data_tipo_contrato['Descripcion_Tipo_Contrato'] ?></td>
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='form/tipo_contrato.php?codigo=<?php echo $data_tipo_contrato['Cod_Tipo_Contrato'] ?>'"   >
                                                                <span class="fa fa-pencil"></span>
                                                            </button>
                                                            <button class="btn btn-danger btn-rounded btn-sm" title="Suprimir" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                        </td>
                                                    </tr>
                                         
                                                    <?php												
                                                    }$mysqli->close();
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END DEFAULT DATATABLE -->
                                </div>
                                 
                            </div>
                        </div>
                    </div> 
                                              
                      <div id="Aseguradora_Salud" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-calendar"></i> Aseguradora de Salud</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Aseguradoras de Salud</h3>
                                            <ul class="panel-controls">
                                                <li><a href="form/aseguradora_salud.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Aseguradora de Salud</th>
                                                        <th width="">Descripcion</th>
                                                        <th width="">Porcentaje de Cobro</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Aseguradora_de_Salud";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_aseguradora_salud = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_aseguradora_salud['Aseguradora_de_Salud'] ?></td>                                            			<td><?php print $data_aseguradora_salud['Descripcion_Aseguradora_de_Salud'] ?></td>
                                                        <td><?php print $data_aseguradora_salud['Porcentaje_Cobro_Aseguradora_de_Salud'] ?></td>
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='form/aseguradora_salud.php?codigo=<?php echo $data_aseguradora_salud['Cod_Aseguradora_de_Salud'] ?>'"   >
                                                                <span class="fa fa-pencil"></span>
                                                            </button>
                                                            <button class="btn btn-danger btn-rounded btn-sm" title="Suprimir" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                        </td>
                                                    </tr>
                                         
                                                    <?php												
                                                    }$mysqli->close();
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END DEFAULT DATATABLE -->
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                      
                      <div id="Afp" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-calendar"></i> Afp</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Afps</h3>
                                            <ul class="panel-controls">
                                                <li><a href="form/afp.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Afp</th>
                                                        <th width="">Descripcion</th>
                                                        <th width="">Porcentaje de Cobro</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Afp";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_afp = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_afp['Afp'] ?></td>                  					
                                                        <td><?php print $data_afp['Descripcion_Afp'] ?></td>
                                                        <td><?php print $data_afp['Porcentaje_Cobro_Afp'] ?></td>
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='form/afp.php?codigo=<?php echo $data_afp['Cod_Afp'] ?>'"   >
                                                                <span class="fa fa-pencil"></span>
                                                            </button>
                                                            <button class="btn btn-danger btn-rounded btn-sm" title="Suprimir" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                        </td>
                                                    </tr>
                                         
                                                    <?php												
                                                    }$mysqli->close();
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END DEFAULT DATATABLE -->
                                </div>
                                 
                            </div>
                        </div>
                    </div> 
                    
                      <div id="Condicion_Empleado" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-calendar"></i> Condicion de Empleados</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Condiciones de Empleados</h3>
                                            <ul class="panel-controls">
                                                <li><a href="form/condicion_empleado.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Condicion de Empleado</th>
                                                        <th width="">Descripcion</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Condicion_Empleado";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_condicion_empleado = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_condicion_empleado['Condicion_Empleado'] ?></td>                  					
                                                        <td><?php print $data_condicion_empleado['Descripcion_Condicion_Empleado'] ?></td>
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='form/condicion_empleado.php?codigo=<?php echo $data_condicion_empleado['Cod_Condicion_Empleado'] ?>'"   >
                                                                <span class="fa fa-pencil"></span>
                                                            </button>
                                                            <button class="btn btn-danger btn-rounded btn-sm" title="Suprimir" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                        </td>
                                                    </tr>
                                         
                                                    <?php												
                                                    }$mysqli->close();
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END DEFAULT DATATABLE -->
                                </div>
                                 
                            </div>
                        </div>
                    </div> 
                    
                      <div id="Parentesco" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-calendar"></i> Parentescos</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Parentescos</h3>
                                            <ul class="panel-controls">
                                                <li><a href="form/parentesco.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Parentesco</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Parentesco";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_parentescos = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_parentescos['Parentesco'] ?></td>
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='form/parentesco.php?codigo=<?php echo $data_parentescos['Cod_Parentesco'] ?>'"   >
                                                                <span class="fa fa-pencil"></span>
                                                            </button>
                                                            <button class="btn btn-danger btn-rounded btn-sm" title="Suprimir" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                        </td>
                                                    </tr>
                                         
                                                    <?php												
                                                    }$mysqli->close();
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END DEFAULT DATATABLE -->
                                </div>
                                 
                            </div>
                        </div>
                    </div> 
                    
                      <div id="Turno" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-calendar"></i> Turnos</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Turnos</h3>
                                            <ul class="panel-controls">
                                                <li><a href="form/turno.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Turno</th>
                                                        <th width="">Hora de Inicio</th>
                                                        <th width="">Hora de Fin</th>
                                                        <th width="">Observación</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Turno";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_turnos = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_turnos['Turno'] ?></td>
                                                        <td><?php print $data_turnos['Hora_Inicio'] ?></td>
                                                        <td><?php print $data_turnos['Hora_Fin'] ?></td>
                                                        <td><?php print $data_turnos['Observacion_Turno'] ?></td>
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='form/turno.php?codigo=<?php echo $data_turnos['Cod_Turno'] ?>'"   >
                                                                <span class="fa fa-pencil"></span>
                                                            </button>
                                                            <button class="btn btn-danger btn-rounded btn-sm" title="Suprimir" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                        </td>
                                                    </tr>
                                         
                                                    <?php												
                                                    }$mysqli->close();
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END DEFAULT DATATABLE -->
                                </div>
                                 
                            </div>
                        </div>
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
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>                

        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->      

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






