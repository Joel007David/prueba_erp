<?php
include_once('conexion.php');

$table = $_GET['table'];
$tipo = $_GET['tipo'];

switch($table) {
	case 'ciudad':
		
		//header('Location: ../gestion_de_empleados.php');
		$ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $cod_ciudad = isset($_POST['cod_ciudad']) ? $_POST['cod_ciudad'] : NULL;
            $sql = "CALL PA_Ingresar_Ubigeo('$cod_ciudad','$ciudad')";
        }elseif($tipo == 'm') {
            $cod_ciudad = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Ubigeo('$ciudad')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'tipo_persona':
		
		//header('Location: ../gestion_de_empleados.php');
		$tipo_persona = isset($_POST['tipo_persona']) ? $_POST['tipo_persona'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Tipo_Persona('$tipo_persona')";
        }elseif($tipo == 'm') {
            $cod_tipo_persona = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Tipo_Persona($cod_tipo_persona,'$tipo_persona')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'turno':
	
		header('Location: ../mantenimiento_planillas.php');
		$turno = isset($_POST['turno']) ? $_POST['turno'] : NULL;
		$hora_inicio_turno = isset($_POST['hora_inicio_turno']) ? $_POST['hora_inicio_turno'] : NULL;
		$hora_fin_turno = isset($_POST['hora_fin_turno']) ? $_POST['hora_fin_turno'] : NULL;
		$observacion_turno = isset($_POST['observacion_turno']) ? $_POST['observacion_turno'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Turno('$turno','$hora_inicio_turno','$hora_fin_turno','$observacion_turno')";
        }elseif($tipo == 'm') {
            $cod_turno = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Turno($cod_turno,'$turno','$hora_inicio_turno','$hora_fin_turno','$observacion_turno')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'area':
		
		header('Location: ../mantenimiento_planillas.php');
		$area = isset($_POST['area']) ? $_POST['area'] : NULL;
		$descripcion_area = isset($_POST['descripcion_area']) ? $_POST['descripcion_area'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Area('$area','$descripcion_area')";
        }elseif($tipo == 'm') {
            $cod_area = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Area($cod_area,'$area','$descripcion_area')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'cargo':
		
		header('Location: ../mantenimiento_planillas.php');
        $cod_area = isset($_POST['cod_area']) ? $_POST['cod_area'] : NULL; echo $cod_area;
		$cargo = isset($_POST['cargo']) ? $_POST['cargo'] : NULL; echo $cargo;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Cargo($cod_area,'$cargo')";
        }elseif($tipo == 'm') {
            $cod_cargo = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Cargo($cod_cargo,$cod_area,'$cargo')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'tipo_contrato':
		
		header('Location: ../mantenimiento_planillas.php');
		$tipo_contrato = isset($_POST['tipo_contrato']) ? $_POST['tipo_contrato'] : NULL;
		$descripcion_tipo_contrato = isset($_POST['descripcion_tipo_contrato']) ? $_POST['descripcion_tipo_contrato'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Tipo_Contrato('$tipo_contrato','$descripcion_tipo_contrato')";
        }elseif($tipo == 'm') {
            $cod_tipo_contrato = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Tipo_Contrato($cod_tipo_contrato,'$tipo_contrato','$descripcion_tipo_contrato')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'condicion_empleado':
		
		header('Location: ../mantenimiento_planillas.php');
		$condicion_empleado = isset($_POST['condicion_empleado']) ? $_POST['condicion_empleado'] : NULL;
		$descripcion_condicion_empelado = isset($_POST['descripcion_condicion_empelado']) ? $_POST['descripcion_condicion_empelado'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Condicion_Empleado('$condicion_empleado','$descripcion_condicion_empelado')";
        }elseif($tipo == 'm') {
            $cod_condicion_empleado = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Condicion_Empleado($cod_condicion_empleado,'$condicion_empleado','$descripcion_condicion_empelado')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'aseguradora_de_salud':
		
		header('Location: ../mantenimiento_planillas.php');
		$aseguradora_de_salud = isset($_POST['aseguradora_de_salud']) ? $_POST['aseguradora_de_salud'] : NULL;
		$descripcion_aseguradora_de_salud = isset($_POST['descripcion_aseguradora_de_salud']) ? $_POST['descripcion_aseguradora_de_salud'] : NULL;
        $porcentaje_cobro_aseguradora_de_salud = isset($_POST['porcentaje_cobro_aseguradora_de_salud']) ? $_POST['porcentaje_cobro_aseguradora_de_salud'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Aseguradora_de_Salud('$aseguradora_de_salud','$descripcion_aseguradora_de_salud',$porcentaje_cobro_aseguradora_de_salud)";
        }elseif($tipo == 'm') {
            $cod_aseguradora_de_salud = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Aseguradora_de_Salud($cod_aseguradora_de_salud,'$aseguradora_de_salud','$descripcion_aseguradora_de_salud',$porcentaje_cobro_aseguradora_de_salud)";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'afp':
		
		header('Location: ../mantenimiento_planillas.php');
		$afp = isset($_POST['afp']) ? $_POST['afp'] : NULL;
		$descripcion_afp = isset($_POST['descripcion_afp']) ? $_POST['descripcion_afp'] : NULL;
        $porcentaje_cobro_afp = isset($_POST['porcentaje_cobro_afp']) ? $_POST['porcentaje_cobro_afp'] : NULL;
        
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Afp('$afp','$descripcion_afp',$porcentaje_cobro_afp)";
        }elseif($tipo == 'm') {
            $cod_afp = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Afp($cod_afp,'$afp','$descripcion_afp',$porcentaje_cobro_afp)";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();

		break;
	case 'empleado':
		header('Location: ../gestion_de_empleados.php');
        $cod_ciudad_nacimiento = isset($_POST['cod_ciudad_nacimiento']) ? $_POST['cod_ciudad_nacimiento'] : NULL;
        $cod_ciudad_direccion = isset($_POST['cod_ciudad_direccion']) ? $_POST['cod_ciudad_direccion'] : NULL;
        $cod_estado_civil = isset($_POST['cod_estado_civil']) ? $_POST['cod_estado_civil'] : NULL;
		$cod_afp = isset($_POST['cod_afp']) ? $_POST['cod_afp'] : NULL;
        $cod_tipo_persona = 1;
		$nombres = isset($_POST['nombres']) ? $_POST['nombres'] : NULL;
		$apellido_paterno = isset($_POST['apellido_paterno']) ? $_POST['apellido_paterno'] :NULL;
		$apellido_materno = isset($_POST['apellido_materno']) ? $_POST['apellido_materno'] : NULL;
		$dni = isset($_POST['dni']) ? $_POST['dni'] : NULL;
		$email = isset($_POST['email']) ? $_POST['email'] : NULL;
		$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : NULL;
		$nro_cuenta_bancaria = isset($_POST['nro_cuenta_bancaria']) ? $_POST['nro_cuenta_bancaria'] : NULL;
		$nombre_banco = isset($_POST['nombre_banco']) ? $_POST['nombre_banco'] : NULL;
		$tel_domicilio = isset($_POST['tel_domicilio']) ? $_POST['tel_domicilio'] : NULL;
		$tel_movil = isset($_POST['tel_movil']) ? $_POST['tel_movil'] : NULL;
		$persona_contacto = isset($_POST['persona_contacto']) ? $_POST['persona_contacto'] : NULL;
		$tel_contacto = isset($_POST['tel_contacto']) ? $_POST['tel_contacto'] : NULL;
		$operador_movil = isset($_POST['operador_movil']) ? $_POST['operador_movil'] : NULL;
		$fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : NULL;
		$genero = isset($_POST['genero']) ? $_POST['genero'] : NULL;
		$ruc = isset($_POST['ruc']) ? $_POST['ruc'] : NULL;
		$profesion = isset($_POST['profesion']) ? $_POST['profesion'] : NULL;
		$num_hijos = isset($_POST['num_hijos']) ? $_POST['num_hijos'] : NULL;
		$estatura_cm = isset($_POST['estatuta_cm']) ? $_POST['estatuta_cm'] : NULL;
		$peso_kg = isset($_POST['peso_kg']) ? $_POST['peso_kg'] : NULL;
		$tipo_sangre = isset($_POST['tipo_sangre']) ? $_POST['tipo_sangre'] : NULL;
		$hobby = isset($_POST['hobby']) ? $_POST['hobby'] : NULL;
		$deporte_favorito = isset($_POST['deporte_favorito']) ? $_POST['deporte_favorito'] : NULL;
		$foto_persona = isset($_POST['foto_persona']) ? $_POST['foto_persona'] : NULL;
		$observacion_persona = isset($_POST['observacion_persona']) ? $_POST['observacion_persona'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : NULL;
            $contrasenia = isset($_POST['contrasenia']) ? $_POST['contrasenia'] : NULL;
            $sql = "CALL PA_Ingresar_Persona( '$usuario','$contrasenia',
            '$cod_ciudad_nacimiento','$cod_ciudad_direccion',$cod_estado_civil,$cod_afp,$cod_tipo_persona,'$nombres',
            '$apellido_paterno','$apellido_materno','$dni','$email','$direccion','$nro_cuenta_bancaria','$nombre_banco',
            $tel_domicilio,$tel_movil,'$persona_contacto',$tel_contacto,'$operador_movil','$fecha_nacimiento',
            '$genero','$ruc','$profesion',$num_hijos,$estatura_cm,$peso_kg,'$tipo_sangre','$hobby',
            '$deporte_favorito','$foto_persona','$observacion_persona')";
        }elseif($tipo == 'm') {
            $cod_persona = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Persona( 
            $cod_persona,'$cod_ciudad_nacimiento','$cod_ciudad_direccion',$cod_estado_civil,$cod_afp,$cod_tipo_persona,'$nombres',
            '$apellido_paterno','$apellido_materno','$dni','$email','$direccion','$nro_cuenta_bancaria','$nombre_banco',
            $tel_domicilio,$tel_movil,'$persona_contacto',$tel_contacto,'$operador_movil','$fecha_nacimiento',
            '$genero','$ruc','$profesion',$num_hijos,$estatura_cm,$peso_kg,'$tipo_sangre','$hobby',
            '$deporte_favorito','$foto_persona','$observacion_persona')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'cliente':
		header('Location: ../gestion_de_clientes.php');
        $cod_ciudad_nacimiento = isset($_POST['cod_ciudad_nacimiento']) ? $_POST['cod_ciudad_nacimiento'] : NULL;
        $cod_ciudad_direccion = isset($_POST['cod_ciudad_direccion']) ? $_POST['cod_ciudad_direccion'] : NULL;
        $cod_estado_civil = isset($_POST['cod_estado_civil']) ? $_POST['cod_estado_civil'] : NULL;
		$cod_afp = isset($_POST['cod_afp']) ? $_POST['cod_afp'] : NULL;
        $cod_tipo_persona = 2;
		$nombres = isset($_POST['nombres']) ? $_POST['nombres'] : NULL;
		$apellido_paterno = isset($_POST['apellido_paterno']) ? $_POST['apellido_paterno'] :NULL;
		$apellido_materno = isset($_POST['apellido_materno']) ? $_POST['apellido_materno'] : NULL;
		$dni = isset($_POST['dni']) ? $_POST['dni'] : NULL;
		$email = isset($_POST['email']) ? $_POST['email'] : NULL;
		$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : NULL;
		$nro_cuenta_bancaria = isset($_POST['nro_cuenta_bancaria']) ? $_POST['nro_cuenta_bancaria'] : NULL;
		$nombre_banco = isset($_POST['nombre_banco']) ? $_POST['nombre_banco'] : NULL;
		$tel_domicilio = isset($_POST['tel_domicilio']) ? $_POST['tel_domicilio'] : NULL;
		$tel_movil = isset($_POST['tel_movil']) ? $_POST['tel_movil'] : NULL;
		$persona_contacto = isset($_POST['persona_contacto']) ? $_POST['persona_contacto'] : NULL;
		$tel_contacto = isset($_POST['tel_contacto']) ? $_POST['tel_contacto'] : NULL;
		$operador_movil = isset($_POST['operador_movil']) ? $_POST['operador_movil'] : NULL;
		$fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : NULL;
		$genero = isset($_POST['genero']) ? $_POST['genero'] : NULL;
		$ruc = isset($_POST['ruc']) ? $_POST['ruc'] : NULL;
		$profesion = isset($_POST['profesion']) ? $_POST['profesion'] : NULL;
		$num_hijos = isset($_POST['num_hijos']) ? $_POST['num_hijos'] : NULL;
		$estatura_cm = isset($_POST['estatuta_cm']) ? $_POST['estatuta_cm'] : NULL;
		$peso_kg = isset($_POST['peso_kg']) ? $_POST['peso_kg'] : NULL;
		$tipo_sangre = isset($_POST['tipo_sangre']) ? $_POST['tipo_sangre'] : NULL;
		$hobby = isset($_POST['hobby']) ? $_POST['hobby'] : NULL;
		$deporte_favorito = isset($_POST['deporte_favorito']) ? $_POST['deporte_favorito'] : NULL;
		$foto_persona = isset($_POST['foto_persona']) ? $_POST['foto_persona'] : NULL;
		$observacion_persona = isset($_POST['observacion_persona']) ? $_POST['observacion_persona'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Persona( NULL,NULL,
            '$cod_ciudad_nacimiento','$cod_ciudad_direccion',$cod_estado_civil,$cod_afp,$cod_tipo_persona,'$nombres',
            '$apellido_paterno','$apellido_materno','$dni','$email','$direccion','$nro_cuenta_bancaria','$nombre_banco',
            $tel_domicilio,$tel_movil,'$persona_contacto',$tel_contacto,'$operador_movil','$fecha_nacimiento',
            '$genero','$ruc','$profesion',$num_hijos,$estatura_cm,$peso_kg,'$tipo_sangre','$hobby',
            '$deporte_favorito','$foto_persona','$observacion_persona')";
        }elseif($tipo == 'm') {
            $cod_persona = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Persona( 
            $cod_persona,'$cod_ciudad_nacimiento','$cod_ciudad_direccion',$cod_estado_civil,$cod_afp,$cod_tipo_persona,'$nombres',
            '$apellido_paterno','$apellido_materno','$dni','$email','$direccion','$nro_cuenta_bancaria','$nombre_banco',
            $tel_domicilio,$tel_movil,'$persona_contacto',$tel_contacto,'$operador_movil','$fecha_nacimiento',
            '$genero','$ruc','$profesion',$num_hijos,$estatura_cm,$peso_kg,'$tipo_sangre','$hobby',
            '$deporte_favorito','$foto_persona','$observacion_persona')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'parentesco':
		
		header('Location: ../mantenimiento_planillas.php');
		$parentesco = isset($_POST['parentesco']) ? $_POST['parentesco'] : NULL;

		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Parentesco('$parentesco')";
        }elseif($tipo == 'm') {
            $cod_parentesco = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Parentesco($cod_parentesco,'$parentesco')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'derecho_habiente':
				
		//header('Location: ../gestion_de_derechos_habientes.php');
		$cod_parentesco = isset($_POST['cod_parentesco']) ? $_POST['cod_parentesco'] : NULL;
		$cod_ciudad_nacimiento = isset($_POST['cod_ciudad_nacimiento']) ? $_POST['cod_ciudad_nacimiento'] : NULL;
        $cod_ciudad_direccion = isset($_POST['cod_ciudad_direccion']) ? $_POST['cod_ciudad_direccion'] : NULL;
        $cod_persona = isset($_POST['cod_persona']) ? $_POST['cod_persona'] : NULL;
        $nombres_dh = isset($_POST['nombres_dh']) ? $_POST['nombres_dh'] : NULL;
        $apellido_paterno_dh = isset($_POST['apellido_paterno_dh']) ? $_POST['apellido_paterno_dh'] : NULL;
        $apellido_materno_dh = isset($_POST['apellido_materno_dh']) ? $_POST['apellido_materno_dh'] : NULL;
        $dni_dh = isset($_POST['dni_dh']) ? $_POST['dni_dh'] : NULL;
        $email_dh = isset($_POST['email_dh']) ? $_POST['email_dh'] : NULL;
        $direccion_dh = isset($_POST['direccion_dh']) ? $_POST['direccion_dh'] : NULL;
        $tel_domicilio_dh = isset($_POST['tel_domicilio_dh']) ? $_POST['tel_domicilio_dh'] : NULL;
        $tel_movil_dh = isset($_POST['tel_movil_dh']) ? $_POST['tel_movil_dh'] : NULL;
        $fecha_nacimiento_dh = isset($_POST['fecha_nacimiento_dh']) ? $_POST['fecha_nacimiento_dh'] : NULL;
        $genero_dh = isset($_POST['genero_dh']) ? $_POST['genero_dh'] : NULL;
		$foto_dh = isset($_POST['foto_dh']) ? $_POST['foto_dh'] : NULL;
        $foto_dh = NULL;
        $observacion_dh = isset($_POST['observacion_dh']) ? $_POST['observacion_dh'] : NULL;
        
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Derecho_Habiente($cod_parentesco,'$cod_ciudad_nacimiento','$cod_ciudad_direccion',$cod_persona,'$nombres_dh','$apellido_paterno_dh','$apellido_materno_dh','$dni_dh','$email_dh','$direccion_dh',$tel_domicilio_dh,$tel_movil_dh,'$fecha_nacimiento_dh','$genero_dh','$foto_dh','$observacion_dh')";
            echo $sql;
        }elseif($tipo == 'm') {
            $cod_derecho_habiente = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Derecho_Habiente($cod_derecho_habiente,$cod_parentesco,'$cod_ciudad_nacimiento','$cod_ciudad_direccion',$cod_persona,'$nombres_dh','$apellido_paterno_dh','$apellido_materno_dh','$dni_dh','$email_dh','$direccion_dh', $tel_domicilio_dh,$tel_movil_dh,'$fecha_nacimiento_dh','$genero_dh','$foto_dh','$observacion_dh')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'detalle_condicion_empleado':
				
		header('Location: ../mantenimiento_planillas.php');
        $cod_persona = isset($_POST['cod_persona']) ? $_POST['cod_persona'] : NULL;
        $cod_condicion_empelado = isset($_POST['cod_condicion_empelado']) ? $_POST['cod_condicion_empelado'] : NULL;
        $fecha_inicio_dce = isset($_POST['fecha_inicio_dce']) ? $_POST['fecha_inicio_dce'] : NULL;
		$fecha_fin_dce = isset($_POST['fecha_fin_dce']) ? $_POST['fecha_fin_dce'] : NULL;
        $observacion_dce = isset($_POST['observacion_dce']) ? $_POST['observacion_dce'] : NULL;

		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Detalle_Condicion_Empleado($cod_persona,$cod_condicion_empleado,'$fecha_inicio_dce','$fecha_fin_dce','$observacion_dce')";
        }elseif($tipo == 'm') {
            $sql = "CALL PA_Modificar_Detalle_Condicion_Empleado($cod_persona,$cod_condicion_empleado,'$fecha_inicio_dce','$fecha_fin_dce','$observacion_dce')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'asistencia':
		
		//header('Location: ../gestion_de_empleados.php');
		$cod_turno = isset($_POST['cod_turno']) ? $_POST['cod_turno'] : NULL;
		$cod_persona = isset($_POST['cod_persona']) ? $_POST['cod_persona'] : NULL;
		$fecha_inicio_a = isset($_POST['fecha_inicio_a']) ? $_POST['fecha_inicio_a'] : NULL;
		$fecha_fin_a = isset($_POST['fecha_fin_a']) ? $_POST['fecha_fin_a'] : NULL;
        $observacion_a = isset($_POST['observacion_a']) ? $_POST['observacion_a'] : NULL;

		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Asistencia($cod_turno,$cod_persona,'$fecha_inicio_a','$fecha_fin_a','$observacion')";
        }elseif($tipo == 'm') {
            $sql = "CALL PA_Modificar_Asistencia($cod_turno,$cod_persona,'$fecha_inicio_a','$fecha_fin_a','$observacion')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'contrato':
		
		header('Location: ../gestion_de_contratos.php');
		$cod_persona = isset($_POST['cod_persona']) ? $_POST['cod_persona'] : NULL;
		$cod_cargo = isset($_POST['cod_cargo']) ? $_POST['cod_cargo'] : NULL;
		$cod_tipo_contrato = isset($_POST['cod_tipo_contrato']) ? $_POST['cod_tipo_contrato'] : NULL;
		$fecha_contrato = NULL; //$fecha_contrato = isset($_POST['fecha_contrato']) ? $_POST['fecha_contrato'] : NULL;
		$fecha_inicio_c = isset($_POST['fecha_inicio_c']) ? $_POST['fecha_inicio_c'] : NULL;
		$fecha_fin_c = isset($_POST['fecha_fin_c']) ? $_POST['fecha_fin_c'] : NULL;
		$sueldo_c = isset($_POST['sueldo_c']) ? $_POST['sueldo_c'] : NULL;
		$dias_trabajo = isset($_POST['dias_trabajo']) ? $_POST['dias_trabajo'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Contrato($cod_persona,$cod_cargo,$cod_tipo_contrato,'$fecha_contrato','$fecha_inicio_c','$fecha_fin_c',$sueldo_c,$dias_trabajo)";
        }elseif($tipo == 'm') {
            $cod_contrato = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Contrato($cod_contrato,$cod_persona,$cod_cargo,$cod_tipo_contrato,'$fecha_contrato','$fecha_inicio_c','$fecha_fin_c',$sueldo_c,$dias_trabajo)";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'empleado_aseguradora':
		
		//header('Location: ../gestion_de_empleados.php');
		$cod_aseguradora_de_salud = isset($_POST['cod_aseguradora_de_salud']) ? $_POST['cod_aseguradora_de_salud'] : NULL;
		$cod_persona = isset($_POST['cod_persona']) ? $_POST['cod_persona'] : NULL;
		$fecha_incripcion_ea = isset($_POST['fecha_incripcion_ea']) ? $_POST['fecha_incripcion_ea'] : NULL;
		$fecha_termino_ea = isset($_POST['fecha_termino_ea']) ? $_POST['fecha_termino_ea'] : NULL;
        $porcentaje_cobro_ea = isset($_POST['porcentaje_cobro_ea']) ? $_POST['porcentaje_cobro_ea'] : NULL;
        $observacion_ea = isset($_POST['observacion_ea']) ? $_POST['observacion_ea'] : NULL;

		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Empleado_Aseguradora($cod_aseguradora_de_salud,$cod_persona,'$fecha_inscripcion_ea','$fecha_termino_ea',$porcentaje_cobro_ea,'$observacion_ea')";
        }elseif($tipo == 'm') {
            $sql = "CALL PA_Ingresar_Modificar_Aseguradora($cod_aseguradora_de_salud,$cod_persona,'$fecha_inscripcion_ea','$fecha_termino_ea',$porcentaje_cobro_ea,'$observacion_ea')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'boleta':
		
		//header('Location: ../gestion_de_empleados.php');
		$cod_persona = isset($_POST['cod_persona']) ? $_POST['cod_persona'] : NULL;
        $fecha_inicio_b = isset($_POST['fecha_inicio_b']) ? $_POST['fecha_inicio_b'] : NULL;
        $fecha_fin_b = isset($_POST['fecha_fin_b']) ? $_POST['fecha_fin_b'] : NULL;
        $fecha_pago_b = isset($_POST['fecha_pago_b']) ? $_POST['fecha_pago_b'] : NULL;

		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Parentesco($cod_persona,'$fecha_inicio_b','$fecha_fin_b','$fecha_pago_b')";
        }elseif($tipo == 'm') {
            $cod_boleta = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Ingresar_Parentesco($cod_boleta,$cod_persona,'$fecha_inicio_b','$fecha_fin_b','$fecha_pago_b')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'tipo_movimiento_boleta':
		
		//header('Location: ../gestion_de_empleados.php');
		$tipo_movimiento_boleta = isset($_POST['tipo_movimiento_boleta']) ? $_POST['tipo_movimiento_boleta'] : NULL;

		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Parentesco('$tipo_movimiento_boleta')";
        }elseif($tipo == 'm') {
            $cod_tipo_movimiento_boleta = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Ingresar_Parentesco($cod_tipo_movimiento_boleta,'$tipo_movimiento_boleta')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'concepto_movimiento_boleta':
		
		//header('Location: ../gestion_de_empleados.php');
        $cod_tipo_movimiento_boleta = isset($_POST['cod_tipo_movimiento_boleta']) ? $_POST['cod_tipo_movimiento_boleta'] : NULL;
		$concepto_movimiento_boleta = isset($_POST['concepto_movimiento_boleta']) ? $_POST['concepto_movimiento_boleta'] : NULL;

		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Movimiento_Boleta($cod_tipo_movimiento_boleta,'$concepto_movimiento_boleta')";
        }elseif($tipo == 'm') {
            $cod_concepto_movimiento_boleta = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Ingresar_Movimiento_Boleta($cod_concepto_movimiento_boleta,$cod_tipo_movimiento_boleta,'$concepto_movimiento_boleta')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'movimiento_boleta':
		
		//header('Location: ../gestion_de_empleados.php');
        $cod_boleta = isset($_POST['cod_boleta']) ? $_POST['cod_boleta'] : NULL;
		$cod_concepto_movimiento_boleta = isset($_POST['cod_concepto_movimiento_boleta']) ? $_POST['cod_concepto_movimiento_boleta'] : NULL;
        $monto_mb = isset($_POST['monto_mb']) ? $_POST['monto_mb'] : NULL;
        $fecha_mb = isset($_POST['fecha_mb']) ? $_POST['fecha_mb'] : NULL;
        
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Movimiento_Boleta($cod_boleta,$cod_concepto_movimiento_boleta,$monto_mb,$fecha_mb')";
        }elseif($tipo == 'm') {
            $sql = "CALL PA_Modificar_Movimiento_Boleta($cod_boleta,$cod_concepto_movimiento_boleta,$monto_mb,$fecha_mb')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'tipo_habitacion':
		
		header('Location: ../mantenimiento_hotel.php');
        $tipo_habitacion = isset($_POST['tipo_habitacion']) ? $_POST['tipo_habitacion'] : NULL;
        
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Tipo_Habitacion('$tipo_habitacion')";
        }elseif($tipo == 'm') {
			$cod_tipo_habitacion = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Tipo_Habitacion($cod_tipo_habitacion,'$tipo_habitacion')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'habitacion':
		
		header('Location: ../mantenimiento_hotel.php');
        $num_habitacion = isset($_POST['num_habitacion']) ? $_POST['num_habitacion'] : NULL;
		$piso = isset($_POST['piso']) ? $_POST['piso'] : NULL;
		$detalle_habitacion = isset($_POST['detalle_habitacion']) ? $_POST['detalle_habitacion'] : NULL;
		$tipo_habitacion = isset($_POST['cod_tipo_habitacion']) ? $_POST['cod_tipo_habitacion'] : NULL;
		$precio_habitacion = isset($_POST['precio_habitacion']) ? $_POST['precio_habitacion'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Habitacion($tipo_habitacion,$num_habitacion,$piso,'$detalle_habitacion',$precio_habitacion)";
        }elseif($tipo == 'm') {
            $cod_habitacion = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Habitacion($cod_habitacion,$tipo_habitacion,$num_habitacion,$piso,'$detalle_habitacion',$precio_habitacion)";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'tipo_transaccion':
		
		//header('Location: ../gestion_de_servicios.php');
		$tipo_transaccion = isset($_POST['tipo_transaccion']) ? $_POST['tipo_transaccion'] : NULL;
		$descripcion_tipo_transaccion = isset($_POST['descripcion_tipo_transaccion']) ? $_POST['descripcion_tipo_transaccion'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Tipo_Transaccion('$tipo_transaccion','$descripcion_tipo_transaccion')";
        }elseif($tipo == 'm') {
            $cod_tipo_transaccion = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Tipo_Transaccion($cod_tipo_transaccion,'$tipo_transaccion','$descripcion_tipo_transaccion')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'estadia':
		
		//header('Location: ../gestion_de_servicios.php');
		$cod_cliente = isset($_POST['cod_cliente']) ? $_POST['cod_cliente'] : NULL;
		$cod_empleado = isset($_POST['cod_empleado']) ? $_POST['cod_empleado'] : NULL;
        $cod_tipo_transaccion = isset($_POST['cod_tipo_transaccion']) ? $_POST['cod_tipo_transaccion'] : NULL;
        $fecha_reserva = isset($_POST['fecha_reserva']) ? $_POST['fecha_reserva'] : NULL;
        $fecha_ingreso_estadia = isset($_POST['fecha_ingreso_estadia']) ? $_POST['fecha_ingreso_estadia'] : NULL;
        $fecha_salida_estadia = isset($_POST['fecha_salida_estadia']) ? $_POST['fecha_salida_estadia'] : NULL;
        $descripcion_estadia = isset($_POST['descripcion_estadia']) ? $_POST['descripcion_estadia'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Estadia($cod_cliente,$cod_empleado,$cod_tipo_transaccion,'$fecha_reserva','$fecha_ingreso_estadia',$fecha_salida_estadia','$descripcion_estadia')";
        }elseif($tipo == 'm') {
            $cod_estadia = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Ingresar_Estadia($cod_estadia,$cod_cliente,$cod_empleado,$cod_tipo_transaccion,'$fecha_reserva','$fecha_ingreso_estadia',$fecha_salida_estadia','$descripcion_estadia')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
    case 'servicio':
	
		header('Location: ../mantenimiento_hotel.php');
		$servicio = isset($_POST['servicio']) ? $_POST['servicio'] : NULL;
		$precio_servicio = isset($_POST['precio_servicio']) ? $_POST['precio_servicio'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Servicio('$servicio',$precio_servicio)";
        }elseif($tipo == 'm') {
            $cod_servicio = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Servicio($cod_servicio,'$servicio',$precio_servicio)";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'habitacion_estadia':
		
		//header('Location: ../gestion_de_servicios.php');
		$cod_estadia = isset($_POST['cod_estadia']) ? $_POST['cod_estadia'] : NULL;
		$cod_habitacion = isset($_POST['cod_habitacion']) ? $_POST['cod_habitacion'] : NULL;
		$cod_persona = isset($_POST['cod_persona']) ? $_POST['cod_persona'] : NULL;
        $fecha_ingreso_he = isset($_POST['fecha_ingreso_he']) ? $_POST['fecha_ingreso_he'] : NULL;
		$fecha_salida_he = isset($_POST['fecha_salida_he']) ? $_POST['fecha_salida_he'] : NULL;
        $precio_habitacion_estadia = isset($_POST['precio_habitacion_estadia']) ? $_POST['precio_habitacion_estadia'] : NULL;
        
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Habitacion_Estadia($cod_estadia,$cod_habitacion,$cod_persona,'$fecha_ingreso_he','$fecha_salida_he','$precio_habitacion_estadia')";
        }elseif($tipo == 'm') {
            $sql = "CALL PA_Modificar_Habitacion_Estadia($cod_estadia,$cod_habitacion,$cod_persona,'$fecha_ingreso_he','$fecha_salida_he','$precio_habitacion_estadia')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'detalle_servicio':
		
		break;
	case 'cronograma_estadia':
		
		//header('Location: ../gestion_de_servicios.php');
		$cod_estadia = isset($_POST['cod_estadia']) ? $_POST['cod_estadia'] : NULL;
		$fecha_cronograma_estadia = isset($_POST['fecha_cronograma_estadia']) ? $_POST['fecha_cronograma_estadia'] : NULL;
		$cuota_cronograma_estadia = isset($_POST['cuota_cronograma_estadia']) ? $_POST['cuota_cronograma_estadia'] : NULL;
        $monto_cronograma_estadia = isset($_POST['monto_cronograma_estadia']) ? $_POST['monto_cronograma_estadia'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Cronograma_Estadia($cod_estadia,'$fecha_cronograma_estadia',$cuota_cronograma_estadia,$monto_cronograma_estadia)";
        }elseif($tipo == 'm') {
            $cod_cronograma_estadia = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Ingresar_Cronograma_Estadia($cod_cronograma_estadia,$cod_estadia,'$fecha_cronograma_estadia',$cuota_cronograma_estadia,$monto_cronograma_estadia)";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
			
		break;
	case 'caja':
		
		//header('Location: ../gestion_de_servicios.php');
		$nro_caja = isset($_POST['nro_caja']) ? $_POST['nro_caja'] : NULL;
		$descripcion_caja = isset($_POST['descripcion_caja']) ? $_POST['descripcion_caja'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Caja($nro_caja,'$descripcion_caja')";
        }elseif($tipo == 'm') {
            $cod_caja = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Caja($cod_caja,$nro_caja,'$descripcion_caja')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'caja_persona':
		
		//header('Location: ../gestion_de_servicios.php');
		$cod_caja = isset($_POST['cod_caja']) ? $_POST['cod_caja'] : NULL;
        $cod_persona = isset($_POST['cod_persona']) ? $_POST['cod_persona'] : NULL;
		$fecha_inicio_caja_persona = isset($_POST['fecha_inicio_caja_persona']) ? $_POST['fecha_inicio_caja_persona'] : NULL;
        $fecha_fin_caja_persona = isset($_POST['fecha_fin_caja_persona']) ? $_POST['fecha_fin_caja_persona'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Caja_Persona($cod_caja,$cod_persona,'$fecha_inicio_caja_persona','$fecha_fin_caja_persona')";
        }elseif($tipo == 'm') {
            $sql = "CALL PA_Modificar_Caja_Persona($cod_caja,$cod_persona,'$fecha_inicio_caja_persona','$fecha_fin_caja_persona')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'forma_pago':
		
		//header('Location: ../gestion_de_servicios.php');
		$forma_pago = isset($_POST['forma_pago']) ? $_POST['forma_pago'] : NULL;
        $descripcion_forma_pago = isset($_POST['descripcion_forma_pago']) ? $_POST['descripcion_forma_pago'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Forma_Pago('$forma_pago','$descripcion_forma_pago')";
        }elseif($tipo == 'm') {
            $cod_forma_pago = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
             $sql = "CALL PA_Modificar_Forma_Pago($cod_forma_pago,'$forma_pago','$descripcion_forma_pago')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'tipo_documento':
		
		//header('Location: ../gestion_de_servicios.php');
        $descripcion_tipo_documento = isset($_POST['descripcion_tipo_documento']) ? $_POST['descripcion_tipo_documento'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Forma_Pago('$descripcion_tipo_documento')";
        }elseif($tipo == 'm') {
            $cod_tipo_documento = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
             $sql = "CALL PA_Modificar_Forma_Pago($cod_forma_pago,'$descripcion_tipo_documento')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'tipo_movimiento':
		
		//header('Location: ../gestion_de_servicios.php');
        $tipo_movimiento = isset($_POST['tipo_movimiento']) ? $_POST['tipo_movimiento'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Tipo_Movimiento('$tipo_movimiento')";
        }elseif($tipo == 'm') {
            $cod_tipo_movimiento = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
             $sql = "CALL PA_Modificar_Tipo_Movimiento($cod_tipo_movimiento,'$tipo_movimiento')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'concepto_movimiento':
		
		//header('Location: ../gestion_de_servicios.php');
        $cod_tipo_movimiento = isset($_POST['cod_tipo_movimiento']) ? $_POST['cod_tipo_movimiento'] : NULL;
        $concepto_movimiento = isset($_POST['concepto_movimiento']) ? $_POST['concepto_movimiento'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Concepto_Movimiento($cod_tipo_movimiento,'$concepto_movimiento')";
        }elseif($tipo == 'm') {
            $cod_concepto_movimiento = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Concepto_Movimiento($cod_concepto_movimiento,$cod_tipo_movimiento,'$concepto_movimiento')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'tipo_sis':
		
		//header('Location: ../gestion_de_servicios.php');
        $tipo_sis = isset($_POST['tipo_sis']) ? $_POST['tipo_sis'] : NULL;
		
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Tipo_Sis('$tipo_sis')";
        }elseif($tipo == 'm') {
            $cod_tipo_sis = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Tipo_Sis($cod_tipo_sis,'$tipo_sis')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'movimiento':
		
		//header('Location: ../gestion_de_servicios.php');
        $cod_concepto_movimiento = isset($_POST['cod_concepto_movimiento']) ? $_POST['cod_concepto_movimiento'] : NULL;
        $cod_forma_pago = isset($_POST['cod_forma_pago']) ? $_POST['cod_forma_pago'] : NULL;
        $cod_tipo_documento = isset($_POST['cod_tipo_documento']) ? $_POST['cod_tipo_documento'] : NULL;
        $cod_caja = isset($_POST['cod_caja']) ? $_POST['cod_caja'] : NULL;
        $cod_persona = isset($_POST['cod_persona']) ? $_POST['cod_persona'] : NULL;
        $cod_fecha_inicio_caja_persona = isset($_POST['fecha_inicio_caja_persona']) ? $_POST['fecha_inicio_caja_persona'] : NULL;
        $cod_tipo_sis = isset($_POST['cod_tipo_sis']) ? $_POST['cod_tipo_sis'] : NULL;
        $monto_movimiento = isset($_POST['monto_movimiento']) ? $_POST['monto_movimiento'] : NULL;
        $fecha_movimiento = isset($_POST['fecha_movimiento']) ? $_POST['fecha_movimiento'] : NULL;
        
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Movimiento($cod_concepto_movimiento,$cod_forma_pago,$cod_tipo_documento,$cod_caja,$cod_persona,'$fecha_inicio_caja_persona',$cod_tipo_sis,$monto_movimiento,'$fecha_movimiento')";
        }elseif($tipo == 'm') {
            $cod_movimiento = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Movimiento($cod_movimiento,$cod_concepto_movimiento,$cod_forma_pago,$cod_tipo_documento,$cod_caja,$cod_persona,'$fecha_inicio_caja_persona',$cod_tipo_sis,$monto_movimiento,'$fecha_movimiento')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'detalle_cronograma_movimiento':
		
		break;
	case 'ventas':
		
		//header('Location: ../gestion_de_servicios.php');
        $cod_cliente = isset($_POST['cod_cliente']) ? $_POST['cod_cliente'] : NULL;
        $cod_empleado = isset($_POST['cod_empleado']) ? $_POST['cod_empleado'] : NULL;
        $cod_tipo_transaccion = isset($_POST['cod_tipo_transaccion']) ? $_POST['cod_tipo_transaccion'] : NULL;
        $fecha_venta = isset($_POST['fecha_venta']) ? $_POST['fecha_venta'] : NULL;
        $utilidad_venta = isset($_POST['utilidad_venta']) ? $_POST['utilidad_venta'] : NULL;
        $detalle_venta = isset($_POST['detalle_venta']) ? $_POST['detalle_venta'] : NULL;

		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Venta($cod_cliente,$cod_empleado,$cod_tipo_transaccion,'$fecha_venta',$utilidad_venta,'$detalle_venta')";
        }elseif($tipo == 'm') {
            $cod_venta = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Venta($cod_venta,$cod_cliente,$cod_empleado,$cod_tipo_transaccion,'$fecha_venta',$utilidad_venta,'$detalle_venta')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'tipo_producto':
        
		header('Location: ../mantenimiento_supermercado.php');
        $tipo_producto = isset($_POST['tipo_producto']) ? $_POST['tipo_producto'] : NULL;
        $descripcion_tipo_producto = isset($_POST['descripcion_tipo_producto']) ? $_POST['descripcion_tipo_producto'] : NULL;
        
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Tipo_Producto('$tipo_producto','$descripcion_tipo_producto')";
        }elseif($tipo == 'm') {
            $cod_tipo_producto = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Tipo_Producto($cod_tipo_producto,'$tipo_producto','$descripcion_tipo_producto')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
    case 'marca':
		
		header('Location: ../mantenimiento_supermercado.php');
        $marca = isset($_POST['marca']) ? $_POST['marca'] : NULL;
        $descripcion_marca = isset($_POST['descripcion_marca']) ? $_POST['descripcion_marca'] : NULL;
        
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Marca('$marca','$descripcion_marca')";
        }elseif($tipo == 'm') {
            $cod_marca = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Marca($cod_marca,'$marca','$descripcion_marca')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
    case 'producto':
		
		header('Location: ../mantenimiento_supermercado.php');
        $cod_tipo_producto = isset($_POST['cod_tipo_producto']) ? $_POST['cod_tipo_producto'] : NULL; 		
        $cod_marca = isset($_POST['cod_marca']) ? $_POST['cod_marca'] : NULL;							
        $producto = isset($_POST['producto']) ? $_POST['producto'] : NULL;						
        $descripcion_producto = isset($_POST['descripcion_producto']) ? $_POST['descripcion_producto'] : NULL;		
        $precio_producto = isset($_POST['precio_producto']) ? $_POST['precio_producto'] : NULL;
        $stock_producto = isset($_POST['stock_producto']) ? $_POST['stock_producto'] : NULL;
        $stock_minimo = isset($_POST['stock_minimo']) ? $_POST['stock_minimo'] : NULL; 
        $stock_maximo = isset($_POST['stock_maximo']) ? $_POST['stock_maximo'] : NULL;
        
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Producto($cod_tipo_producto,$cod_marca,'$producto','$descripcion_producto',$precio_producto,$stock_producto,$stock_minimo,$stock_maximo)";
        }elseif($tipo == 'm') {
            $cod_producto = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Producto($cod_producto,$cod_tipo_producto,$cod_marca,'$producto','$descripcion_producto',$precio_producto,$stock_producto,$stock_minimo,$stock_maximo)";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'detalle_venta':
		
		break;
	case 'cronograma_ventas':
		
		break;
	case 'amortizacion_venta':
		
		break;
	case 'proveedores':
		
		header('Location: ../catalogo_de_proveedores.php');
        $cod_ciudad_p = isset($_POST['cod_ciudad_p']) ? $_POST['cod_ciudad_p'] : NULL;
        $ruc_p = isset($_POST['ruc_p']) ? $_POST['ruc_p'] : NULL;
        $nombre_compania_p = isset($_POST['nombre_compania_p']) ? $_POST['nombre_compania_p'] : NULL;
        $razon_social_p = isset($_POST['razon_social_p']) ? $_POST['razon_social_p'] : NULL;
        $direccion_p = isset($_POST['direccion_p']) ? $_POST['direccion_p'] : NULL;
        $tel_fijo_p = isset($_POST['tel_fijo_p']) ? $_POST['tel_fijo_p'] : NULL;
        $tel_movil_p = isset($_POST['tel_movil_p']) ? $_POST['tel_movil_p'] : NULL;
        $persona_contacto_p = isset($_POST['persona_contacto_p']) ? $_POST['persona_contacto_p'] : NULL;
        $tel_contacto_p = isset($_POST['tel_contacto_p']) ? $_POST['tel_contacto_p'] : NULL;
        //$fecha_registro_p = isset($_POST['fecha_registro_p']) ? $_POST['fecha_registro_p'] : NULL;
		$fecha_registro_p = NULL;
        $descripcion_proveedor = isset($_POST['descripcion_proveedor']) ? $_POST['descripcion_proveedor'] : NULL;
        
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Proveedor('$cod_ciudad_p','$ruc_p','$nombre_compania_p','$razon_social_p','$direccion_p',$tel_fijo_p,$tel_movil_p,'$persona_contacto_p',$tel_contacto_p,'$fecha_registro_p','$descripcion_proveedor')";
        }elseif($tipo == 'm') {
            $cod_proveedor = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Proveedor($cod_proveedor,'$cod_ciudad_p','$ruc_p','$nombre_compania_p','$razon_social_p','$direccion_p',$tel_fijo_p,$tel_movil_p,'$persona_contacto_p',$tel_contacto_p,'$fecha_registro_p','$descripcion_proveedor')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'compras':
		
		//header('Location: ../gestion_de_servicios.php');
        $cod_empleado = isset($_POST['cod_empleado']) ? $_POST['cod_empleado'] : NULL;
        $cod_proveedor = isset($_POST['cod_proveedor']) ? $_POST['cod_proveedor'] : NULL;
        $cod_tipo_transaccion = isset($_POST['cod_tipo_transaccion']) ? $_POST['cod_tipo_transaccion'] : NULL;
        $fecha_compra = isset($_POST['fecha_compra']) ? $_POST['fecha_compra'] : NULL;
        
		$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if($tipo == 'i') {
            $sql = "CALL PA_Ingresar_Compra($cod_empleado,$cod_proveedor,$cod_tipo_transaccion,'$fecha_compra')";
        }elseif($tipo == 'm') {
            $cod_compra = isset($_GET['codigo']) ? $_GET['codigo'] : NULL;
            $sql = "CALL PA_Modificar_Compra($cod_compra,$cod_empleado,$cod_proveedor,$cod_tipo_transaccion,'$fecha_compra')";
        }
		$execute = $mysqli->query($sql);
		$mysqli->close();
		
		break;
	case 'detalle_compras':
		
		break;
	case 'cronograma_compras':
		
		break;
	case 'amortizacion_compra':
		
		break;
	case 'boleta_movimiento':
		
		break;
	case '':
		
		break;
	case '':
		
		break;
	case '':
		
		break;
			
}


?>