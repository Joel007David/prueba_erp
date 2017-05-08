<?php

include_once('../../bd/conexion.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Mantenimiento-Supermercado</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="../../icono.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="../../css/theme-default.css"/>
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
                        <a href="../../panel_admin.php">Software II</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-title">Navegacion</li>
                    <li class="active">
                        <a href="../../panel_admin.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Planillas</span></a>
                        <ul>
                            <li><a href="../planilla/gestion_de_empleados.php"><span class="fa fa-image"></span> Gestión de Empleados</a></li>
                            <li><a href="../planilla/gestion_de_contratos.php"><span class="fa fa-user"></span> Gestión de Contratos</a></li>
                            <li><a href="../planilla/gestion_de_derechos_habientes.php"><span class="fa fa-users"></span> Gestión de Derechos Habientes</a></li>
                            <li><a href="../planilla/gestion_de_boletas.php"><span class="fa fa-users"></span> Gestión de Boletas</a></li>
                            <li><a href="../planilla/gestion_de_asistencias.php"><span class="fa fa-users"></span> Gestión de Asistencias</a></li>
                            <li><a href="../planilla/mantenimiento_planillas.php"><span class="fa fa-users"></span> Mantenimiento de Planillas</a></li>                        
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Hotel</span></a>
                        <ul> 
                            <li><a href="../hotel/gestion_de_clientes.php"><span class="fa fa-user"></span> Gestión de Clientes</a></li>
                            <li><a href="../hotel/gestion_de_habitaciones.php"><span class="fa fa-users"></span> Gestión de Habitaciones</a></li>
                            <li><a href="../hotel/gestion_de_servicios.php"><span class="fa fa-users"></span> Gestión de Servicios</a></li>
                            <li><a href="movimientos.php"><span class="fa fa-users"></span> Movimientos</a></li>
                            <li><a href="../hotel/mantenimiento_hotel.php"><span class="fa fa-users"></span> Mantenimiento del Hotel</a></li>                          
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
                    <li class="active">Mantenimiento de Supermercado</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Mantenimiento de Supermercado</h2>
                </div>
                <!-- END PAGE TITLE --> 
                
                <!-- PAGE CONTENT WRAPPER -->
                
                	    <div class="row">    
        <div class="col-md-3">
            <ul class="nav holiday_navbar">
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Producto">
                        <i class="fa fa-calendar"></i> Productos </a>                
                    </li>
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Tipo_Producto">
                        <i class="fa fa-calendar"></i> Tipo de Productos </a>                
                    </li>
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Marca">
                        <i class="fa fa-calendar"></i> Marca de Productos </a>                
                    </li>
                    <li class="" >
                        <a aria-expanded="false" data-toggle="tab" href="#Proveedor">
                        <i class="fa fa-calendar"></i> Proveedores </a>                
                    </li>
                                    
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                      <div id="Producto" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-home"></i> Producto</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Productos</h3>
                                            <ul class="panel-controls">
                                                <li><a href="../../form/producto.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Producto</th>
                                                        <th>Marca</th>
                                                        <th width="">Tipo</th>
                                                        <th width="">Sotck</th>
                                                        <th width="">Descripcion</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Producto";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_productos = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_productos['Producto'] ?></td>
                                                        <td><?php print $data_productos['Marca'] ?></td>                       <td><?php print $data_productos['Tipo_Producto'] ?></td> 
                                                        <td><?php print $data_productos['Stock_Producto'] ?></td> 
                                                        <td><?php print $data_productos['Descripcion_Producto'] ?></td> 
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='../../form/producto.php?codigo=<?php echo $data_productos['Cod_Producto'] ?>'"   >
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
                                             
                      <div id="Tipo_Producto" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-calendar"></i> Tipos de Productos</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Tipos de Productos</h3>
                                            <ul class="panel-controls">
                                                <li><a href="../../form/tipo_producto.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Tipo de Producto</th>
                                                        <th>Descripcion</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Tipo_Producto";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_tipos_productos = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_tipos_productos['Tipo_Producto'] ?></td>
                                                		<td><?php print $data_tipos_productos['Descripcion_Tipo_Producto'] ?></td>                                             
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='../../form/tipo_producto.php?codigo=<?php echo $data_tipos_productos['Cod_Tipo_Producto'] ?>'"   >
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
                                              
                      <div id="Marca" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-calendar"></i> Marcas</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Marcas</h3>
                                            <ul class="panel-controls">
                                                <li><a href="../../form/marca.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Marca</th>
                                                        <th width="">Descripcion de Marca</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Marca";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_marca = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_marca['Marca'] ?></td>                   
                                                        <td><?php print $data_marca['Descripcion_Marca'] ?></td>
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='../../form/marca.php?codigo=<?php echo $data_marca['Cod_Marca'] ?>'"   >
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
                                              
                      <div id="Proveedor" class="tab-pane ">
                        <div class="wrap-fpanel">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong><i class="fa fa-calendar"></i> Proveedores</strong>
                                    </div>

                                </div>                    
                                <!-- Table -->
                                <div class="col-md-11">
                                    <!-- START DEFAULT DATATABLE -->
                                    <div class="panel panel-info">
                                        <div class="panel-heading">                                
                                            <h3 class="panel-title">Lista de Proveedores</h3>
                                            <ul class="panel-controls">
                                                <li><a href="../../form/proveedor.php" class="" title="Nuevo"><span class="fa fa-plus-square"></span></a></li>
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body">
                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="">Ruc</th>
                                                        <th width="">Razon Social</th>
                                                        <th width="">Nombre Compañía</th>
                                                        <th width="">Dirección</th>
                                                        <th width="">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
													$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
                                                    $sql = "CALL PA_Buscar_Proveedores";
                                                    $execute = $mysqli->query($sql);
                                                    while ($data_proveedores = mysqli_fetch_array($execute)) {
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php print $data_proveedores['Ruc_P'] ?></td>                     <td><?php print $data_proveedores['Razon_Social_P'] ?></td>
                                                        <td><?php print $data_proveedores['Nombre_Compania_P'] ?></td>
                                                        <td><?php print $data_proveedores['Direccion_P'] ?></td>
                                                        <td>
                                                            <button class="btn btn-info btn-rounded btn-sm" title="Editar" onClick="location='../../form/proveedor.php?codigo=<?php echo $data_proveedores['Cod_Proveedor'] ?>'"   >
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
        <audio id="audio-alert" src="../../audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../../audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="../../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='../../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="../../js/plugins/datatables/jquery.dataTables.min.js"></script>
        
        <script type='text/javascript' src='../../js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='../../js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='../../js/plugins/jquery-validation/jquery.validate.js'></script>                

        <script type='text/javascript' src='../../js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="../../js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->      

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="../../js/settings.js"></script>
        
        <script type="text/javascript" src="../../js/plugins.js"></script>        
        <script type="text/javascript" src="../../js/actions.js"></script>
        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






