CREATE TABLE Ubigeo(
    Cod_Ciudad char(6),
    Ciudad varchar(255),
    Estado_Ciudad int(1),
    CONSTRAINT PK_Ubigeo PRIMARY KEY (Cod_Ciudad)
)
;
CREATE PROCEDURE PA_Buscar_Ubigeo()
	SELECT * 
	FROM Ubigeo
    WHERE Estado_Ciudad = 1
;
CREATE PROCEDURE PA_Buscar_Ubigeo_Codigo(
    IN Cod_Ciudad_ char(8)
)
	SELECT * 
	FROM Ubigeo
    WHERE Cod_Ciudad = Cod_Ciudad_
;
CREATE PROCEDURE PA_Ingresar_Ubigeo (
    IN Cod_Ciudad_ char(6),
    IN Ciudad_ varchar(255) 
)
	INSERT INTO Ubigeo (Cod_Ciudad,Ciudad,Estado_Ciudad) 
	VALUES (Cod_Ciudad_,Ciudad_,1)
;
CREATE PROCEDURE PA_Modificar_Ubigeo (
    IN Cod_Ciudad_ char(6),
    IN Ciudad_ varchar(255) 
)
	UPDATE Ubigeo
	SET Ciudad = Ciudad_
	WHERE Cod_Ciudad = Cod_Ciudad_
;
CREATE PROCEDURE PA_Eliminar_Ubigeo (
    IN Cod_Ciudad_ char(6)
)
	UPDATE Ubigeo
	SET Estado_Ciudad = 0
	WHERE Cod_Ciudad = Cod_Ciudad_
;
CREATE PROCEDURE PA_Activar_Ubigeo (
    IN Cod_Ciudad_ char(6)
)
	UPDATE Ubigeo
	SET Estado_Ciudad = 1
	WHERE Cod_Ciudad = Cod_Ciudad_
;
CREATE PROCEDURE PA_Suprimir_Ubigeo (
    IN Cod_Ciudad_ char(6)
)
	DELETE FROM Ubigeo
	WHERE Cod_Ciudad = Cod_Ciudad_
;
CREATE TABLE Tipo_Persona (
    Cod_Tipo_Persona int AUTO_INCREMENT,
    Tipo_Persona varchar(50),
    Estado_Tipo_Persona int(1),
    CONSTRAINT PK_Tipo_Persona PRIMARY KEY (Cod_Tipo_Persona)
)
;
INSERT INTO Tipo_Persona (Cod_Tipo_Persona,Tipo_Persona,Estado_Tipo_Persona)
VALUES (NULL,'Empleado',1),(NULL,'Cliente',1),(NULL,'Empleado Cliente',1)
;
CREATE PROCEDURE PA_Buscar_Tipo_Persona()
	SELECT * 
	FROM Tipo_Persona
    WHERE Estado_Tipo_Persona = 1
;
CREATE PROCEDURE PA_Buscar_Tipo_Persona_Codigo(
    IN Cod_Tipo_Persona_ int
)
	SELECT *  
	FROM Tipo_Persona
    WHERE Cod_Tipo_Persona = Cod_Tipo_Persona_
;
CREATE PROCEDURE PA_Ingresar_Tipo_Persona (
    IN Tipo_Persona_ varchar(50) 
)
	INSERT INTO Ubigeo (Cod_Tipo_Persona,Tipo_Persona,Estado_Tipo_Persona) 
	VALUES (NULL,Tipo_Persona_,1)
;
CREATE PROCEDURE PA_Modificar_Tipo_Persona (
    IN Cod_Tipo_Persona_ int,
    IN Tipo_Persona_ varchar(50)
)
	UPDATE Tipo_Persona
	SET Tipo_Persona = Tipo_Persona_
	WHERE Cod_Tipo_Persona = Cod_Tipo_Persona_
;
CREATE PROCEDURE PA_Eliminar_Tipo_Persona (
    IN Cod_Tipo_Persona_ int
)
	UPDATE Tipo_Persona
	SET Estado_Tipo_Persona = 0
	WHERE Cod_Tipo_Persona = Cod_Tipo_Persona_
;
CREATE PROCEDURE PA_Activar_Tipo_Persona (
    IN Cod_Tipo_Persona_ int
)
	UPDATE Tipo_Persona
	SET Estado_Tipo_Persona = 1
	WHERE Cod_Tipo_Persona = Cod_Tipo_Persona_
;
CREATE PROCEDURE PA_Suprimir_Tipo_Persona (
    IN Cod_Tipo_Persona_ int
)
	DELETE FROM Tipo_Persona
	WHERE Cod_Tipo_Persona = Cod_Tipo_Persona_
;
CREATE TABLE Turno (
    Cod_Turno int AUTO_INCREMENT,
    Turno varchar(50),
    Hora_Inicio_Turno time,
    Hora_Fin_Turno time,
    Observacion_Turno varchar(255),
    Estado_Turno int(1),
    CONSTRAINT PK_Turno PRIMARY KEY (Cod_Turno)
)
;
CREATE PROCEDURE PA_Buscar_Turno()			
	SELECT * 
	FROM Turno
    WHERE Estado_Turno = 1
;
CREATE PROCEDURE PA_Buscar_Turno_Codigo(
    IN Cod_Turno_ int
)			
	SELECT * 
	FROM Turno
    WHERE Cod_Turno = Cod_Turno_
;
CREATE PROCEDURE PA_Ingresar_Turno (
    IN Turno_ varchar(50),
    IN Hora_Inicio_Turno_ time,
    IN Hora_Fin_Turno_ time,
    IN Observacion_Turno_ varchar(255)  
)
	INSERT INTO Turno (Cod_Turno,Turno,Hora_Inicio_Turno,Hora_Fin_Turno,Observacion_Turno,Estado_Turno) 
	VALUES (NULL,Turno_,Hora_Inicio_Turno_,Hora_Fin_Turno_,Observacion_Turno_,1)
;
CREATE PROCEDURE PA_Modificar_Turno (
    IN Cod_Turno_ int,
    IN Turno_ varchar(50),
    IN Hora_Inicio_Turno_ time,
    IN Hora_Fin_Turno_ time,
    IN Observacion_Turno_ varchar(255)
)
	UPDATE Turno
	SET Turno = Turno_,Hora_Inicio_Turno = Hora_Inicio_Turno_, Hora_Fin_Turno = Hora_Fin_Turno_, Observacion_Turno = Observacion_Turno_
	WHERE Cod_Turno = Cod_Turno_
;
CREATE PROCEDURE PA_Eliminar_Turno (
    IN Cod_Turno_ int
)
	UPDATE Turno
	SET Estado_Turno = 0
	WHERE Cod_Turno = Cod_Turno_
;
CREATE PROCEDURE PA_Activar_Turno (
    IN Cod_Turno_ int
)
	UPDATE Turno
	SET Estado_Turno = 1
	WHERE Cod_Turno = Cod_Turno_
;
CREATE PROCEDURE PA_Suprimir_Turno (
    IN Cod_Turno_ int
)
	DELETE FROM Turno
	WHERE Cod_Turno = Cod_Turno_
;
CREATE TABLE Area (
    Cod_Area int AUTO_INCREMENT,
    Area varchar(50),
    Descripcion_Area varchar(255),
    Estado_Area int(1),
    CONSTRAINT PK_Area PRIMARY KEY (Cod_Area)
)
;
CREATE PROCEDURE PA_Buscar_Area()			
	SELECT * 
	FROM Area
    WHERE Estado_Area = 1
;
CREATE PROCEDURE PA_Buscar_Area_Codigo(
    IN Cod_Area_ int
)			
	SELECT * 
	FROM Area
    WHERE Cod_Area = Cod_Area_
;
CREATE PROCEDURE PA_Ingresar_Area (
    IN Area_ varchar(50),
    IN Descripcion_Area_ varchar(255) 
)
	INSERT INTO Area (Cod_Area,Area,Descripcion_Area,Estado_Area) 
	VALUES (NULL,Area_,Descripcion_Area_,1) 
;
CREATE PROCEDURE PA_Modificar_Area (
    IN Cod_Area_ int,
    IN Area_ varchar(50),
    IN Descripcion_Area_ varchar(255)
)
	UPDATE Area
	SET Area = Area_, Descripcion_Area = Descripcion_Area_
	WHERE Cod_Area = Cod_Area_
;
CREATE PROCEDURE PA_Eliminar_Area (
    IN Cod_Area_ int
)
	UPDATE Area
	SET Estado_Area = 0
	WHERE Cod_Area = Cod_Area_
;
CREATE PROCEDURE PA_Activar_Area (
    IN Cod_Area_ int
)
	UPDATE Area
	SET Estado_Area = 1
	WHERE Cod_Area = Cod_Area_
;
CREATE PROCEDURE PA_Suprimir_Area (
    IN Cod_Area_ int
)
	DELETE FROM Area
	WHERE Cod_Area = Cod_Area_
;
CREATE TABLE Cargo (
    Cod_Cargo int AUTO_INCREMENT,
    Cod_Area int,
    Cargo varchar(50),
    Estado_Cargo int(1),
    CONSTRAINT PK_Cargo PRIMARY KEY (Cod_Cargo),
    CONSTRAINT FK_Area_Cargo FOREIGN KEY (Cod_Area) REFERENCES Area (Cod_Area)
)
;
CREATE PROCEDURE PA_Buscar_Cargo()
	SELECT * 
	FROM Area,Cargo
	WHERE Area.Cod_Area = Cargo.Cod_Area AND Estado_Cargo = 1
;
CREATE PROCEDURE PA_Buscar_Cargo_Codigo(
    IN Cod_Cargo_ int
)
	SELECT * 
	FROM Area,Cargo
	WHERE Area.Cod_Area = Cargo.Cod_Area AND Cod_Cargo = Cod_Cargo_
;
CREATE PROCEDURE PA_Ingresar_Cargo (
    IN Cod_Area_ int,
    IN Cargo_ varchar(50)
)
	INSERT INTO Cargo (Cod_Cargo,Cod_Area,Cargo,Estado_Cargo) 
	VALUES (NULL,Cod_Area_,Cargo_,1)
;
CREATE PROCEDURE PA_Modificar_Cargo (
    IN Cod_Cargo_ int,
    IN Cod_Area_ int,
    IN Cargo_ varchar(50)
)
	UPDATE Cargo
	SET Cod_Area = Cod_Area_, Cargo = Cargo_
	WHERE Cod_Cargo = Cod_Cargo_
;
CREATE PROCEDURE PA_Eliminar_Cargo (
    IN Cod_Cargo_ int
)
	UPDATE Cargo
	SET Estado_Cargo = 0
	WHERE Cod_Cargo = Cod_Cargo_
;
CREATE PROCEDURE PA_Activar_Cargo (
    IN Cod_Cargo_ int
)
	UPDATE Cargo
	SET Estado_Cargo = 1
	WHERE Cod_Cargo = Cod_Cargo_
;
CREATE PROCEDURE PA_Suprimir_Cargo (
    IN Cod_Cargo_ int
)
	DELETE FROM Cargo
	WHERE Cod_Cargo = Cod_Cargo_
;
CREATE TABLE Tipo_Contrato (
    Cod_Tipo_Contrato int AUTO_INCREMENT,
    Tipo_Contrato varchar(255),
    Descripcion_Tipo_Contrato varchar(255),
    Estado_Tipo_Contrato int(1),
    CONSTRAINT PK_Tipo_Contrato PRIMARY KEY (Cod_Tipo_Contrato)
)
;
CREATE PROCEDURE PA_Buscar_Tipo_Contrato()			
	SELECT * 
	FROM Tipo_Contrato
    WHERE Estado_Tipo_Contrato = 1
;
CREATE PROCEDURE PA_Buscar_Tipo_Contrato_Codigo(
    IN Cod_Tipo_Contrato_ int
)			
	SELECT * 
	FROM Tipo_Contrato
    WHERE Cod_Tipo_Contrato = Cod_Tipo_Contrato_
;
CREATE PROCEDURE PA_Ingresar_Tipo_Contrato (
    IN Tipo_Contrato_ varchar(255),
    IN Descripcion_Tipo_Contrato_ varchar(255)
)
	INSERT INTO Tipo_Contrato (Cod_Tipo_Contrato,Tipo_Contrato,Descripcion_Tipo_Contrato,Estado_Tipo_Contrato) 
	VALUES (NULL,Tipo_Contrato_,Descripcion_Tipo_Contrato_,1)
;
CREATE PROCEDURE PA_Modificar_Tipo_Contrato (
    IN Cod_Tipo_Contrato_ int,
    IN Tipo_Contrato_ varchar(255),
    IN Descripcion_Tipo_Contrato_ varchar(255)
)
	UPDATE Tipo_Contrato
	SET Tipo_Contrato = Tipo_Contrato_,Descripcion_Tipo_Contrato = Descripcion_Tipo_Contrato_
	WHERE Cod_Tipo_Contrato = Cod_Tipo_Contrato_
;
CREATE PROCEDURE PA_Eliminar_Tipo_Contrato (
    IN Cod_Tipo_Contrato_ int
)
	UPDATE Tipo_Contrato
	SET Estado_Tipo_Contrato = 0
	WHERE Cod_Tipo_Contrato = Cod_Tipo_Contrato_
;
CREATE PROCEDURE PA_Activar_Tipo_Contrato (
    IN Cod_Tipo_Contrato_ int
)
	UPDATE Tipo_Contrato
	SET Estado_Tipo_Contrato = 1
	WHERE Cod_Tipo_Contrato = Cod_Tipo_Contrato_
;
CREATE PROCEDURE PA_Suprimir_Tipo_Contrato (
    IN Cod_Tipo_Contrato_ int
)
	DELETE FROM Tipo_Contrato
	WHERE Cod_Tipo_Contrato = Cod_Tipo_Contrato_
;
CREATE TABLE Condicion_Empleado (
    Cod_Condicion_Empleado int AUTO_INCREMENT,
    Condicion_Empleado varchar(50),
    Descripcion_Condicion_Empleado varchar(255),
    Estado_Condicion_Empleado int(1),
    CONSTRAINT PK_Condicion_Empleado PRIMARY KEY (Cod_Condicion_Empleado)
)
;
CREATE PROCEDURE PA_Buscar_Condicion_Empleado()			
	SELECT * 
	FROM Condicion_Empleado
    WHERE Estado_Condicion_Empleado = 1
;
CREATE PROCEDURE PA_Buscar_Condicion_Empleado_Codigo(
    IN Cod_Condicion_Empleado_ int
)			
	SELECT * 
	FROM Condicion_Empleado
    WHERE Cod_Condicion_Empleado = Cod_Condicion_Empleado_
;
CREATE PROCEDURE PA_Ingresar_Condicion_Empleado (
    IN Condicion_Empleado_ varchar(50),
    IN Descripcion_Condicion_Empleado_ varchar(255)
)
	INSERT INTO Condicion_Empleado (Cod_Condicion_Empleado,Condicion_Empleado,Descripcion_Condicion_Empleado,Estado_Condicion_Empleado) 
	VALUES (NULL,Condicion_Empleado_,Descripcion_Condicion_Empleado_,1)
;
CREATE PROCEDURE PA_Modificar_Condicion_Empleado (
    IN Cod_Condicion_Empleado_ int,
    IN Condicion_Empleado_ varchar(50),
    IN Descripcion_Condicion_Empleado_ varchar(255)
)
	UPDATE Condicion_Empleado
	SET Condicion_Empleado = Condicion_Empleado_, Descripcion_Condicion_Empleado = Descripcion_Condicion_Empleado_
	WHERE Cod_Condicion_Empleado = Cod_Condicion_Empleado_
;
CREATE PROCEDURE PA_Eliminar_Condicion_Empleado(
    IN Cod_Condicion_Empleado_ int
)
	UPDATE Condicion_Empleado
	SET Estado_Condicion_Empleado = 0
	WHERE Cod_Condicion_Empleado = Cod_Condicion_Empleado_
;
CREATE PROCEDURE PA_Activar_Condicion_Empleado(
    IN Cod_Condicion_Empleado_ int
)
	UPDATE Condicion_Empleado
	SET Estado_Condicion_Empleado = 1
	WHERE Cod_Condicion_Empleado = Cod_Condicion_Empleado_
;
CREATE PROCEDURE PA_Suprimir_Condicion_Empleado (
    IN Cod_Condicion_Empleado_ int
)
	DELETE FROM Condicion_Empleado
	WHERE Cod_Condicion_Empleado = Cod_Condicion_Empleado_
;
CREATE TABLE Aseguradora_de_Salud (
    Cod_Aseguradora_de_Salud int AUTO_INCREMENT,
    Aseguradora_de_Salud varchar(50),
    Descripcion_Aseguradora_de_Salud varchar(255),
    Porcentaje_Cobro_Aseguradora_de_Salud decimal(14,2),
    Estado_Aseguradora_de_Salud int(1),
    CONSTRAINT PK_Aseguradora_de_Salud PRIMARY KEY (Cod_Aseguradora_de_Salud)
)
;
CREATE PROCEDURE PA_Buscar_Aseguradora_de_Salud()		
	SELECT * 
	FROM  Aseguradora_de_Salud
    WHERE Estado_Aseguradora_de_Salud = 1
;
CREATE PROCEDURE PA_Buscar_Aseguradora_de_Salud_Codigo(
    IN Cod_Aseguradora_de_Salud_ int
)		
	SELECT * 
	FROM  Aseguradora_de_Salud
    WHERE Cod_Aseguradora_de_Salud = Cod_Aseguradora_de_Salud_
;
CREATE PROCEDURE PA_Ingresar_Aseguradora_de_Salud (
    IN Aseguradora_de_Salud_ varchar(50),
    IN Descripcion_Aseguradora_de_Salud_ varchar(255),
    IN Porcentaje_Cobro_Aseguradora_de_Salud_ decimal(14,2)	  
)
	INSERT INTO  Aseguradora_de_Salud (Cod_Aseguradora_de_Salud,Aseguradora_de_Salud,Descripcion_Aseguradora_de_Salud,Porcentaje_Cobro_Aseguradora_de_Salud,Estado_Aseguradora_de_Salud) 
	VALUES (NULL,Aseguradora_de_Salud_,Descripcion_Aseguradora_de_Salud_,Porcentaje_Cobro_Aseguradora_de_Salud_,
            1) 
;
CREATE PROCEDURE PA_Modificar_Aseguradora_de_Salud (
    IN Cod_Aseguradora_de_Salud_ int,
    IN Aseguradora_de_Salud_ varchar(50),
    IN Descripcion_Aseguradora_de_Salud_ varchar(255),
    IN Porcentaje_Cobro_Aseguradora_de_Salud_ decimal(14,2)	  
)
	UPDATE  Aseguradora_de_Salud
	SET		Aseguradora_de_Salud = Aseguradora_de_Salud_, Descripcion_Aseguradora_de_Salud = Descripcion_Aseguradora_de_Salud_,
			 Porcentaje_Cobro_Aseguradora_de_Salud = Porcentaje_Cobro_Aseguradora_de_Salud_
	WHERE Cod_Aseguradora_de_Salud = Cod_Aseguradora_de_Salud_
;
CREATE PROCEDURE PA_Eliminar_Aseguradora_de_Salud(
    IN Cod_Aseguradora_de_Salud_ int
)
	UPDATE Aseguradora_de_Salud
	SET Estado_Aseguradora_de_Salud = 0
	WHERE Cod_Aseguradora_de_Salud = Cod_Aseguradora_de_Salud_
;
CREATE PROCEDURE PA_Activar_Aseguradora_de_Salud(
    IN Cod_Aseguradora_de_Salud_ int
)
	UPDATE Aseguradora_de_Salud
	SET Estado_Aseguradora_de_Salud = 1
	WHERE Cod_Aseguradora_de_Salud = Cod_Aseguradora_de_Salud_
;
CREATE PROCEDURE PA_Suprimir_Aseguradora_de_Salud (
    IN Cod_Aseguradora_de_Salud_ int
)
	DELETE FROM Aseguradora_de_Salud
	WHERE Cod_Aseguradora_de_Salud = Cod_Aseguradora_de_Salud_
;
CREATE TABLE Afp (
    Cod_Afp int AUTO_INCREMENT,
    Afp varchar(50),
    Descripcion_Afp varchar(255),
    Porcentaje_Cobro_Afp decimal(14,2),
    Estado_Afp int(1),
    CONSTRAINT PK_Afp PRIMARY KEY (Cod_Afp)
)
;
CREATE PROCEDURE PA_Buscar_Afp()			
    SELECT * 
    FROM Afp
    WHERE Estado_Afp = 1
;
CREATE PROCEDURE PA_Buscar_Afp_Codigo(
    IN Cod_Afp_ int
)			
    SELECT * 
    FROM Afp
    WHERE Cod_Afp = Cod_Afp_
;
CREATE PROCEDURE PA_Ingresar_Afp (
    IN Afp_ varchar(50),
    IN Descripcion_Afp_ varchar(255),
    IN Porcentaje_Cobro_Afp_ decimal(14,2) 
)
	INSERT INTO Afp (Cod_Afp,Afp,Descripcion_Afp,Porcentaje_Cobro_Afp,Estado_Afp) 
	VALUES (NULL,_Afp_,Descripcion_Afp_,Porcentaje_Cobro_Afp_,1)
;
CREATE PROCEDURE PA_Modificar_Afp (
    IN Cod_Afp_ int,
    IN Afp_ varchar(50),
    IN Descripcion_Afp_ varchar(255),
    IN Porcentaje_Cobro_Afp_ decimal(14,2)
)
	UPDATE Afp
	SET	Afp = Afp_,Descripcion_Afp = Descripcion_Afp_,Porcentaje_Cobro_Afp = Porcentaje_Cobro_Afp_
	WHERE Cod_Afp = Cod_Afp_
;
CREATE PROCEDURE PA_Eliminar_Afp(
    IN Cod__Afp_ int
)
	UPDATE Afp
	SET Estado_Afp = 0
	WHERE Cod_Afp = Cod_Afp_
;
CREATE PROCEDURE PA_Activar_Afp(
    IN Cod__Afp_ int
)
	UPDATE Afp
	SET Estado_Afp = 1
	WHERE Cod_Afp = Cod_Afp_
;
CREATE PROCEDURE PA_Suprimir_Afp (
    IN Cod_Afp_ int
)
	DELETE FROM Afp
	WHERE Cod_Afp = Cod_Afp_
;
CREATE TABLE Estado_Civil (
    Cod_Estado_Civil int(1),
    Estado_Civil varchar(50),
    Estado_Estado_Civil int(1),
    CONSTRAINT PK_Estado_Civil PRIMARY KEY (Cod_Estado_Civil)
)
;
INSERT INTO Estado_Civil (Cod_Estado_Civil,Estado_Civil,Estado_Estado_Civil)
VALUES (0,'Soltero',1),(1,'Casado',1)
;
CREATE PROCEDURE PA_Buscar_Estado_Civil()			
	SELECT * 
	FROM Estado_Civil
    WHERE Estado_Estado_Civil = 1
;
CREATE PROCEDURE PA_Buscar_Estado_Civil_Codigo(
    IN Cod_Estado_Civil_ int
)			
	SELECT * 
	FROM Estado_Civil
    WHERE  Cod_Estado_Civil = Cod_Estado_Civil_
;
CREATE PROCEDURE PA_Ingresar_Estado_Civil (
    IN Cod_Estado_Civil_ int,
    IN Estado_Civil_ varchar(50)	  
)
	INSERT INTO Estado_Civil (Cod_Estado_Civil,Estado_Civil,Estado_Estado_Civil) 
	VALUES (Cod_Estado_Civil_,Estado_Civil_,1) 
;
CREATE PROCEDURE PA_Modificar_Estado_Civil (
    IN Cod_Estado_Civil_ int,
    IN Estado_Civil_ varchar(50)	  
)
	UPDATE Estado_Civil
	SET Estado_Civil = Estado_Civil_
	WHERE Cod_Estado_Civil = Cod_Estado_Civil_
;
CREATE PROCEDURE PA_Eliminar_Estado_Civil(
    IN Cod_Estado_Civil_ int
)
	UPDATE Estado_Civil
	SET Estado_Estado_Civil = 0
	WHERE Cod_Estado_Civil = Cod_Estado_Civil_
;
CREATE PROCEDURE PA_Activar_Estado_Civil(
    IN Cod_Estado_Civil_ int
)
	UPDATE Estado_Civil
	SET Estado_Estado_Civil = 1
	WHERE Cod_Estado_Civil = Cod_Estado_Civil_
;
CREATE PROCEDURE PA_Suprimir_Estado_Civil (
	 IN Cod_Estado_Civil_ int
)
	DELETE FROM Estado_Civil
	WHERE Cod_Estado_Civil = Cod_Estado_Civil_
;
CREATE TABLE Persona (
    Cod_Persona int AUTO_INCREMENT,
    Usuario varchar(20),
    Contrasenia varchar(20),
    Cod_Ciudad_Nacimiento char(6),
    Cod_Ciudad_Direccion char(6),
    Cod_Estado_Civil int(1),
    Cod_Afp int,
    Cod_Tipo_Persona int,
    Nombres varchar(120),
    Apellido_Paterno varchar(60),
    Apellido_Materno varchar(60),
    Dni char(8),
    Email varchar(50),
    Direccion varchar(50),
    Nro_Cuenta_Bancaria varchar(50),
    Nombre_Banco varchar(50),
    Tel_Domicilio int,
    Tel_Movil int,
    Persona_Contacto varchar(250),
    Tel_Contacto int,
    Operador_Movil varchar(20),
    Fecha_Nacimiento date,
    Genero char(1),
    Ruc char(11),
    Profesion varchar(255),
    Num_Hijos int,
    Estatura_cm int,
    Peso_kg decimal(14,2),
    Tipo_Sangre varchar(10),
    Hobby varchar(50),
    Deporte_Favorito varchar(50),
    Foto_Persona varchar(255),
    Observacion_Persona varchar(255),
    Estado_Persona int(1),
    CONSTRAINT PK_Persona PRIMARY KEY (Cod_Persona),
    CONSTRAINT FK_Ubigeo_Persona1 FOREIGN KEY (Cod_Ciudad_Nacimiento) REFERENCES Ubigeo (Cod_Ciudad),
    CONSTRAINT FK_Ubigeo_Persona2 FOREIGN KEY (Cod_Ciudad_Direccion) REFERENCES Ubigeo (Cod_Ciudad),
    CONSTRAINT FK_Estado_Civil_Persona FOREIGN KEY (Cod_Estado_Civil) REFERENCES Estado_Civil (Cod_Estado_Civil),
    CONSTRAINT FK_Afp_Persona FOREIGN KEY (Cod_Afp) REFERENCES Afp (Cod_Afp),
    CONSTRAINT FK_Tipo_Persona_Persona FOREIGN KEY (Cod_Tipo_Persona) REFERENCES Tipo_Persona (Cod_Tipo_Persona)
)
;
CREATE PROCEDURE PA_Buscar_Persona()			
	SELECT * 
	FROM Persona, Afp, Ubigeo, Estado_Civil, Tipo_Persona
	WHERE (	Persona.Cod_Estado_Civil = Estado_Civil.Cod_Estado_Civil AND 
			Persona.Cod_Ciudad_Nacimiento = Ubigeo.Cod_Ciudad AND
            Persona.Cod_Ciudad_Direccion = Ubigeo.Cod_Ciudad AND
			Persona.Cod_Afp = Afp.Cod_Afp AND
            Persona.Cod_Tipo_Persona = Tipo_Persona.Cod_Tipo_Persona
		  ) AND Estado_Persona = 1
;
CREATE PROCEDURE PA_Buscar_Empleado()			
	SELECT * 
	FROM Persona, Afp, Ubigeo, Estado_Civil, Tipo_Persona
	WHERE (	Persona.Cod_Estado_Civil = Estado_Civil.Cod_Estado_Civil AND 
			Persona.Cod_Ciudad_Nacimiento = Ubigeo.Cod_Ciudad AND
            Persona.Cod_Ciudad_Direccion = Ubigeo.Cod_Ciudad AND
			Persona.Cod_Afp = Afp.Cod_Afp AND
            Persona.Cod_Tipo_Persona = Tipo_Persona.Cod_Tipo_Persona
		  ) AND Estado_Persona = 1 AND Tipo_Persona = 'Empleado'
;
CREATE PROCEDURE PA_Buscar_Cliente()			
	SELECT * 
	FROM Persona, Afp, Ubigeo, Estado_Civil, Tipo_Persona
	WHERE (	Persona.Cod_Estado_Civil = Estado_Civil.Cod_Estado_Civil AND 
            Persona.Cod_Ciudad_Direccion = Ubigeo.Cod_Ciudad AND
			Persona.Cod_Afp = Afp.Cod_Afp AND
            Persona.Cod_Tipo_Persona = Tipo_Persona.Cod_Tipo_Persona
		  ) AND Estado_Persona = 1 AND Tipo_Persona = 'Cliente'
;
CREATE PROCEDURE PA_Buscar_Persona_Codigo(
    IN Cod_Persona_ int
)			
	SELECT * 
	FROM Persona, Afp, Ubigeo, Estado_Civil, Tipo_Persona
	WHERE (	Persona.Cod_Estado_Civil = Estado_Civil.Cod_Estado_Civil AND
            Persona.Cod_Ciudad_Direccion = Ubigeo.Cod_Ciudad AND
			Persona.Cod_Afp = Afp.Cod_Afp AND
            Persona.Cod_Tipo_Persona = Tipo_Persona.Cod_Tipo_Persona
		  )  AND Cod_Persona = Cod_Persona_
;
CREATE PROCEDURE PA_Ingresar_Persona (
    IN Usuario_ varchar(20),
    IN Contrasenia_ varchar(20),
    IN Cod_Ciudad_Nacimiento_ char(6),
    IN Cod_Ciudad_Direccion_ char(6),
    IN Cod_Estado_Civil_ int(1),
    IN Cod_Afp_ int,
    IN Cod_Tipo_Persona_ int,
    IN Nombres_ varchar(120),
    IN Apellido_Paterno_ varchar(60),
    IN Apellido_Materno_ varchar(60),
    IN Dni_ char(8),
    IN Email_ varchar(50),
    IN Direccion_ varchar(50),
    IN Nro_Cuenta_Bancaria_ varchar(50),
    IN Nombre_Banco_ varchar(50),
    IN Tel_Domicilio_ int,
    IN Tel_Movil_ int,
    IN Persona_Contacto_ varchar(250),
    IN Tel_Contacto_ int,
    IN Operador_Movil_ varchar(20),
    IN Fecha_Nacimiento_ date,
    IN Genero_ char(1),
    IN Ruc_ char(11),
    IN Profesion_ varchar(255),
    IN Num_Hijos_ int,
    IN Estatura_cm_ int,
    IN Peso_kg_ decimal(14,2),
    IN Tipo_Sangre_ varchar(10),
    IN Hobby_ varchar(50),
    IN Deporte_Favorito_ varchar(50),
    IN Foto_Persona_ varchar(255),
    IN Observacion_Persona_ varchar(255)  
)
	INSERT INTO Persona	(Cod_Persona,Usuario,Contrasenia,Cod_Ciudad_Nacimiento,Cod_Ciudad_Direccion,Cod_Estado_Civil,Cod_Afp,Cod_Tipo_Persona,Nombres,Apellido_Paterno,Apellido_Materno,Dni,Email,
				            Direccion,Nro_Cuenta_Bancaria,Nombre_Banco,Tel_Domicilio,Tel_Movil,Persona_Contacto,
                            Tel_Contacto,Operador_Movil,Fecha_Nacimiento,Genero,Ruc,Profesion,Num_Hijos,Estatura_cm,Peso_kg,
                            Tipo_Sangre,Hobby,Deporte_Favorito,Foto_Persona,Observacion_Persona,Estado_Persona
						) 
	VALUES	(   NULL,Usuario_,Contrasenia_,Cod_Ciudad_Nacimiento_,Cod_Ciudad_Direccion_,Cod_Estado_Civil_,Cod_Afp_,Cod_Tipo_Persona_,Nombres_,Apellido_Paterno_,Apellido_Materno_,Dni_,Email_,Direccion_,
                Nro_Cuenta_Bancaria_,Nombre_Banco_,Tel_Domicilio_,Tel_Movil_,Persona_Contacto_,Tel_Contacto_,
                Operador_Movil_,Fecha_Nacimiento_,Genero_,Ruc_,Profesion_,Num_Hijos_,Estatura_cm_,Peso_kg_,Tipo_Sangre_,
                Hobby_,Deporte_Favorito_,Foto_Persona_,Observacion_Persona_,1
			) 
;
CREATE PROCEDURE PA_Modificar_Persona (
    IN Cod_Persona_ int,
    IN Cod_Ciudad_Nacimiento_ char(6),
    IN Cod_Ciudad_Direccion_ char(6),
    IN Cod_Estado_Civil_ int(1),
    IN Cod_Afp_ int,
    IN Cod_Tipo_Persona_ int,
    IN Nombres_ varchar(120),
    IN Apellido_Paterno_ varchar(60),
    IN Apellido_Materno_ varchar(60),
    IN Dni_ char(8),
    IN Email_ varchar(50),
    IN Direccion_ varchar(50),
    IN Nro_Cuenta_Bancaria_ varchar(50),
    IN Nombre_Banco_ varchar(50),
    IN Tel_Domicilio_ int,
    IN Tel_Movil_ int,
    IN Persona_Contacto_ varchar(250),
    IN Tel_Contacto_ int,
    IN Operador_Movil_ varchar(20),
    IN Fecha_Nacimiento_ date,
    IN Genero_ char(1),
    IN Ruc_ char(11),
    IN Profesion_ varchar(255),
    IN Num_Hijos_ int,
    IN Estatura_cm_ int,
    IN Peso_kg_ decimal(14,2),
    IN Tipo_Sangre_ varchar(10),
    IN Hobby_ varchar(50),
    IN Deporte_Favorito_ varchar(50),
    IN Foto_Persona_ varchar(255),
    IN Observacion_Persona_ varchar(255)  
)
	UPDATE Persona
	SET		Cod_Ciudad_Nacimiento = Cod_Ciudad_Nacimiento_, Cod_Ciudad_Direccion = Cod_Ciudad_Direccion_, Cod_Estado_Civil = Cod_Estado_Civil_,Cod_Afp = Cod_Afp_, 
            Cod_Tipo_Persona = Cod_Tipo_Persona_, Nombres = Nombres_,Apellido_Paterno = Apellido_Paterno_,Apellido_Materno = Apellido_Materno_,Dni = Dni_,Email = Email_,
			Direccion = Direccion_,Nro_Cuenta_Bancaria = Nro_Cuenta_Bancaria_,Nombre_Banco = Nombre_Banco_,Tel_Domicilio = Tel_Domicilio_,Tel_Movil = Tel_Movil_,
			Persona_Contacto = Persona_Contacto_,Tel_Contacto = Tel_Contacto_,Operador_Movil = Operador_Movil_,Fecha_Nacimiento = Fecha_Nacimiento_,
			Genero = Genero_,Ruc = Ruc_,Profesion = Profesion_,Num_Hijos = Num_Hijos_,Estatura_cm = Estatura_cm_,Peso_kg = Peso_kg_,
			Tipo_Sangre = Tipo_Sangre_,Hobby = Hobby_,Deporte_Favorito = Deporte_Favorito_,Foto_Persona = Foto_Persona_,Observacion_Persona = Observacion_Persona_
	WHERE Cod_Persona = Cod_Persona_
;
CREATE PROCEDURE PA_Eliminar_Persona(
    IN Cod_Persona_ int
)
	UPDATE Persona
	SET Estado_Persona = 0
	WHERE Cod_Persona = Cod_Persona_
;
CREATE PROCEDURE PA_Activar_Persona(
    IN Cod_Persona_ int
)
	UPDATE Persona
	SET Estado_Persona = 1
	WHERE Cod_Persona = Cod_Persona_
;
CREATE PROCEDURE PA_Suprimir_Persona (
    IN Cod_Persona_ int
)
	DELETE FROM Persona
	WHERE Cod_Persona = Cod_Persona_
;
CREATE TABLE Parentesco (
    Cod_Parentesco int AUTO_INCREMENT,
    Parentesco varchar(30),
    Estado_Parentesco int(1),
    CONSTRAINT PK_Parentesco PRIMARY KEY (Cod_Parentesco)
)
;
CREATE PROCEDURE PA_Buscar_Parentesco()			
	SELECT * 
	FROM Parentesco
    WHERE Estado_Parentesco = 1
;
CREATE PROCEDURE PA_Buscar_Parentesco_Codigo(
    IN Cod_Parentesco_ int
)			
	SELECT * 
	FROM Parentesco
    WHERE Cod_Parentesco = Cod_Parentesco_
;
CREATE PROCEDURE PA_Ingresar_Parentesco (
    IN Parentesco_ varchar(30)
)
	INSERT INTO Parentesco (Cod_Parentesco,Parentesco,Estado_Parentesco) 
	VALUES (NULL,Parentesco_,1) 
;
CREATE PROCEDURE PA_Modificar_Parentesco (
    IN Cod_Parentesco_ int,
    IN Parentesco_ varchar(30)
)
	UPDATE Parentesco
	SET Parentesco = Parentesco_
	WHERE Cod_Parentesco = Cod_Parentesco_
;
CREATE PROCEDURE PA_Eliminar_Parentesco(
    IN Cod_Parentesco_ int
)
	UPDATE Parentesco
	SET Estado_Parentesco = 0
	WHERE Cod_Parentesco = Cod_Parentesco_
;
CREATE PROCEDURE PA_Activar_Parentesco(
    IN Cod_Parentesco_ int
)
	UPDATE Parentesco
	SET Estado_Parentesco = 1
	WHERE Cod_Parentesco = Cod_Parentesco_
;
CREATE PROCEDURE PA_Suprimir_Parentesco (
    IN Cod_Parentesco_ int
)
	DELETE FROM Parentesco
	WHERE Cod_Parentesco = Cod_Parentesco_
;
CREATE TABLE Derecho_Habiente (
    Cod_Derecho_Habiente int AUTO_INCREMENT,
    Cod_Parentesco int,
    Cod_Ciudad_Nacimiento_DH char(6),
    Cod_Ciudad_Direccion_DH char(6),
    Cod_Persona int,
    Nombres_DH varchar(120),
    Apellido_Paterno_DH varchar(60),
    Apellido_Materno_DH varchar(60),
    Dni_DH char(8),
    Email_DH varchar(50),
    Direccion_DH varchar(50),
    Tel_Domicilio_DH int,
    Tel_Movil_DH int,
    Fecha_Nacimiento_DH date,
    Genero_DH char(1),
    Foto_DH varchar(255),
    Observacion_DH varchar(255),
    Estado_DH int(1),
    CONSTRAINT PK_Derecho_Habiente PRIMARY KEY (Cod_Derecho_Habiente),
    CONSTRAINT FK_Parentesco_Derecho_Habiente FOREIGN KEY (Cod_Parentesco) REFERENCES Parentesco (Cod_Parentesco),
    CONSTRAINT FK_Ubigeo_Derecho_Habiente1 FOREIGN KEY (Cod_Ciudad_Nacimiento_DH) REFERENCES Ubigeo (Cod_Ciudad),
    CONSTRAINT FK_Ubigeo_Derecho_Habiente2 FOREIGN KEY (Cod_Ciudad_Direccion_DH) REFERENCES Ubigeo (Cod_Ciudad),
    CONSTRAINT FK_Persona_Derecho_Habiente FOREIGN KEY (Cod_Persona) REFERENCES Persona (Cod_Persona)
)
;
CREATE PROCEDURE PA_Buscar_Derecho_Habiente()			
	SELECT * 
	FROM Derecho_Habiente,Ubigeo,Parentesco,Persona
    WHERE   Derecho_Habiente.Cod_Ciudad_Direccion_DH = Ubigeo.Cod_Ciudad AND
			Derecho_Habiente.Cod_Parentesco = Parentesco.Cod_Parentesco AND
			Derecho_Habiente.Cod_Persona = Persona.Cod_Persona AND
            Estado_DH = 1
;
CREATE PROCEDURE PA_Buscar_Derecho_Habiente_Codigo(
    IN Cod_Derecho_Habiente_ int
)			
	SELECT * 
	FROM Derecho_Habiente,Ubigeo,Parentesco,Persona
    WHERE   Derecho_Habiente.Cod_Ciudad_Direccion_DH = Ubigeo.Cod_Ciudad AND
			Derecho_Habiente.Cod_Parentesco = Parentesco.Cod_Parentesco AND
			Derecho_Habiente.Cod_Persona = Persona.Cod_Persona AND
            Cod_Derecho_Habiente = Cod_Derecho_Habiente_
;
CREATE PROCEDURE PA_Ingresar_Derecho_Habiente (
    IN Cod_Parentesco_ int,
    IN Cod_Ciudad_Nacimiento_DH_ char(6),
    IN Cod_Ciudad_Direccion_DH_ char(6),
    IN Cod_Persona_ int,
    IN Nombres_DH_ varchar(120),
    IN Apellido_Paterno_DH_ varchar(60),
    IN Apellido_Materno_DH_ varchar(60),
    IN Dni_DH_ char(8),
    IN Email_DH_ varchar(50),
    IN Direccion_DH_ varchar(50),
    IN Tel_Domicilio_DH_ int,
    IN Tel_Movil_DH_ int,
    IN Fecha_Nacimiento_DH_ date,
    IN Genero_DH_ char(1),
    IN Foto_DH_ varchar(255),
    IN Observacion_DH_ varchar(255) 
)
	INSERT INTO Derecho_Habiente (	Cod_Derecho_Habiente, Cod_Parentesco, Cod_Ciudad_Nacimiento_DH, Cod_Ciudad_Direccion_DH, Cod_Persona, Nombres_DH,
									Apellido_Paterno_DH, Apellido_Materno_DH, Dni_DH, Email_DH, Direccion_DH, Tel_Domicilio_DH, Tel_Movil_DH,
									Fecha_Nacimiento_DH, Genero_DH, Foto_DH, Observacion_DH, Estado_DH
								    )
	VALUES	(	NULL,Cod_Parentesco_,Cod_Ciudad_Nacimiento_DH_, Cod_Ciudad_Direccion_DH_, Cod_Persona_,Nombres_DH_,
				Apellido_Paterno_DH_,Apellido_Materno_DH_,Dni_DH_,Email_DH_,Direccion_DH_,Tel_Domicilio_DH_,Tel_Movil_DH_,
				Fecha_Nacimiento_DH_,Genero_DH_,Foto_DH_,Observacion_DH_,1
			)
;
CREATE PROCEDURE PA_Modificar_Derecho_Habiente (
    IN Cod_Derecho_Habiente_ int,
    IN Cod_Parentesco_ int,
    IN Cod_Ciudad_Nacimiento_DH_ char(6),
    IN Cod_Ciudad_Direccion_DH_ char(6),
    IN Cod_Persona_ int,
    IN Nombres_DH_ varchar(120),
    IN Apellido_Paterno_DH_ varchar(60),
    IN Apellido_Materno_DH_ varchar(60),
    IN Dni_DH_ char(8),
    IN Email_DH_ varchar(50),
    IN Direccion_DH_ varchar(50),
    IN Tel_Domicilio_DH_ int,
    IN Tel_Movil_DH_ int,
    IN Fecha_Nacimiento_DH_ date,
    IN Genero_DH_ char(1),
    IN Foto_DH_ varchar(255),
    IN Observacion_DH_ varchar(255) 
)
	UPDATE Derecho_Habiente
	SET Cod_Parentesco = Cod_Parentesco_, Cod_Ciudad_Nacimiento_DH = Cod_Ciudad_Nacimiento_DH_, Cod_Ciudad_Direccion_DH = Cod_Ciudad_Direccion_DH_, Cod_Persona = Cod_Persona_, Nombres_DH = Nombres_DH_,
		Apellido_Paterno_DH = Apellido_Paterno_DH_, Apellido_Materno_DH = Apellido_Materno_DH_, Dni_DH = Dni_DH_, Email_DH = Email_DH_, Direccion_DH = Direccion_DH_, Tel_Domicilio_DH = Tel_Domicilio_DH_, Tel_Movil_DH = Tel_Movil_DH_,
		Fecha_Nacimiento_DH = Fecha_Nacimiento_DH_, Genero_DH = Genero_DH_, Foto_DH = Foto_DH_, Observacion_DH = Observacion_DH_
	WHERE Cod_Derecho_Habiente = Cod_Derecho_Habiente_
;
CREATE PROCEDURE PA_Eliminar_Derecho_Habiente(
    IN Cod_Derecho_Habiente_ int
)
	UPDATE Derecho_Habiente
	SET Estado_DH = 0
	WHERE Cod_Derecho_Habiente = Cod_Derecho_Habiente_
;
CREATE PROCEDURE PA_Activar_Derecho_Habiente(
    IN Cod_Derecho_Habiente_ int
)
	UPDATE Derecho_Habiente
	SET Estado_DH = 1
	WHERE Cod_Derecho_Habiente = Cod_Derecho_Habiente_
;
CREATE PROCEDURE PA_Suprimir_Derecho_Habiente (
    IN Cod_Derecho_Habiente_ int
)
	DELETE FROM Derecho_Habiente
	WHERE Cod_Derecho_Habiente = Cod_Derecho_Habiente_
;
CREATE TABLE Detalle_Condicion_Empleado (
    Cod_Persona int,
    Cod_Condicion_Empleado int,
    Fecha_Inicio_DCE datetime,
    Fecha_Fin_DCE datetime,
    Observacion_DCE varchar(255),
    CONSTRAINT PK_Detalle_Condicion_Empleado PRIMARY KEY (Cod_Persona,Cod_Condicion_Empleado,Fecha_Inicio_DCE),
    CONSTRAINT FK_Persona_Detalle_Condicion_Empleado FOREIGN KEY (Cod_Persona) REFERENCES Persona (Cod_Persona),
    CONSTRAINT FK_Condicion_Empleado_Detalle_Condicion_Empleado FOREIGN KEY (Cod_Condicion_Empleado) REFERENCES Condicion_Empleado (Cod_Condicion_Empleado)
)
;
CREATE PROCEDURE PA_Buscar_Detalle_Condicion_Empleado()			
	SELECT * 
	FROM Detalle_Condicion_Empleado,Persona,Condicion_Empleado
	WHERE	Detalle_Condicion_Empleado.Cod_Condicion_Empleado = Condicion_Empleado.Cod_Condicion_Empleado AND
			Detalle_Condicion_Empleado.Cod_Persona = Persona.Cod_Persona
;
CREATE PROCEDURE PA_Ingresar_Detalle_Condicion_Empleado (
    IN Cod_Persona_ int,
    IN Cod_Condicion_Empleado_ int,
    IN Fecha_Inicio_DCE_ datetime,
    IN Fecha_Fin_DCE_ datetime,
    IN Observacion_DCE_ varchar(255)	  
)
	INSERT INTO Detalle_Condicion_Empleado (Cod_Persona,Cod_Condicion_Empleado,Fecha_Inicio_DCE,Fecha_Fin_DCE,Observacion_DCE) 
	VALUES (Cod_Persona_,Cod_Condicion_Empleado_,Fecha_Inicio_DCE_,Fecha_Fin_DCE_, Observacion_DCE_) 
;
CREATE PROCEDURE PA_Modificar_Detalle_Condicion_Empleado (
    IN Cod_Persona_ int,
    IN Cod_Condicion_Empleado_ int,
    IN Fecha_Inicio_DCE_ datetime,
    IN Fecha_Fin_DCE_ datetime,
    IN Observacion_DCE_ varchar(255)	  
)
	UPDATE Detalle_Condicion_Empleado
	SET	Cod_Persona = Cod_Persona_, Cod_Condicion_Empleado = Cod_Condicion_Empleado_, Fecha_Inicio_DCE = Fecha_Inicio_DCE_, Fecha_Fin_DCE = Fecha_Fin_DCE_, Observacion_DCE = Observacion_DCE_
	WHERE Cod_Persona = Cod_Persona_ AND Cod_Condicion_Empleado = Cod_Condicion_Empleado_ AND Fecha_Inicio_DCE = Fecha_Inicio_DCE_
;
CREATE PROCEDURE PA_Suprimir_Detalle_Condicion_Empleado (
    IN Cod_Persona_ int,
    IN Cod_Condicion_Empleado_ int,
    IN Fecha_Inicio_DCE_ datetime
)
	DELETE FROM Detalle_Condicion_Empleado
	WHERE Cod_Persona = Cod_Persona_ AND Cod_Condicion_Empleado = Cod_Condicion_Empleado_ AND Fecha_Inicio_DCE = Fecha_Inicio_DCE_
;
CREATE TABLE Asistencia (
    Cod_Turno int,
    Cod_Persona int,
    Fecha_Inicio_A datetime,
    Fecha_Fin_A datetime,
    Observacion_A varchar(255),
    CONSTRAINT PK_Asistencia PRIMARY KEY (Cod_Turno,Cod_Persona,Fecha_Inicio_A),
    CONSTRAINT FK_Turno_Asistencia FOREIGN KEY (Cod_Turno) REFERENCES Turno (Cod_Turno),
    CONSTRAINT FK_Persona_Asistencia FOREIGN KEY (Cod_Persona) REFERENCES Persona (Cod_Persona)
)
;
CREATE PROCEDURE PA_Buscar_Asistencia()			
	SELECT * 
	FROM  Asistencia,Turno,Persona
	WHERE	Asistencia.Cod_Turno = Turno.Cod_Turno AND
			Asistencia.Cod_Persona = Persona.Cod_Persona
;
CREATE PROCEDURE PA_Ingresar_Asistencia (
    IN Cod_Turno_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_A_ datetime,
    IN Fecha_Fin_A_ datetime,
    IN Observacion_A_ varchar(255)  
)
	INSERT INTO Asistencia (Cod_Turno,Cod_Persona,Fecha_Inicio_A,Fecha_Fin_A,Observacion_A) 
	VALUES (Cod_Turno_,Cod_Persona_,Fecha_Inicio_A_,Fecha_Fin_A_,Observacion_A_) 
;
CREATE PROCEDURE PA_Modificar_Asistencia (
    IN Cod_Turno_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_A_ datetime,
    IN Fecha_Fin_A_ datetime,
    IN Observacion_A_ varchar(255)  
)
	UPDATE Asistencia
	SET	Cod_Turno = Cod_Turno_, Cod_Persona = Cod_Persona_, Fecha_Inicio_A = Fecha_Inicio_A_, Fecha_Fin_A = Fecha_Fin_A_, Observacion_A = Observacion_A_
	WHERE Cod_Turno = Cod_Turno_ AND Cod_Persona = Cod_Persona_ AND Fecha_Inicio_A = Fecha_Inicio_A_
;
CREATE PROCEDURE PA_Suprimir_Asistencia (
    IN Cod_Turno_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_A_ datetime
)
	DELETE FROM Asistencia
	WHERE Cod_Turno = Cod_Turno_ AND Cod_Persona = Cod_Persona_ AND Fecha_Inicio_A = Fecha_Inicio_A_
;
CREATE TABLE Contrato (
    Cod_Contrato int AUTO_INCREMENT,
    Cod_Persona int,
    Cod_Cargo int,
    Cod_Tipo_Contrato int,
    Fecha_Contrato datetime,
    Fecha_Inicio_C date,
    Fecha_Fin_C date,
    Sueldo_C decimal(14,2),
    Dias_Trabajo int,
    Estado_Contrato int(1),
    CONSTRAINT PK_Contrato PRIMARY KEY (Cod_Contrato),
    CONSTRAINT FK_Persona_Contrato FOREIGN KEY (Cod_Persona) REFERENCES Persona (Cod_Persona),
    CONSTRAINT FK_Cargo_Contrato FOREIGN KEY (Cod_Cargo) REFERENCES Cargo (Cod_Cargo),
    CONSTRAINT FK_Tipo_Contrato_Contrato FOREIGN KEY (Cod_tipo_Contrato) REFERENCES Tipo_Contrato (Cod_Tipo_Contrato)
)
;
CREATE PROCEDURE PA_Buscar_Contrato()		
	SELECT * 
	FROM Contrato,Tipo_Contrato,Cargo,Persona
	WHERE	Contrato.Cod_Tipo_Contrato = Tipo_Contrato.Cod_Tipo_Contrato AND
			Contrato.Cod_Cargo = Cargo.Cod_Cargo AND
			Contrato.Cod_Persona = Persona.Cod_Persona AND
            Estado_Contrato = 1
;
CREATE PROCEDURE PA_Buscar_Contrato_Codigo(
    IN Cod_Contrato_ int
)		
	SELECT * 
	FROM Contrato,Tipo_Contrato,Cargo,Persona
	WHERE	Contrato.Cod_Tipo_Contrato = Tipo_Contrato.Cod_Tipo_Contrato AND
			Contrato.Cod_Cargo = Cargo.Cod_Cargo AND
			Contrato.Cod_Persona = Persona.Cod_Persona AND
            Cod_Contrato = Cod_Contrato_
;
CREATE PROCEDURE PA_Ingresar_Contrato (
    IN Cod_Persona_ int,
    IN Cod_Cargo_ int,
    IN Cod_Tipo_Contrato_ int,
    IN Fecha_Contrato_ datetime,
    IN Fecha_Inicio_C_ date,
    IN Fecha_Fin_C_ date,
    IN Sueldo_C_ decimal(14,2),
    IN Dias_Trabajo_ int
)
	INSERT INTO Contrato (	Cod_Contrato, Cod_Persona, Cod_Cargo, Cod_Tipo_Contrato, Fecha_Contrato,
							Fecha_Inicio_C, Fecha_Fin_C, Sueldo_C, Dias_Trabajo, Estado_Contrato
							) 
	VALUES ( NULL,Cod_Persona_,Cod_Cargo_,Cod_Tipo_Contrato_,Fecha_Contrato_,
				Fecha_Inicio_C_,Fecha_Fin_C_,Sueldo_C_,Dias_Trabajo_,1
			) 
;
CREATE PROCEDURE PA_Modificar_Contrato (
    IN Cod_Contrato_ int,
    IN Cod_Persona_ int,
    IN Cod_Cargo_ int,
    IN Cod_Tipo_Contrato_ int,
    IN Fecha_Contrato_ datetime,
    IN Fecha_Inicio_C_ date,
    IN Fecha_Fin_C_ date,
    IN Sueldo_C_ decimal(14,2),
    IN Dias_Trabajo_ int
)
	UPDATE Contrato
	SET		Cod_Persona = Cod_Persona_, Cod_Cargo = Cod_Cargo_, Cod_Tipo_Contrato = Cod_Tipo_Contrato_, 
			Fecha_Contrato = Fecha_Contrato_, Fecha_Inicio_C = Fecha_Inicio_C_, Fecha_Fin_C = Fecha_Fin_C_, Sueldo_C = Sueldo_C_, Dias_Trabajo = Dias_Trabajo_
	WHERE	Cod_Contrato = Cod_Contrato_
;
CREATE PROCEDURE PA_Eliminar_Contrato(
    IN Cod_Contrato_ int
)
	UPDATE Contrato
	SET Estado_Contrato = 0
	WHERE Cod_Contrato = Cod_Contrato_
;
CREATE PROCEDURE PA_Activar_Contrato(
    IN Cod_Contrato_ int
)
	UPDATE Contrato
	SET Estado_Contrato = 1
	WHERE Cod_Contrato = Cod_Contrato_
;
CREATE PROCEDURE PA_Suprimir_Contrato (
    IN Cod_Contrato_ int
)
	DELETE FROM Contrato
	WHERE Cod_Contrato = Cod_Contrato_
;
CREATE TABLE Empleado_Aseguradora (
    Cod_Aseguradora_de_Salud int,
    Cod_Persona int,
    Fecha_Inscripcion_EA date,
    Fecha_Termino_EA date,
    Porcentaje_Cobro_EA decimal(14,2),
    Observacion_EA varchar(255),
    CONSTRAINT PK_Empleado_Aseguradora PRIMARY KEY (Fecha_Inscripcion_EA,Cod_Aseguradora_de_Salud,Cod_Persona),
    CONSTRAINT FK_Aseguradora_de_Salud_Empleado_Aseguradora FOREIGN KEY (Cod_Aseguradora_de_Salud) REFERENCES  Aseguradora_de_Salud (Cod_Aseguradora_de_Salud),
    CONSTRAINT FK_Persona_Empleado_Aseguradora FOREIGN KEY (Cod_Persona) REFERENCES Persona (Cod_Persona)
)
;
CREATE PROCEDURE PA_Buscar_Empleado_Aseguradora()
	SELECT * 
	FROM Empleado_Aseguradora,Persona
	WHERE	Empleado_Aseguradora.Cod_Persona = Persona.Cod_Persona
;
CREATE PROCEDURE PA_Ingresar_Empleado_Aseguradora (
    IN Cod_Aseguradora_de_Salud_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inscripcion_EA_ date,
    IN Fecha_Termino_EA_ date,
    IN Porcentaje_Cobro_EA_ decimal(14,2),
    IN Observacion_EA_ varchar(255)
)
	INSERT INTO Empleado_Aseguradora (	Cod_Aseguradora_de_Salud, Cod_Persona, Fecha_Inscripcion_EA, Fecha_Termino_EA, Porcentaje_Cobro_EA, Observacion_EA
										) 
	VALUES (    Cod_Aseguradora_de_Salud_,Cod_Persona_,Fecha_Inscripcion_EA_,
                Fecha_Termino_EA_,Porcentaje_Cobro_EA_,Observacion_EA_
			) 
;
CREATE PROCEDURE PA_Modificar_Empleado_Aseguradora (
    IN Cod_Aseguradora_de_Salud_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inscripcion_EA_ date,
    IN Fecha_Termino_EA_ date,
    IN Porcentaje_Cobro_EA_ decimal(14,2),
    IN Observacion_EA_ varchar(255)
)
	UPDATE Empleado_Aseguradora
	SET		Cod_Aseguradora_de_Salud = Cod_Aseguradora_de_Salud_, Cod_Persona = Cod_Persona_, Fecha_Inscripcion_EA = Fecha_Inscripcion_EA_, 
			Fecha_Termino_EA = Fecha_Termino_EA_, Porcentaje_Cobro_EA = Porcentaje_Cobro_EA_, Observacion_EA = Observacion_EA_
	WHERE	Cod_Aseguradora_de_Salud = Cod_Aseguradora_de_Salud_ AND Cod_Persona = Cod_Persona_ AND Fecha_Inscripcion_EA = Fecha_Inscripcion_EA_
;
CREATE PROCEDURE PA_Suprimir_Empleado_Aseguradora (
    IN Cod_Aseguradora_de_Salud_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inscripcion_EA_ date
)
	DELETE FROM Empleado_Aseguradora
	WHERE	Cod_Aseguradora_de_Salud = Cod_Aseguradora_de_Salud_ AND 
			Cod_Persona = Cod_Persona_ AND 
			Fecha_Inscripcion_EA = Fecha_Inscripcion_EA_
;
CREATE TABLE Boleta (
    Cod_Boleta int AUTO_INCREMENT,
    Cod_Persona int,
    Fecha_Inicio_B date,
    Fecha_Fin_B date,
    Fecha_Pago_B datetime,
    Estado_Boleta int(1),
    Estado_Boleta_A int(1),
    CONSTRAINT PK_Boleta PRIMARY KEY (Cod_Boleta),
    CONSTRAINT FK_Persona_Boleta FOREIGN KEY (Cod_Persona) REFERENCES Persona (Cod_Persona)
)
;
CREATE PROCEDURE PA_Buscar_Boleta()			
	SELECT * 
	FROM Boleta,Persona
	WHERE Persona.Cod_Persona = Boleta.Cod_Persona AND Estado_Boleta = 1
            
;
CREATE PROCEDURE PA_Buscar_Boleta_Codigo(
    IN Cod_Boleta_ int
)			
	SELECT * 
	FROM Boleta,Persona
	WHERE Persona.Cod_Persona = Boleta.Cod_Persona AND Cod_Boleta = Cod_Boleta_
            
;
CREATE PROCEDURE PA_Ingresar_Boleta_Sis (
    IN Cod_Persona_ int,
    IN Fecha_Inicio_B_ date,
    IN Fecha_Fin_B_ date,
    IN Fecha_Pago_B_ datetime
)
	INSERT INTO Boleta (Cod_Boleta,Cod_Persona,Fecha_Inicio_B,Fecha_Fin_B,Fecha_Pago_B,Estado_Boleta,Estado_Boleta_A) 
	VALUES (NULL,Cod_Persona_,Fecha_Inicio_B_,Fecha_Fin_B_,Fecha_Pago_B_,1,0)
;
CREATE PROCEDURE PA_Modificar_Boleta (
    IN Cod_Boleta_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_B_ date,
    IN Fecha_Fin_B_ date,
    IN Fecha_Pago_B_ datetime 
)
	UPDATE Boleta
	SET	Cod_Persona = Cod_Persona_, Fecha_Inicio_B = Fecha_Inicio_B_, Fecha_Fin_B = Fecha_Fin_B_, Fecha_Pago_B = Fecha_Pago_B_
	WHERE Cod_Boleta = Cod_Boleta_
;
CREATE PROCEDURE PA_Activar_Boleta_A(
    IN Cod_Boleta_ int
)
	UPDATE Boleta
	SET Estado_Boleta_A = 1
	WHERE Cod_Boleta = Cod_Boleta_
;
CREATE PROCEDURE PA_Eliminar_Boleta(
    IN Cod_Boleta_ int
)
	UPDATE Boleta
	SET Estado_Boleta = 0
	WHERE Cod_Boleta = Cod_Boleta_
;
CREATE PROCEDURE PA_Activar_Boleta(
    IN Cod_Boleta_ int
)
	UPDATE Boleta
	SET Estado_Boleta = 1
	WHERE Cod_Boleta = Cod_Boleta_
;
CREATE PROCEDURE PA_Suprimir_Boleta (
    IN Cod_Boleta_ int
)
	DELETE FROM Boleta
	WHERE Cod_Boleta = Cod_Boleta_
;
CREATE TABLE Tipo_Movimiento_Boleta (
    Cod_Tipo_Movimiento_Boleta int AUTO_INCREMENT,
    Tipo_Movimiento_Boleta varchar(20),
    Estado_TMB int(1),
    CONSTRAINT PK_Tipo_Movimiento_Boleta PRIMARY KEY (Cod_Tipo_Movimiento_Boleta)
)
;
CREATE PROCEDURE PA_Buscar_Tipo_Movimiento_Boleta()			
	SELECT * 
	FROM Tipo_Movimiento_Boleta
    WHERE Estado_TMB = 1
;
CREATE PROCEDURE PA_Ingresar_Tipo_Movimiento_Boleta (
    IN Tipo_Movimiento_Boleta_ varchar(20)	  
)
	INSERT INTO Tipo_Movimiento_Boleta (Cod_Tipo_Movimiento_Boleta,Tipo_Movimiento_Boleta,Estado_TMB) 
	VALUES (NULL,Tipo_Movimiento_Boleta_,1)
;
CREATE PROCEDURE PA_Modificar_Tipo_Movimiento_Boleta (
    IN Cod_Tipo_Movimiento_Boleta_ int,
    IN Tipo_Movimiento_Boleta_ varchar(20)	  
)
	UPDATE Tipo_Movimiento_Boleta
	SET	Tipo_Movimiento_Boleta = Tipo_Movimiento_Boleta_
	WHERE Cod_Tipo_Movimiento_Boleta = Cod_Tipo_Movimiento_Boleta_
;
CREATE PROCEDURE PA_Eliminar_Tipo_Movimiento_Boleta(
    IN Cod_Tipo_Movimiento_Boleta_ int
)
	UPDATE Boleta
	SET Estado_TMB = 0
	WHERE Cod_Tipo_Movimiento_Boleta = Cod_Tipo_Movimiento_Boleta_
;
CREATE PROCEDURE PA_Activar_Tipo_Movimiento_Boleta(
    IN Cod_Tipo_Movimiento_Boleta_ int
)
	UPDATE Boleta
	SET Estado_TMB = 1
	WHERE Cod_Tipo_Movimiento_Boleta = Cod_Tipo_Movimiento_Boleta_
;
CREATE PROCEDURE PA_Suprimir_Tipo_Movimiento_Boleta (
    IN Cod_Tipo_Movimiento_Boleta_ int
)
	DELETE FROM Tipo_Movimiento_Boleta
	WHERE Cod_Tipo_Movimiento_Boleta = Cod_Tipo_Movimiento_Boleta_
;
CREATE TABLE Concepto_Movimiento_Boleta (
    Cod_Concepto_Movimiento_Boleta int AUTO_INCREMENT,
    Cod_Tipo_Movimiento_Boleta int,
    Concepto_Movimiento_Boleta varchar(255),
    Estado_CMB int(1),
    CONSTRAINT PK_Concepto_Movimiento_Boleta PRIMARY KEY (Cod_Concepto_Movimiento_Boleta),
    CONSTRAINT FK_Tipo_Movimiento_Boleta_Concepto_Movimiento_Boleta FOREIGN KEY (Cod_Tipo_Movimiento_Boleta) REFERENCES Tipo_Movimiento_Boleta (Cod_Tipo_Movimiento_Boleta)
)
;
CREATE PROCEDURE PA_Buscar_Concepto_Movimiento_Boleta()			
	SELECT * 
	FROM Concepto_Movimiento_Boleta
    WHERE Estado_CMB = 1
;
CREATE PROCEDURE PA_Buscar_Concepto_Movimiento_Boleta_Codigo(
    IN Cod_Concepto_Movimiento_Boleta_ int
)			
	SELECT * 
	FROM Concepto_Movimiento_Boleta
    WHERE Cod_Concepto_Movimiento_Boleta = Cod_Concepto_Movimiento_Boleta_
;
CREATE PROCEDURE PA_Ingresar_Concepto_Movimiento_Boleta (
    IN Cod_Tipo_Movimiento_Boleta_ int,
    IN Concepto_Movimiento_Boleta_ varchar(255)
)
	INSERT INTO Concepto_Movimiento_Boleta (Cod_Concepto_Movimiento_Boleta, Cod_Tipo_Movimiento_Boleta, Concepto_Movimiento_Boleta, Estado) 
	VALUES (NULL,Cod_Tipo_Movimiento_Boleta_,Concepto_Movimiento_Boleta_,1)
;
CREATE PROCEDURE PA_Modificar_Concepto_Movimiento_Boleta (
    IN Cod_Concepto_Movimiento_Boleta_ int,
    IN Cod_Tipo_Movimiento_Boleta_ int,
    IN Concepto_Movimiento_Boleta_ varchar(255)
)
	UPDATE Concepto_Movimiento_Boleta
	SET	Cod_Tipo_Movimiento_Boleta = Cod_Tipo_Movimiento_Boleta_,Concepto_Movimiento_Boleta = Concepto_Movimiento_Boleta_
	WHERE Cod_Concepto_Movimiento_Boleta = Cod_Concepto_Movimiento_Boleta_
;
CREATE PROCEDURE PA_Eliminar_Concepto_Movimiento_Boleta(
    IN Cod_Concepto_Movimiento_Boleta_ int
)
	UPDATE Concepto_Movimiento_Boleta
	SET Estado_CMB = 0
	WHERE Cod_Concepto_Movimiento_Boleta = Cod_Concepto_Movimiento_Boleta_
;
CREATE PROCEDURE PA_Activar_Concepto_Movimiento_Boleta(
    IN Cod_Concepto_Movimiento_Boleta_ int
)
	UPDATE Concepto_Movimiento_Boleta
	SET Estado_CMB = 1
	WHERE Cod_Concepto_Movimiento_Boleta = Cod_Concepto_Movimiento_Boleta_
;
CREATE PROCEDURE PA_Suprimir_Concepto_Movimiento_Boleta (
    IN Cod_Concepto_Movimiento_Boleta_ int
)
	DELETE FROM Concepto_Movimiento_Boleta
	WHERE Cod_Concepto_Movimiento_Boleta = Cod_Concepto_Movimiento_Boleta_
;
CREATE TABLE Movimiento_Boleta (
    Cod_Boleta int,
    Cod_Concepto_Movimiento_Boleta int, 
    Monto_MB decimal(14,2),
    Fecha_MB datetime,
    CONSTRAINT PK_Movimiento_Boleta PRIMARY KEY (Cod_Boleta,Cod_Concepto_Movimiento_Boleta,Fecha_MB),
    CONSTRAINT FK_Boleta_Movimiento_Boleta FOREIGN KEY (Cod_Boleta) REFERENCES Boleta (Cod_Boleta),
    CONSTRAINT FK_Concepto_Movimiento_Boleta_Movimiento_Boleta FOREIGN KEY (Cod_Concepto_Movimiento_Boleta) REFERENCES Concepto_Movimiento_Boleta (Cod_Concepto_Movimiento_Boleta)
)
;
CREATE PROCEDURE PA_Buscar_Movimiento_Boleta()			
	SELECT * 
	FROM Movimiento_Boleta
;
CREATE PROCEDURE PA_Ingresar_Movimiento_Boleta (
    IN Cod_Boleta_ int,
    IN Cod_Concepto_Movimiento_Boleta_ int, 
    IN Monto_MB_ decimal(14,2),
    IN Fecha_MB_ datetime
)
	INSERT INTO Movimiento_Boleta (Cod_Boleta,Cod_Concepto_Movimiento_Boleta,Monto_MB,Fecha_MB) 
	VALUES (Cod_Boleta_,Cod_Concepto_Movimiento_Boleta_,Monto_MB_,Fecha_MB_)
;
CREATE PROCEDURE PA_Modificar_Movimiento_Boleta (
    IN Cod_Boleta_ int,
    IN Cod_Concepto_Movimiento_Boleta_ int, 
    IN Monto_MB_ decimal(14,2),
    IN Fecha_MB_ datetime
)
	UPDATE Movimiento_Boleta
	SET	Cod_Boleta = Cod_Boleta_, Cod_Concepto_Movimiento_Boleta = Cod_Concepto_Movimiento_Boleta_, Monto_MB = Monto_MB_, Fecha_MB = Fecha_MB_
	WHERE Cod_Movimiento_Boleta = Cod_Movimiento_Boleta_
;
CREATE PROCEDURE PA_Suprimir_Movimiento_Boleta (
    IN Cod_Movimiento_Boleta_ int
)
	DELETE FROM Movimiento_Boleta
	WHERE Cod_Movimiento_Boleta = Cod_Movimiento_Boleta_
;
CREATE TABLE Tipo_Habitacion (
    Cod_Tipo_Habitacion int AUTO_INCREMENT,
    Tipo_Habitacion varchar(50),
    Estado_Tipo_Habitacion  int(1),
    CONSTRAINT PK_Tipo_Habitacion PRIMARY KEY (Cod_Tipo_Habitacion)
)
;
CREATE PROCEDURE PA_Buscar_Tipo_Habitacion()			
	SELECT * 
	FROM Tipo_Habitacion
    WHERE Estado_Tipo_Habitacion = 1
;
CREATE PROCEDURE PA_Buscar_Tipo_Habitacion_Codigo(
    IN Cod_Tipo_Habitacion_ int
)			
	SELECT * 
	FROM Tipo_Habitacion
    WHERE Cod_Tipo_Habitacion = Cod_Tipo_Habitacion_
;
CREATE PROCEDURE PA_Ingresar_Tipo_Habitacion (
    IN Tipo_Habitacion_ varchar(50)	  
)
	INSERT INTO Tipo_Habitacion (Cod_Tipo_Habitacion,Tipo_Habitacion,Estado_Tipo_Habitacion) 
	VALUES (NULL,Tipo_Habitacion_,1)
;
CREATE PROCEDURE PA_Modificar_Tipo_Habitacion (
    IN Cod_Tipo_Habitacion_ int,
    IN Tipo_Habitacion_ varchar(50)	  
)
	UPDATE Tipo_Habitacion
	SET	Tipo_Habitacion = Tipo_Habitacion_
	WHERE Cod_Tipo_Habitacion = Cod_Tipo_Habitacion_
;
CREATE PROCEDURE PA_Eliminar_Tipo_Habitacion(
    IN Tipo_Habitacion_ int
)
	UPDATE Tipo_Habitacion
	SET Estado_Tipo_Habitacion = 0
	WHERE Cod_Tipo_Habitacion = Cod_Tipo_Habitacion_
;
CREATE PROCEDURE PA_Activar_Tipo_Habitacion(
    IN Tipo_Habitacion_ int
)
	UPDATE Tipo_Habitacion
	SET Estado_Tipo_Habitacion = 1
	WHERE Cod_Tipo_Habitacion = Cod_Tipo_Habitacion_
;
CREATE PROCEDURE PA_Suprimir_Tipo_Habitacion (
    IN Cod_Tipo_Habitacion_ int
)
	DELETE FROM Tipo_Habitacion
	WHERE Cod_Tipo_Habitacion = Cod_Tipo_Habitacion_
;
CREATE TABLE Habitacion (
    Cod_Habitacion int AUTO_INCREMENT,
    Cod_Tipo_Habitacion int,
    Num_Habitacion int,
    Piso int,
    Detalle_Habitacion varchar(255),
    Precio_Habitacion decimal(14,2),
    Estado_Habitacion int(1),
    CONSTRAINT PK_Habitacion PRIMARY KEY (Cod_Habitacion),
    CONSTRAINT FK_Tipo_Habitacion_Habitacion FOREIGN KEY (Cod_Tipo_Habitacion) REFERENCES Tipo_Habitacion (Cod_Tipo_Habitacion)
)
;
CREATE PROCEDURE PA_Buscar_Habitacion()			
	SELECT * 
	FROM Habitacion, Tipo_Habitacion
    WHERE Habitacion.Cod_Tipo_Habitacion = Tipo_Habitacion.Cod_Tipo_Habitacion AND Estado_Habitacion = 1
;
CREATE PROCEDURE PA_Buscar_Habitacion_Codigo(
    IN Cod_Habitacion_ int
)			
	SELECT * 
	FROM Habitacion, Tipo_Habitacion
    WHERE Habitacion.Cod_Tipo_Habitacion = Tipo_Habitacion.Cod_Tipo_Habitacion AND  Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Ingresar_Habitacion (
    IN Cod_Tipo_Habitacion_ int,
    IN Piso_ int,
    IN Num_Habitacion_ int,
    IN Detalle_Habitacion_ varchar(255),
    IN Precio_Habitacion_ decimal(14,2)	  
)
	INSERT INTO Habitacion (Cod_Habitacion,Cod_Tipo_Habitacion,Num_Habitacion,Piso,Detalle_Habitacion,Precio_Habitacion,Estado_Habitacion) 
	VALUES (NULL,Cod_Tipo_Habitacion_,Num_Habitacion_,Piso_,Detalle_Habitacion_,Precio_Habitacion_,1) 
;
CREATE PROCEDURE PA_Modificar_Habitacion (
    IN Cod_Habitacion_ int,
    IN Cod_Tipo_Habitacion_ int,
    IN Num_Habitacion_ int,
    IN Piso_ int,
    IN Detalle_Habitacion_ varchar(255),
    IN Precio_Habitacion_ decimal(14,2)	  
)
	UPDATE Habitacion
	SET		Cod_Tipo_Habitacion = Cod_Tipo_Habitacion_, Num_Habitacion = Num_Habitacion_, Piso = Piso_, Detalle_Habitacion = Detalle_Habitacion_, 
			Precio_Habitacion = Precio_Habitacion_
	WHERE Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Eliminar_Habitacion(
    IN Cod_Habitacion_ int
)
	UPDATE Habitacion
	SET Estado_Habitacion = 0
	WHERE Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Activar_Habitacion(
    IN Cod_Habitacion_ int
)
	UPDATE Habitacion
	SET Estado_Habitacion = 1
	WHERE Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Suprimir_Habitacion (
    IN Cod_Habitacion_ int
)
	DELETE FROM Habitacion
	WHERE Cod_Habitacion = Cod_Habitacion_
;
CREATE TABLE Tipo_Transaccion (
    Cod_Tipo_Transaccion int AUTO_INCREMENT,
    Tipo_Transaccion varchar (50),
    Descripcion_Tipo_Transaccion varchar(255),
    Estado_Tipo_Transaccion int(1),
    CONSTRAINT PK_Tipo_Transaccion PRIMARY KEY (Cod_Tipo_Transaccion)
)
;
CREATE PROCEDURE PA_Buscar_Tipo_Transaccion()			
	SELECT * 
	FROM Tipo_Transaccion
    WHERE Estado_Tipo_Transaccion = 1
;
CREATE PROCEDURE PA_Buscar_Tipo_Transaccion_Codigo(
    IN Cod_Tipo_Transaccion_ int
)			
	SELECT * 
	FROM Tipo_Transaccion
    WHERE Cod_Tipo_Transaccion = Cod_Tipo_Transaccion_
;
CREATE PROCEDURE PA_Ingresar_Tipo_Transaccion (
    IN Tipo_Transaccion_ varchar(50),
    IN Descripcion_Tipo_Transaccion_ varchar(255) 
)
	INSERT INTO Tipo_Transaccion (Cod_Tipo_Transaccion,Tipo_Transaccion,Descripcion_Tipo_Transaccion,Estado_Tipo_Transaccion) 
	VALUES (NULL,Tipo_Transaccion,Descripcion_Tipo_Transaccion_,1) 
;
CREATE PROCEDURE PA_Modificar_Tipo_Transaccion (
    IN Cod_Tipo_Transaccion_ int,
    IN Tipo_Transaccion_ varchar(50),
    IN Descripcion_Tipo_Transaccion_ varchar(255) 
)
	UPDATE Tipo_Transaccion
	SET	Tipo_Transaccion = Tipo_Transaccion_, Descripcion_Tipo_Transaccion = Descripcion_Tipo_Transaccion_
	WHERE Cod_Tipo_Transaccion = Cod_Tipo_Transaccion_
;
CREATE PROCEDURE PA_Eliminar_Tipo_Transaccion(
    IN Cod_Tipo_Transaccion_ int
)
	UPDATE Tipo_Transaccion
	SET Estado_Tipo_Transaccion = 0
	WHERE Cod_Tipo_Transaccion = Cod_Tipo_Transaccion_
;
CREATE PROCEDURE PA_Activar_Tipo_Transaccion(
    IN Cod_Tipo_Transaccion_ int
)
	UPDATE Tipo_Transaccion
	SET Estado_Tipo_Transaccion = 1
	WHERE Cod_Tipo_Transaccion = Cod_Tipo_Transaccion_
;
CREATE PROCEDURE PA_Suprimir_Tipo_Transaccion (
    IN Cod_Tipo_Transaccion_ int
)
	DELETE FROM Tipo_Transaccion
	WHERE Cod_Tipo_Transaccion = Cod_Tipo_Transaccion_
;
CREATE TABLE Estadia (
    Cod_Estadia int AUTO_INCREMENT,
    Cod_Cliente int,
    Cod_Empleado int,
    Cod_Tipo_Transaccion int,
    Fecha_Reserva datetime,
    Fecha_Ingreso_Estadia datetime,
    Fecha_Salida_Estadia datetime,
    Descripcion_Estadia varchar(255),
    Estado_Estadia int(1),
    CONSTRAINT PK_Estadia PRIMARY KEY (Cod_Estadia),
    CONSTRAINT FK_Persona_Estadia1 FOREIGN KEY (Cod_Cliente) REFERENCES Persona (Cod_Persona),
    CONSTRAINT FK_Persona_Estadia2 FOREIGN KEY (Cod_Empleado) REFERENCES Persona (Cod_Persona),
    CONSTRAINT FK_Tipo_Transaccion_Estadia FOREIGN KEY (Cod_Tipo_Transaccion) REFERENCES Tipo_Transaccion (Cod_Tipo_Transaccion)
)
;
CREATE PROCEDURE PA_Buscar_Estadia()			
	SELECT * 
	FROM Estadia
    WHERE Estado_Estadia = 1
;
CREATE PROCEDURE PA_Buscar_Estadia_Codigo(
    IN Cod_Estadia_ int
)			
	SELECT * 
	FROM Estadia
    WHERE Cod_Estadia = Cod_Estadia_
;
CREATE PROCEDURE PA_Ingresar_Estadia (
    IN Cod_Cliente_ int,
    IN Cod_Empleado_ int,
    IN Cod_Tipo_Transaccion_ int,
    IN Fecha_Reserva_ datetime,
    IN Fecha_Ingreso_Estadia_ datetime,
    IN Fecha_Salida_Estadia_ datetime,
    IN Descripcion_Estadia_ varchar(255)	  
)
	INSERT INTO Estadia (Cod_Estadia,Cod_Cliente,Cod_Empleado,Cod_Tipo_Transaccion,Fecha_Reserva,Fecha_Ingreso_Estadia,Fecha_Salida_Estadia,Descripcion_Estadia,Estado_Estadia) 
	VALUES (NULL,Cod_Cliente_,Cod_Empleado_,Cod_Tipo_Transaccion_,Fecha_Reserva_,Fecha_Ingreso_Estadia_,Fecha_Salida_Estadia_,Descripcion_Estadia_,1)
;
CREATE PROCEDURE PA_Modificar_Estadia (
    IN Cod_Estadia_ int,
    IN Cod_Cliente_ int,
    IN Cod_Empleado_ int,
    IN Cod_Tipo_Transaccion_ int,
    IN Fecha_Reserva_ datetime,
    IN Fecha_Ingreso_Estadia_ datetime,
    IN Fecha_Salida_Estadia_ datetime,
    IN Descripcion_Estadia_ varchar(255)	  
)
	UPDATE Estadia
	SET	Cod_Cliente = Cod_Cliente_,Cod_Empleado = Cod_Empleado_,Cod_Tipo_Transaccion = Cod_Tipo_Transaccion_,
        Fecha_Reserva = Fecha_Reserva_,Fecha_Ingreso_Estadia = Fecha_Ingreso_Estadia_,Fecha_Salida_Estadia = Fecha_Salida_Estadia_,
        Descripcion_Estadia = Descripcion_Estadia_
	WHERE Cod_Estadia = Cod_Estadia_
;
CREATE PROCEDURE PA_Eliminar_Estadia(
    IN Cod_Estadia_ int
)
	UPDATE Estadia
	SET Estado_Estadia = 0
	WHERE Cod_Estadia = Cod_Estadia_
;
CREATE PROCEDURE PA_Activar_Estadia(
    IN Cod_Estadia_ int
)
	UPDATE Estadia
	SET Estado_Estadia = 1
	WHERE Cod_Estadia = Cod_Estadia_
;
CREATE PROCEDURE PA_Suprimir_Estadia (
    IN Cod_Estadia_ int
)
	DELETE FROM Estadia
	WHERE Cod_Estadia = Cod_Estadia_
;
CREATE TABLE Servicio (
    Cod_Servicio int AUTO_INCREMENT,
    Servicio varchar(255),
    Precio_Servicio decimal(14,2),
    Estado_Servicio int(1),
    CONSTRAINT PK_Servicio PRIMARY KEY (Cod_Servicio)
)
;
CREATE PROCEDURE PA_Buscar_Servicio()			
	SELECT * 
	FROM Servicio
	WHERE Estado_Servicio = 1
;
CREATE PROCEDURE PA_Buscar_Servicio_Codigo(
    IN Cod_Servicio_ int
)			
	SELECT * 
	FROM Servicio
	WHERE Cod_Servicio = Cod_Servicio_
;
CREATE PROCEDURE PA_Ingresar_Servicio (
    IN Servicio_ varchar(255),
    IN Precio_Servicio_ decimal(14,2) 
)
	INSERT INTO Servicio (Cod_Servicio,Servicio,Precio_Servicio,Estado_Servicio) 
	VALUES (NULL,Servicio_,Precio_Servicio_,1) 
;
CREATE PROCEDURE PA_Modificar_Servicio (
    IN Cod_Servicio_ int,
    IN Servicio_ varchar(255),
    IN Precio_Servicio_ decimal(14,2) 
)
	UPDATE Servicio
	SET	Servicio = Servicio_,Precio_Servicio = Precio_Servicio_
	WHERE Cod_Servicio = Cod_Servicio_
;
CREATE PROCEDURE PA_Eliminar_Servicio (
    IN Cod_Servicio_ int
)
	UPDATE Servicio
	SET Estado_Servicio = 0
	WHERE Cod_Servicio = Cod_Servicio_
;
CREATE PROCEDURE PA_Activar_Servicio (
    IN Cod_Servicio_ int
)
	UPDATE Servicio
	SET Estado_Servicio = 1
	WHERE Cod_Servicio = Cod_Servicio_
;
CREATE PROCEDURE PA_Suprimir_Servicio (
    IN Cod_Servicio_ int
)
	DELETE FROM Servicio
	WHERE Cod_Servicio = Cod_Servicio_
;
CREATE TABLE Habitacion_Estadia (
    Cod_Estadia int,
    Cod_Habitacion int,
    Cod_Persona int,
    Fecha_Ingreso_HE datetime,
    Fecha_Salida_HE datetime,
    Precio_Habitacion_Estadia decimal(14,2),
    Estado_Habitacion_Estadia int(1),
    CONSTRAINT PK_Habitacion_Estadia PRIMARY KEY (Cod_Estadia,Cod_Habitacion),
    CONSTRAINT FK_Estadia FOREIGN KEY (Cod_Estadia) REFERENCES Estadia (Cod_Estadia),
    CONSTRAINT FK_Habitacion FOREIGN KEY (Cod_Habitacion) REFERENCES Habitacion (Cod_Habitacion),
    CONSTRAINT FK_Persona FOREIGN KEY (Cod_Persona) REFERENCES Persona (Cod_Persona)
)
;
CREATE PROCEDURE PA_Buscar_Habitacion_Estadia()			
	SELECT * 
	FROM Habitacion_Estadia,Persona,Estadia,Habitacion
	WHERE	Habitacion_Estadia.Cod_Persona = Persona.Cod_Persona AND
			Habitacion_Estadia.Cod_Estadia  = Estadia.Cod_Estadia AND
			Habitacion_Estadia.Cod_Habitacion = Habitacion.Cod_Habitacion AND
            Estado_Habitacion_Estadia = 1
;
CREATE PROCEDURE PA_Buscar_Habitacion_Estadia_Codigo(
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int
)			
	SELECT * 
	FROM Habitacion_Estadia,Persona,Estadia,Habitacion
	WHERE	Habitacion_Estadia.Cod_Persona = Persona.Cod_Persona AND
			Habitacion_Estadia.Cod_Estadia  = Estadia.Cod_Estadia AND
			Habitacion_Estadia.Cod_Habitacion = Habitacion.Cod_Habitacion AND
            Cod_Estadia = Cod_Estadia_ AND Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Ingresar_Habitacion_Estadia (
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int,
    IN Cod_Persona_ int,
    IN Fecha_Ingreso_HE_ datetime,
    IN Fecha_Salida_HE_ datetime,
    IN Precio_Habitacion_Estadia_ decimal(14,2)  
)
	INSERT INTO Habitacion_Estadia (Cod_Estadia,Cod_Habitacion,Cod_Persona,Fecha_Ingreso_HE,Fecha_Salida_HE,Precio_Habitacion_Estadia,Estado_Habitacion_Estadia) 
	VALUES (Cod_Estadia_,Cod_Habitacion_,Cod_Persona_,Fecha_Ingreso_HE_,Fecha_Salida_HE_,Precio_Habitacion_Estadia_,1)
;
CREATE PROCEDURE PA_Modificar_Habitacion_Estadia (
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int,
    IN Cod_Persona_ int,
    IN Fecha_Ingreso_HE_ datetime,
    IN Fecha_Salida_HE_ datetime,
    IN Precio_Habitacion_Estadia_ decimal(14,2)  
)
	UPDATE Habitacion_Estadia
	SET		Cod_Estadia = Cod_Estadia_,Cod_Habitacion = Cod_Habitacion,Cod_Persona = Cod_Persona_,
			Fecha_Ingreso = Fecha_Ingreso_,Fecha_Salida_HE = Fecha_Salida_HE_,Precio_Habitacion_Estadia = Precio_Habitacion_Estadia_
	WHERE Cod_Estadia = Cod_Estadia_ AND Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Eliminar_Habitacion_Estadia (
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int
)
	UPDATE Habitacion_Estadia
	SET Estado_Habitacion_Estadia = 0
	WHERE Cod_Estadia = Cod_Estadia_ AND Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Activar_Habitacion_Estadia (
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int
)
	UPDATE Habitacion_Estadia
	SET Estado_Habitacion_Estadia = 1
	WHERE Cod_Estadia = Cod_Estadia_ AND Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Suprimir_Habitacion_Estadia (
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int
)
	DELETE FROM Habitacion_Estadia
	WHERE Cod_Estadia = Cod_Estadia_ AND Cod_Habitacion = Cod_Habitacion_
;
CREATE TABLE Detalle_Servicio (
    Cod_Servicio int,
    Cod_Estadia int,
    Cod_Habitacion int,
    Cantidad_Detalle_Servicio int,
    Precio_Detalle_Servicio decimal(14,2),
    Estado_Detalle_Servicio int(1),
    CONSTRAINT PK_Detalle_Servicio PRIMARY KEY (Cod_Servicio,Cod_Estadia,Cod_Habitacion),
    CONSTRAINT FK_Servicio_Detalle_Servicio FOREIGN KEY (Cod_Servicio) REFERENCES Servicio (Cod_Servicio),
    CONSTRAINT FK_Habitacion_Estadia_Detalle_Servicio FOREIGN KEY (Cod_Estadia,Cod_Habitacion) REFERENCES Habitacion_Estadia (Cod_Estadia,Cod_Habitacion)
)
;
CREATE PROCEDURE PA_Buscar_Detalle_Servicio()			
	SELECT * 
	FROM Habitacion_Estadia,Persona,Estadia,Habitacion
	WHERE	Habitacion_Estadia.Cod_Persona = Persona.Cod_Persona AND
			Habitacion_Estadia.Cod_Estadia  = Estadia.Cod_Estadia AND
			Habitacion_Estadia.Cod_Habitacion = Habitacion.Cod_Habitacion AND
            Estado_Habitacion_Estadia = 1
;
CREATE PROCEDURE PA_Buscar_Detalle_Servicio_Codigo(
    IN Cod_Servicio int,
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int
)			
	SELECT * 
	FROM Habitacion_Estadia,Persona,Estadia,Habitacion
	WHERE	Habitacion_Estadia.Cod_Persona = Persona.Cod_Persona AND
			Habitacion_Estadia.Cod_Estadia  = Estadia.Cod_Estadia AND
			Habitacion_Estadia.Cod_Habitacion = Habitacion.Cod_Habitacion AND
            Cod_Servicio = Cod_Servicio_ AND Cod_Estadia = Cod_Estadia_ AND Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Ingresar_Detalle_Servicio (
    IN Cod_Servicio_ int,
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int,
    IN Cantidad_Detalle_Servicio_ int,
    IN Precio_Detalle_Servicio_ decimal(14,2) 
)
	INSERT INTO Detalle_Servicio (Cod_Servicio,Cod_Estadia,Cod_Habitacion,Cantidad_Detalle_Servicio,Precio_Detalle_Servicio,Estado_Detalle_Servicio) 
	VALUES (Cod_Servicio_,Cod_Estadia_,Cod_Habitacion_,Cantidad_Detalle_Servicio_,Precio_Detalle_Servicio_,1)
;
CREATE PROCEDURE PA_Modificar_Detalle_Servicio (
    IN Cod_Servicio_ int,
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int,
    IN Cantidad_Detalle_Servicio_ int,
    IN Precio_Detalle_Servicio_ decimal(14,2) 
)
	UPDATE Detalle_Servicio
	SET	Cod_Servicio = Cod_Servicio_, Cod_Estadia = Cod_Estadia_, Cod_Habitacion = Cod_Habitacion_, Cantidad_Detalle_Servicio = Cantidad_Detalle_Servicio_, Precio_Detalle_Servicio = Precio_Detalle_Servicio_
	WHERE Cod_Servicio = Cod_Servicio_ AND Cod_Estadia = Cod_Estadia_ AND Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Eliminar_Detalle_Servicio (
    IN Cod_Servicio int,
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int
)
	UPDATE Detalle_Servicio
	SET Estado_Detalle_Servicio = 0
	WHERE Cod_Servicio = Cod_Servicio_ AND Cod_Estadia = Cod_Estadia_ AND Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Activar_Detalle_Servicio (
    IN Cod_Servicio int,
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int
)
	UPDATE Detalle_Servicio
	SET Estado_Detalle_Servicio = 1
	WHERE Cod_Servicio = Cod_Servicio_ AND Cod_Estadia = Cod_Estadia_ AND Cod_Habitacion = Cod_Habitacion_
;
CREATE PROCEDURE PA_Suprimir_Detalle_Servicio (
    IN Cod_Servicio int,
    IN Cod_Estadia_ int,
    IN Cod_Habitacion_ int
)
	DELETE FROM Detalle_Servicio
	WHERE Cod_Servicio = Cod_Servicio_ AND Cod_Estadia = Cod_Estadia_ AND Cod_Habitacion = Cod_Habitacion_
;
CREATE TABLE Cronograma_Estadia (
    Cod_Cronograma_Estadia int AUTO_INCREMENT,
    Cod_Estadia int,
    Fecha_Cronograma_Estadia datetime,
    Cuota_Cronograma_Estadia int,
    Monto_Cronograma_Estadia decimal(14,2),
    Estado_Cronograma_Estadia int(1),
    CONSTRAINT PK_Cronograma_Estadia PRIMARY KEY (Cod_Cronograma_Estadia),
    CONSTRAINT FK_Estadia_Cronograma_Estadia FOREIGN KEY (Cod_Estadia) REFERENCES Estadia (Cod_Estadia)
)
;
CREATE PROCEDURE PA_Buscar_Cronograma_Estadia()	
	SELECT * 
	FROM Cronograma_Estadia,Estadia
	WHERE Cronograma_Estadia.Cod_Estadia = Estadia.Cod_Estadia AND Estado_Cronograma_Estadia = 1
;
CREATE PROCEDURE PA_Buscar_Cronograma_Estadia_Codigo(
    Cod_Cronograma_Estadia_ int
)	
	SELECT * 
	FROM Cronograma_Estadia,Estadia
	WHERE Cronograma_Estadia.Cod_Estadia = Estadia.Cod_Estadia AND Cod_Cronograma_Estadia = Cod_Cronograma_Estadia_
;
CREATE PROCEDURE PA_Ingresar_Cronograma_Estadia (
    IN Cod_Estadia_ int,
    IN Fecha_Cronograma_Estadia_ datetime,
    IN Cuota_Cronograma_Estadia_ int,
    IN Monto_Cronograma_Estadia_ decimal(14,2)
)
	INSERT INTO Cronograma_Estadia (Cod_Cronograma_Estadia,Cod_Estadia,Fecha_Cronograma_Estadia,Cuota_Cronograma_Estadia,Monto_Cronograma_Estadia,Estado_Cronograma_Estadia) 
	VALUES (NULL,Cod_Estadia_,Fecha_Cronograma_Estadia_,Cuota_Cronograma_Estadia_,Monto_Cronograma_Estadia_,1) 
;
CREATE PROCEDURE PA_Modificar_Cronograma_Estadia (
    IN Cod_Cronograma_Estadia_ int,
    IN Cod_Estadia_ int,
    IN Fecha_Cronograma_Estadia_ datetime,
    IN Cuota_Cronograma_Estadia_ int,
    IN Monto_Cronograma_Estadia_ decimal(14,2)
)
	UPDATE Cronograma_Estadia
	SET	Cod_Estadia = Cod_Estadia_,Fecha_Cronograma_Estadia = Fecha_Cronograma_Estadia_,Cuota_Cronograma_Estadia = Cuota_Cronograma_Estadia_,Monto_Cronograma_Estadia = Monto_Cronograma_Estadia_
	WHERE Cod_Cronograma_Estadia = Cod_Cronograma_Estadia_
;
CREATE PROCEDURE PA_Eliminar_Cronograma_Estadia (
    IN Cod_Cronograma_Estadia_ int
)
	UPDATE Cronograma_Estadia
	SET Estado_Cronograma_Estadia = 0
	WHERE Cod_Cronograma_Estadia = Cod_Cronograma_Estadia_
;
CREATE PROCEDURE PA_Activar_Cronograma_Estadia (
    IN Cod_Cronograma_Estadia_ int
)
	UPDATE Cronograma_Estadia
	SET Estado_Cronograma_Estadia = 1
	WHERE Cod_Cronograma_Estadia = Cod_Cronograma_Estadia_
;
CREATE PROCEDURE PA_Suprimir_Cronograma_Estadia (
    IN Cod_Cronograma_Estadia_ int
)
	DELETE FROM Cronograma_Estadia
	WHERE Cod_Cronograma_Estadia = Cod_Cronograma_Estadia_
;
CREATE TABLE Caja (
    Cod_Caja int AUTO_INCREMENT,
    Nro_Caja int,
    Descripcion_Caja varchar(255),
    Estado_Caja int(1),
    CONSTRAINT PK_Caja PRIMARY KEY (Cod_Caja)
)
;
CREATE PROCEDURE PA_Buscar_Caja()
	SELECT * 
	FROM Caja
    WHERE Estado_Caja = 1
;
CREATE PROCEDURE PA_Buscar_Caja_Codigo(
    IN Cod_Caja_ int
)
	SELECT * 
	FROM Caja
    WHERE Cod_Caja = Cod_Caja_
;
CREATE PROCEDURE PA_Ingresar_Caja (
    IN Nro_Caja_ int,
    IN Descripcion_Caja_ varchar(255) 
)
	INSERT INTO Caja (Cod_Caja,Nro_Caja,Descripcion,Estado) 
	VALUES (NULL,Nro_Caja_,Descripcion_Caja_,1) 
;
CREATE PROCEDURE PA_Modificar_Caja (
    IN Cod_Caja_ int,
    IN Nro_Caja_ int,
    IN Descripcion_Caja_ varchar(255) 
)
	UPDATE Caja
	SET	Nro_Caja = Nro_Caja_,Descripcion_Caja = Descripcion_Caja_
	WHERE Cod_Caja = Cod_Caja_
;
CREATE PROCEDURE PA_Eliminar_Caja (
    IN Cod_Caja_ int
)
	UPDATE Caja
	SET Estado_Caja = 0
	WHERE Cod_Caja = Cod_Caja_
;
CREATE PROCEDURE PA_Activar_Caja (
    IN Cod_Caja_ int
)
	UPDATE Caja
	SET Estado_Caja = 1
	WHERE Cod_Caja = Cod_Caja_
;
CREATE PROCEDURE PA_Suprimir_Caja (
    IN Cod_Caja_ int
)
	DELETE FROM Caja
	WHERE Cod_Caja = Cod_Caja_
;
CREATE TABLE Caja_Persona (
    Cod_Caja int,
    Cod_Persona int,
    Fecha_Inicio_Caja_Persona date,
    Fecha_Fin_Caja_Persona date,
    Estado_Caja_Persona int(1),
    CONSTRAINT PK_Caja_Persona PRIMARY KEY (Cod_Caja,Cod_Persona,Fecha_Inicio_Caja_Persona),
    CONSTRAINT FK_Caja_Caja_Persona FOREIGN KEY (Cod_Caja) REFERENCES Caja (Cod_Caja),
    CONSTRAINT FK_Persona_Caja_Pesona FOREIGN KEY (Cod_Persona) REFERENCES Persona (Cod_Persona)
)
;
CREATE PROCEDURE PA_Buscar_Caja_Persona()
	SELECT * 
	FROM Caja_Persona,Caja,Persona
	WHERE	Caja_Persona.Cod_Caja = Caja.Cod_Caja AND
			Caja_Persona.Cod_Persona = Persona.Cod_Persona AND
            Estado_Caja_Persona = 1
;
CREATE PROCEDURE PA_Buscar_Caja_Persona_Codigo(
    IN Cod_Caja_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_Caja_Persona_ date
)
	SELECT * 
	FROM Caja_Persona,Caja,Persona
	WHERE	Caja_Persona.Cod_Caja = Caja.Cod_Caja AND
			Caja_Persona.Cod_Persona = Persona.Cod_Persona AND
            Cod_Caja = Cod_Caja_ AND Cod_Persona = Cod_Persona_ AND Fecha_Inicio_Caja_Persona = Fecha_Inicio_Caja_Persona_
;
CREATE PROCEDURE PA_Ingresar_Caja_Persona (
    IN Cod_Caja_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_Caja_Persona_ date,
    IN Fecha_Fin_Caja_Persona_ date 
)
	INSERT INTO Caja_Persona (Cod_Caja,Cod_Persona,Fecha_Inicio_Caja_Persona,Fecha_Fin_Caja_Persona,Estado_Caja_Persona) 
	VALUES (Cod_Caja_,Cod_Persona_,Fecha_Inicio_Caja_Persona_,Fecha_Fin_Caja_Persona_,1)
;
CREATE PROCEDURE PA_Modificar_Caja_Persona (
    IN Cod_Caja_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_Caja_Persona_ date,
    IN Fecha_Fin_Caja_Persona_ date
)
	UPDATE Caja_Persona
	SET	Cod_Caja = Cod_Caja_,Cod_Persona = Cod_Persona_,Fecha_Inicio_Caja_Persona = Fecha_Inicio_Caja_Persona_,Fecha_Fin_Caja_Persona = Fecha_Fin_Caja_Persona_
	WHERE Cod_Caja = Cod_Caja_ AND Cod_Persona = Cod_Persona_ AND Fecha_Inicio_Caja_Persona = Fecha_Inicio_Caja_Persona_
;
CREATE PROCEDURE PA_Eliminar_Caja_Persona (
    IN Cod_Caja_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_ date
)
	UPDATE Caja_Persona
	SET Estado_Caja_Persona = 0
	WHERE Cod_Caja = Cod_Caja_ AND Cod_Persona = Cod_Persona_ AND Fecha_Inicio_Caja_Persona = Fecha_Inicio_Caja_Persona_
;
CREATE PROCEDURE PA_Activar_Caja_Persona (
    IN Cod_Caja_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_ date
)
	UPDATE Caja_Persona
	SET Estado_Caja_Persona = 1
	WHERE Cod_Caja = Cod_Caja_ AND Cod_Persona = Cod_Persona_ AND Fecha_Inicio_Caja_Persona = Fecha_Inicio_Caja_Persona_
;
CREATE PROCEDURE PA_Suprimir_Caja_Persona (
    IN Cod_Caja_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_Caja_Persona_ date
)
	DELETE FROM Caja_Persona
	WHERE Cod_Caja = Cod_Caja_ AND Cod_Persona = Cod_Persona_ AND Fecha_Inicio_Caja_Persona = Fecha_Inicio_Caja_Persona_
;
CREATE TABLE Forma_Pago (
    Cod_Forma_Pago int AUTO_INCREMENT,
    Foma_Pago varchar(50),
    Descripcion_Forma_Pago varchar(255),
    Estado_Forma_Pago int(1),
    CONSTRAINT PK_Forma_Pago PRIMARY KEY (Cod_Forma_Pago)
)
;
CREATE PROCEDURE PA_Buscar_Forma_Pago()		
	SELECT * 
	FROM Forma_Pago
    WHERE Estado_Forma_Pago = 1
;
CREATE PROCEDURE PA_Buscar_Forma_Pago_Codigo(
    IN Cod_Forma_Pago_ int
)		
	SELECT * 
	FROM Forma_Pago
    WHERE Cod_Forma_Pago = Cod_Forma_Pago_
;
CREATE PROCEDURE PA_Ingresar_Forma_Pago (
    IN Foma_Pago_ varchar(50),
    IN Descripcion_Forma_Pago_ varchar(255) 
)
	INSERT INTO Forma_Pago (Cod_Forma_Pago,Forma_Pago,Descripcion_Forma_Pago,Estado_Forma_Pago) 
	VALUES (NULL,Forma_Pago_,Descripcion_Forma_Pago_,1)
;
CREATE PROCEDURE PA_Modificar_Forma_Pago (
    IN Cod_Forma_Pago_ int,
    IN Foma_Pago_ varchar(50),
    IN Descripcion_Forma_Pago_ varchar(255) 
)
	UPDATE Forma_Pago
	SET Forma_Pago = Forma_Pago_, Descripcion_Forma_Pago = Descripcion_Forma_Pago_
	WHERE Cod_Forma_Pago = Cod_Forma_Pago_
;
CREATE PROCEDURE PA_Eliminar_Forma_Pago (
    IN Cod_Forma_Pago_ int
)
	UPDATE Forma_Pago
	SET Estado_Forma_Pago = 0
	WHERE Cod_Forma_Pago = Cod_Forma_Pago_
;
CREATE PROCEDURE PA_Activar_Forma_Pago (
    IN Cod_Forma_Pago_ int
)
	UPDATE Forma_Pago
	SET Estado_Forma_Pago = 1
	WHERE Cod_Forma_Pago = Cod_Forma_Pago_
;
CREATE PROCEDURE PA_Suprimir_Forma_Pago (
    IN Cod_Forma_Pago_ int
)
	DELETE FROM Forma_Pago
	WHERE Cod_Forma_Pago = Cod_Forma_Pago_
;
CREATE TABLE Tipo_Documento (
    Cod_Tipo_Documento int AUTO_INCREMENT,
    Descripcion_Tipo_Documento varchar(255),
    Estado_Tipo_Documento int(1),
    CONSTRAINT PK_Tipo_Documento PRIMARY KEY (Cod_Tipo_Documento)
)
;
CREATE PROCEDURE PA_Buscar_Tipo_Documento()			
	SELECT * 
	FROM Tipo_Documento
    WHERE Estado_Tipo_Documento = 1
;
CREATE PROCEDURE PA_Buscar_Tipo_Documento_Codigo(
    IN Cod_Tipo_Documento_ int
)			
	SELECT * 
	FROM Tipo_Documento
    WHERE Cod_Tipo_Documento = Cod_Tipo_Documento_
;
CREATE PROCEDURE PA_Ingresar_Tipo_Documento (
    IN Descripcion_Tipo_Documento_ varchar(50)
)
	INSERT INTO Tipo_Documento (Cod_Tipo_Documento,Descripcion_Tipo_Documento,Estado_Tipo_Documento) 
	VALUES (NULL,Descripcion_Tipo_Documento_,1)
;
CREATE PROCEDURE PA_Modificar_Tipo_Documento (
    IN Cod_Tipo_Documento_ int,
    IN Descripcion_ varchar(50)
)
	UPDATE Tipo_Documento
	SET Descripcion_Tipo_Documento = Descripcion_Tipo_Documento_
	WHERE Cod_Tipo_Documento = Cod_Tipo_Documento_
;
CREATE PROCEDURE PA_Eliminar_Tipo_Documento (
    IN Cod_Tipo_Documento_ int
)
	UPDATE Tipo_Documento
	SET Estado_Tipo_Documento = 0
	WHERE Cod_Tipo_Documento = Cod_Tipo_Documento_
;
CREATE PROCEDURE PA_Activar_Tipo_Documento (
    IN Cod_Tipo_Documento_ int
)
	UPDATE Tipo_Documento
	SET Estado_Tipo_Documento = 1
	WHERE Cod_Tipo_Documento = Cod_Tipo_Documento_
;
CREATE PROCEDURE PA_Suprimir_Tipo_Documento (
    IN Cod_Tipo_Documento_ int
)
	DELETE FROM Tipo_Documento
	WHERE Cod_Tipo_Documento = Cod_Tipo_Documento_
;
CREATE TABLE Tipo_Movimiento (
    Cod_Tipo_Movimiento int AUTO_INCREMENT,
    Tipo_Movimiento varchar(20),
    Estado_Tipo_Movimiento int(1),
    CONSTRAINT PK_Tipo_Movimiento PRIMARY KEY (Cod_Tipo_Movimiento)
)
;
CREATE PROCEDURE PA_Buscar_Tipo_Movimiento()			
	SELECT * 
	FROM Tipo_Movimiento
    WHERE Estado_Tipo_Movimiento = 1
;
CREATE PROCEDURE PA_Buscar_Tipo_Movimiento_Codigo(
    Cod_Tipo_Movimiento_ int
)			
	SELECT * 
	FROM Tipo_Movimiento
    WHERE Cod_Tipo_Movimiento = Cod_Tipo_Movimiento_
;
CREATE PROCEDURE PA_Ingresar_Tipo_Movimiento (
    IN Tipo_Movimiento_ varchar(50)	  
)
	INSERT INTO Tipo_Movimiento (Cod_Tipo_Movimiento,Tipo_Movimiento,Estado_Tipo_Movimiento) 
	VALUES (NULL,Tipo_Movimiento_,1)
;
CREATE PROCEDURE PA_Modificar_Tipo_Movimiento (
    IN Cod_Tipo_Movimiento_ int,
    IN Tipo_Movimiento_ varchar(50)	  
)
	UPDATE Tipo_Movimiento
	SET Tipo_Movimiento = Tipo_Movimiento_
	WHERE Cod_Tipo_Movimiento = Cod_Tipo_Movimiento_
;
CREATE PROCEDURE PA_Eliminar_Tipo_Movimiento (
    IN Cod_Tipo_Movimiento_ int
)
	UPDATE Tipo_Movimiento
	SET Estado_Tipo_Movimiento = 0
	WHERE Cod_Tipo_Movimiento = Cod_Tipo_Movimiento_
;
CREATE PROCEDURE PA_Activar_Tipo_Movimiento (
    IN Cod_Tipo_Movimiento_ int
)
	UPDATE Tipo_Movimiento
	SET Estado_Tipo_Movimiento = 1
	WHERE Cod_Tipo_Movimiento = Cod_Tipo_Movimiento_
;
CREATE PROCEDURE PA_Suprimir_Tipo_Movimiento (
    IN Cod_Tipo_Movimiento_ int
)
	DELETE FROM Tipo_Movimiento
	WHERE Cod_Tipo_Movimiento = Cod_Tipo_Movimiento_
;
CREATE TABLE Concepto_Movimiento (
    Cod_Concepto_Movimiento int AUTO_INCREMENT,
    Cod_Tipo_Movimiento int,
    Concepto_Movimiento varchar(255),
    Estado_Concepto_Movimiento int(1),
    CONSTRAINT PK_Concepto_Movimiento PRIMARY KEY (Cod_Concepto_Movimiento),
    CONSTRAINT FK_Tipo_Movimiento_Concepto_Movimiento FOREIGN KEY (Cod_Tipo_Movimiento) REFERENCES Tipo_Movimiento (Cod_Tipo_Movimiento)
)
;
CREATE PROCEDURE PA_Buscar_Concepto_Movimiento()			
	SELECT * 
	FROM Concepto_Movimiento,Tipo_Movimiento
	WHERE Concepto_Movimiento.Cod_Tipo_Movimiento = Tipo_Movimiento.Cod_Tipo_Movimiento AND
            Estado_Concepto_Movimiento = 1
;
CREATE PROCEDURE PA_Buscar_Concepto_Movimiento_Codigo(
    IN Cod_Concepto_Movimiento_ int
)			
	SELECT * 
	FROM Concepto_Movimiento,Tipo_Movimiento
	WHERE Concepto_Movimiento.Cod_Tipo_Movimiento = Tipo_Movimiento.Cod_Tipo_Movimiento AND
        Cod_Concepto_Movimiento = Cod_Concepto_Movimiento_
;
CREATE PROCEDURE PA_Ingresar_Concepto_Movimiento (
    IN Cod_Tipo_Movimiento_ int,
    IN Concepto_Movimiento_ varchar(50)  
)
	INSERT INTO Concepto_Movimiento (Cod_Concepto_Movimiento,Cod_Tipo_Movimiento,Concepto_Movimiento,Estado_Concepto_Movimiento) 
	VALUES (NULL,Cod_Tipo_Movimiento_,Concepto_Movimiento_,1) 
;
CREATE PROCEDURE PA_Modificar_Concepto_Movimiento (
    IN Cod_Concepto_Movimiento_ int,
    IN Cod_Tipo_Movimiento_ int,
    IN Concepto_Movimiento_ varchar(50)  
)
	UPDATE Concepto_Movimiento
	SET Cod_Tipo_Movimiento = Cod_Tipo_Movimiento_, Concepto_Movimiento = Concepto_Movimiento_
	WHERE Cod_Concepto_Movimiento = Cod_Concepto_Movimiento_
;
CREATE PROCEDURE PA_Eliminar_Concepto_Movimiento (
    IN Cod_Concepto_Movimiento_ int
)
	UPDATE Concepto_Movimiento
	SET Estado_Concepto_Movimiento = 0
	WHERE Cod_Concepto_Movimiento = Cod_Concepto_Movimiento_
;
CREATE PROCEDURE PA_Activar_Concepto_Movimiento (
    IN Cod_Concepto_Movimiento_ int
)
	UPDATE Concepto_Movimiento
	SET Estado_Concepto_Movimiento = 1
	WHERE Cod_Concepto_Movimiento = Cod_Concepto_Movimiento_
;
CREATE PROCEDURE PA_Suprimir_Concepto_Movimiento (
    IN Cod_Concepto_Movimiento_ int
)
	DELETE FROM Concepto_Movimiento
	WHERE Cod_Concepto_Movimiento = Cod_Concepto_Movimiento_
;
CREATE TABLE Tipo_Sis (
    Cod_Tipo_Sis int AUTO_INCREMENT,
    Tipo_Sis varchar(50),
    Estado_Tipo_Sis int(1),
    CONSTRAINT PK_Tipo_Sis PRIMARY KEY (Cod_Tipo_Sis)
)
;
CREATE PROCEDURE PA_Buscar_Tipo_Sis()			
	SELECT * 
	FROM Tipo_Sis
    WHERE Estado_Tipo_Sis = 1
;
CREATE PROCEDURE PA_Ingresar_Tipo_Sis (
    IN Tipo_Sis_ varchar(50)  
)
	INSERT INTO Tipo_Sis (Cod_Tipo_Sis,Tipo_Sis,Estado_Tipo_Sis) 
	VALUES (NULL,Tipo_Sis_,1) 
;
CREATE PROCEDURE PA_Modificar_Tipo_Sis (
    IN Cod_Tipo_Sis_ int,
    IN Tipo_Sis_ varchar(50) 
)
	UPDATE Tipo_Sis
	SET Tipo_Sis = Tipo_Sis_
	WHERE Cod_Tipo_Sis = Cod_Tipo_Sis_
;
CREATE PROCEDURE PA_Eliminar_Tipo_Sis (
    IN Cod_Tipo_Sis_ int
)
	UPDATE Tipo_Sis
	SET Estado_Tipo_Sis = 0
	WHERE Cod_Tipo_Sis = Cod_Tipo_Sis_
;
CREATE PROCEDURE PA_Activar_Tipo_Sis (
    IN Cod_Tipo_Sis_ int
)
	UPDATE Tipo_Sis
	SET Estado_Tipo_Sis = 1
	WHERE Cod_Tipo_Sis = Cod_Tipo_Sis_
;
CREATE PROCEDURE PA_Suprimir_Tipo_Sis (
    IN Cod_Tipo_Sis_ int
)
	DELETE FROM Tipo_Sis
	WHERE Cod_Tipo_Sis = Cod_Tipo_Sis_
;
CREATE TABLE Movimiento (
    Cod_Movimiento int AUTO_INCREMENT,
    Cod_Concepto_Movimiento int,
    Cod_Forma_Pago int,
    Cod_Tipo_Documento int,
    Cod_Caja int,
    Cod_Persona int,
    Fecha_Inicio_Caja_Persona date,
    Cod_Tipo_Sis int,
    Ruc_Movimiento char(11),
    Nro_Serie_Movimiento char(4),
    Nro_Comprobante_Movimiento char(8),
    Monto_Movimiento decimal(14,2),
    Fecha_Movimiento datetime,
    Estado_Movimiento int(1),
    CONSTRAINT PK_Movimiento PRIMARY KEY (Cod_Movimiento),
    CONSTRAINT FK_Concepto_Movimiento_Movimiento FOREIGN KEY (Cod_Concepto_Movimiento) REFERENCES Concepto_Movimiento (Cod_Concepto_Movimiento),
    CONSTRAINT FK_Forma_Pago_Movimiento FOREIGN KEY (Cod_Forma_Pago) REFERENCES Forma_Pago (Cod_Forma_Pago),
    CONSTRAINT FK_Tipo_Documento_Movimiento FOREIGN KEY (Cod_Tipo_Documento) REFERENCES Tipo_Documento (Cod_Tipo_Documento),
    CONSTRAINT FK_Caja_Persona_Movimiento FOREIGN KEY (Cod_Caja,Cod_Persona,Fecha_Inicio_Caja_Persona) REFERENCES Caja_Persona (Cod_Caja,Cod_Persona,Fecha_Inicio_Caja_Persona),
    CONSTRAINT FK_Tipo_Sis FOREIGN KEY (Cod_Tipo_Sis) REFERENCES Tipo_Sis (Cod_Tipo_Sis)
)
;
CREATE PROCEDURE PA_Buscar_Movimiento()			
	SELECT * 
	FROM Movimiento,Concepto_Movimiento,Forma_Pago,Tipo_Documento,Caja,Persona,Caja_Persona,Tipo_Sis
	WHERE	Movimiento.Cod_Concepto_Movimiento = Concepto_Movimiento.Cod_Concepto_Movimiento AND
			Movimiento.Cod_Forma_Pago = Forma_Pago.Cod_Forma_Pago AND
			Movimiento.Cod_Tipo_Documento = Tipo_Documento.Cod_Tipo_Documento AND
			Caja.Cod_Caja = Caja_Persona.Cod_Caja AND
			Persona.Cod_Persona = Caja_Persona.Cod_Persona AND
			Movimiento.Cod_Caja = Caja_Persona.Cod_Caja AND
			Movimiento.Cod_Persona = Caja_Persona.Cod_Persona AND
			Movimiento.Fecha_Inicio_Caja_Persona = Caja_Persona.Fecha_Inicio_Caja_Persona AND
			Movimiento.Cod_Tipo_Sis = Tipo_Sis.Cod_Tipo_Sis AND
            Estado_Movimiento = 1
;
CREATE PROCEDURE PA_Ingresar_Movimiento (
    IN Cod_Concepto_Movimiento_ int,
    IN Cod_Forma_Pago_ int,
    IN Cod_Tipo_Documento_ int,
    IN Cod_Caja_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_Caja_Persona_ date,
    IN Cod_Tipo_Sis_ int,
    IN Ruc_Movimiento_ char(11),
    IN Nro_Serie_Movimiento_ char(4),
    IN Nro_Comprobante_Movimiento char(8),
    IN Monto_Movimiento_ decimal(14,2),
    IN Fecha_Movimiento_ datetime	  
)
	INSERT INTO Movimiento (Cod_Movimiento,Cod_Concepto_Movimiento,Cod_Forma_Pago,Cod_Tipo_Documento,Cod_Caja,Cod_Persona,Fecha_Inicio_Caja_Persona,Cod_Tipo_Sis,Ruc_Movimiento,Nro_Serie_Movimiento,Nro_Comprobante_Movimiento,Monto_Movimiento,Fecha_Movimiento,Estado_Movimiento) 
	VALUES (NULL,Cod_Concepto_Movimiento_,Cod_Forma_Pago_,Cod_Tipo_Documento_,Cod_Caja_,Cod_Persona_,Fecha_Inicio_Caja_Persona_,Cod_Tipo_Sis_,Ruc_Movimiento_,Nro_Serie_Movimiento_,Nro_Comprobante_Movimiento_,Monto_Movimiento_,Fecha_Movimiento_,1)
;
CREATE PROCEDURE PA_Modificar_Movimiento (
    IN Cod_Movimiento_ int,
    IN Cod_Concepto_Movimiento_ int,
    IN Cod_Forma_Pago_ int,
    IN Cod_Tipo_Documento_ int,
    IN Cod_Caja_ int,
    IN Cod_Persona_ int,
    IN Fecha_Inicio_Caja_Persona_ date,
    IN Cod_Tipo_Sis_ int,
    IN Ruc_Movimiento_ char(11),
    IN Nro_Serie_Movimiento_ char(4),
    IN Nro_Comprobante_Movimiento char(8),
    IN Monto_Movimiento_ decimal(14,2),
    IN Fecha_Movimiento_ datetime	  
)
	UPDATE Movimiento
	SET Cod_Concepto_Movimiento = Cod_Concepto_Movimiento_,Cod_Forma_Pago = Cod_Forma_Pago_,Cod_Tipo_Documento = Cod_Tipo_Documento_,
		Cod_Caja = Cod_Caja_,Cod_Persona = Cod_Persona_,Fecha_Inicio_Caja_Persona = Fecha_Inicio_Caja_Persona_,Cod_Tipo_Sis = Cod_Tipo_Sis_,Ruc_Movimiento = Ruc_Movimiento_, Nro_Serie_Movimiento = Nro_Serie_Movimiento_, Nro_Comprobante_Movimiento = Nro_Comprobante_Movimiento_, Monto_Movimiento = Monto_Movimiento_,Fecha_Movimiento = Fecha_Movimiento_
	WHERE Cod_Movimiento = Cod_Movimiento_
;
CREATE PROCEDURE PA_Eliminar_Movimiento (
    IN Cod_Movimiento_ int
)
	UPDATE Movimiento
	SET Estado_Movimiento = 0
	WHERE Cod_Movimiento = Cod_Movimiento_
;
CREATE PROCEDURE PA_Activar_Movimiento (
    IN Cod_Movimiento_ int
)
	UPDATE Movimiento
	SET Estado_Movimiento = 1
	WHERE Cod_Movimiento = Cod_Movimiento_
;
CREATE PROCEDURE PA_Suprimir_Movimiento (
    IN Cod_Movimiento_ int
)
	DELETE FROM Movimiento
	WHERE Cod_Movimiento = Cod_Movimiento_
;
CREATE TABLE Detalle_Cronograma_Movimiento (
    Cod_Cronograma_Estadia int,
    Cod_Movimiento int,
    Monto_DCM decimal(14,2),
    CONSTRAINT PK_Detalle_Cronograma_Movimiento PRIMARY KEY (Cod_Cronograma_Estadia,Cod_Movimiento),
    CONSTRAINT FK_Cronograma_Estadia_Detalle_Cronograma_Movimiento FOREIGN KEY (Cod_Cronograma_Estadia) REFERENCES Cronograma_Estadia (Cod_Cronograma_Estadia),
    CONSTRAINT FK_Movimientos_Detalle_Cronograma_Movimiento FOREIGN KEY (Cod_Movimiento) REFERENCES Movimiento (Cod_Movimiento)
)
;
CREATE TABLE Ventas (
    Cod_Venta int AUTO_INCREMENT,
    Cod_Cliente int,
    Cod_Empleado int,
    Cod_Tipo_Transaccion int,
    Fecha_Venta datetime,
    Utilidad_Venta decimal(14,2),
    Detalle_Venta varchar(255),
    Estado_Venta int(1),
    CONSTRAINT PK_Ventas  PRIMARY KEY (Cod_Venta),
    CONSTRAINT FK_Persona_Ventas_1 FOREIGN KEY (Cod_Cliente) REFERENCES Persona (Cod_Persona),
    CONSTRAINT FK_Persona_Ventas_2 FOREIGN KEY (Cod_Empleado) REFERENCES Persona (Cod_Persona),
    CONSTRAINT FK_Tipo_Transaccion_Ventas  FOREIGN KEY (Cod_Tipo_Transaccion) REFERENCES Tipo_Transaccion (Cod_Tipo_Transaccion)
)
;
CREATE PROCEDURE PA_Buscar_Ventas()		
	SELECT * 
	FROM Ventas,Persona,Tipo_Transaccion
	WHERE	Ventas.Cod_Cliente = Persona.Cod_Persona AND
			Ventas.Cod_Empleado = Persona.Cod_Persona AND
			Ventas.Cod_Tipo_Transaccion = Tipo_Transaccion.Cod_Tipo_Transaccion AND
            Estado_Venta = 1
;
CREATE PROCEDURE PA_Buscar_Ventas_Codigo(
    IN Cod_Venta_ int
)		
	SELECT * 
	FROM Ventas,Persona,Tipo_Transaccion
	WHERE	Ventas.Cod_Cliente = Persona.Cod_Persona AND
			Ventas.Cod_Empleado = Persona.Cod_Persona AND
			Ventas.Cod_Tipo_Transaccion = Tipo_Transaccion.Cod_Tipo_Transaccion AND Cod_Venta = Cod_Venta_
;
CREATE PROCEDURE PA_Ingresar_Venta (
    IN Cod_Cliente_ int,
    IN Cod_Empleado_ int,
    IN Cod_Tipo_Transaccion_ int,
    IN Fecha_Venta_ datetime,
    IN Utilidad_Venta_ decimal(14,2),
    IN Detalle_Venta_ varchar(255)
)
	INSERT INTO Ventas (Cod_Venta,Cod_Cliente,Cod_Empleado,Cod_Tipo_Transaccion,Fecha_Venta,Utilidad_Venta,Detalle_Venta,Estado_Venta) 
	VALUES (NULL,Cod_Cliente_,Cod_Empleado_,Cod_Tipo_Transaccion_,Fecha_Venta_,Utilidad_Venta_,Detalle_Venta_,1)
;
CREATE PROCEDURE PA_Modificar_Venta (
    IN Cod_Venta_ int,
    IN Cod_Cliente_ int,
    IN Cod_Empleado_ int,
    IN Cod_Tipo_Transaccion_ int,
    IN Fecha_Venta_ datetime,
    IN Utilidad_Venta_ decimal(14,2),
    IN Detalle_Venta_ varchar(255)
)
	UPDATE Ventas 
	SET Cod_Cliente = Cod_Cliente_,Cod_Empleado = Cod_Empleado_,Cod_Tipo_Transaccion = Cod_Tipo_Transaccion_,
		Fecha_Venta = Fecha_Venta_,Utilidad_Venta = Utilidad_Venta_,Detalle_Venta = Detalle_Venta_
	WHERE Cod_Venta = Cod_Venta_
;
CREATE PROCEDURE PA_Eliminar_Venta (
    IN Cod_Venta_ int
)
	UPDATE Ventas
	SET Estado_Venta = 0
	WHERE Cod_Venta = Cod_Venta_
;
CREATE PROCEDURE PA_Activar_Venta (
    IN Cod_Venta_ int
)
	UPDATE Ventas
	SET Estado_Venta = 1
	WHERE Cod_Venta = Cod_Venta_
;
CREATE PROCEDURE PA_Suprimir_Ventas (
    IN Cod_Venta_ int
)
	DELETE FROM Ventas 
	WHERE Cod_Venta = Cod_Venta_
;
CREATE TABLE Tipo_Producto (
    Cod_Tipo_Producto int AUTO_INCREMENT,
    Tipo_Producto varchar(50),
    Descripcion_Tipo_Producto varchar(255),
    Estado_Tipo_Producto int(1),
    CONSTRAINT PK_Tipo_Producto PRIMARY KEY (Cod_Tipo_Producto)
)
;
CREATE PROCEDURE PA_Buscar_Tipo_Producto()
	SELECT * 
	FROM Tipo_Producto
    WHERE Estado_Tipo_Producto = 1
;
CREATE PROCEDURE PA_Buscar_Tipo_Producto_Codigo(
    IN Cod_Tipo_Producto_ int
)
	SELECT * 
	FROM Tipo_Producto
    WHERE Cod_Tipo_Producto = Cod_Tipo_Producto_
;
CREATE PROCEDURE PA_Ingresar_Tipo_Producto (
    IN Tipo_Producto_ varchar(50),
    IN Descripcion_Tipo_Producto_ varchar(255) 
)
	INSERT INTO Tipo_Producto (Cod_Tipo_Producto,Tipo_Producto,Descripcion_Tipo_Producto,Estado_Tipo_Producto) 
	VALUES (NULL,Tipo_Producto_,Descripcion_Tipo_Producto_,1)
;
CREATE PROCEDURE PA_Modificar_Tipo_Producto (
    IN Cod_Tipo_Producto_ int,
    IN Tipo_Producto_ varchar(50),
    IN Descripcion_Tipo_Producto_ varchar(255)	 
)
	UPDATE Tipo_Producto
	SET Tipo_Producto = Tipo_Producto_, Descripcion_Tipo_Producto = Descripcion_Tipo_Producto
	WHERE Cod_Tipo_Producto = Cod_Tipo_Producto_
;
CREATE PROCEDURE PA_Eliminar_Tipo_Producto (
    IN Cod_Tipo_Producto_ int
)
	UPDATE Tipo_Producto
	SET Estado_Tipo_Producto = 0
	WHERE Cod_Tipo_Producto = Cod_Tipo_Producto_
;
CREATE PROCEDURE PA_Activar_Tipo_Producto (
    IN Cod_Tipo_Producto_ int
)
	UPDATE Tipo_Producto
	SET Estado_Tipo_Producto = 1
	WHERE Cod_Tipo_Producto = Cod_Tipo_Producto_
;
CREATE PROCEDURE PA_Suprimir_Tipo_Producto (
    IN Cod_Tipo_Producto_ int
)
	DELETE FROM Tipo_Producto
	WHERE Cod_Tipo_Producto = Cod_Tipo_Producto_
;
CREATE TABLE Marca (
    Cod_Marca int AUTO_INCREMENT,
    Marca varchar(50),
    Descripcion_Marca varchar(255),
    Estado_Marca int(1),
    CONSTRAINT PK_Marca PRIMARY KEY (Cod_Marca)
)
;
CREATE PROCEDURE PA_Buscar_Marca()
	SELECT * 
	FROM Marca
    WHERE Estado_Marca = 1
;
CREATE PROCEDURE PA_Buscar_Marca_Codigo(
    IN Cod_Marca_ int
)
	SELECT * 
	FROM Marca
    WHERE Cod_Marca = Cod_Marca_
;
CREATE PROCEDURE PA_Ingresar_Marca (
    IN Marca_ varchar(50),
    IN Descripcion_Marca_ varchar(255)
)
	INSERT INTO Marca (Cod_Marca,Marca,Descripcion_Marca,Estado_Marca) 
	VALUES (NULL,Marca_,Descripcion_Marca_,1)
;
CREATE PROCEDURE PA_Modificar_Marca (
    IN Cod_Marca_ int,
    IN Marca_ varchar(50),
    IN Descripcion_Marca_ varchar(255)
)
	UPDATE Marca
	SET Marca = Marca_, Descripcion_Marca = Descripcion_Marca_
	WHERE Cod_Marca = Cod_Marca_
;
CREATE PROCEDURE PA_Eliminar_Marca (
    IN Cod_Marca_ int
)
	UPDATE Marca
	SET Estado_Marca = 0
	WHERE Cod_Marca = Cod_Marca_
;
CREATE PROCEDURE PA_Activar_Marca (
    IN Cod_Marca_ int
)
	UPDATE Marca
	SET Estado_Marca = 1
	WHERE Cod_Marca = Cod_Marca_
;
CREATE PROCEDURE PA_Suprimir_Marca (
    IN Cod_Marca_ int
)
	DELETE FROM Marca
	WHERE Cod_Marca = Cod_Marca_
;
CREATE TABLE Productos (
    Cod_Producto int AUTO_INCREMENT,
    Cod_Tipo_Producto int,
    Cod_Marca int,
    Producto varchar(255),
    Descripcion_Producto varchar(255),
    Precio_Producto decimal(14,2),
    Stock_Producto int,
    Stock_Minimo int,
    Stock_Maximo int,
    Estado_Producto int(1),
    CONSTRAINT PK_Productos PRIMARY KEY (Cod_Producto),
    CONSTRAINT FK_Tipo_Producto_Producto FOREIGN KEY (Cod_Tipo_Producto) REFERENCES Tipo_Producto (Cod_Tipo_Producto),
    CONSTRAINT FK_Marca_Producto FOREIGN KEY (Cod_Marca) REFERENCES Marca (Cod_Marca)
)
;
CREATE PROCEDURE PA_Buscar_Producto()
	SELECT * 
	FROM Productos,Tipo_Producto,Marca
    WHERE   Productos.Cod_Tipo_Producto = Tipo_Producto.Cod_Tipo_Producto AND 
            Productos.Cod_Marca = Marca.Cod_Marca AND Estado_Producto = 1
;
CREATE PROCEDURE PA_Buscar_Producto_Codigo(
    IN Cod_Producto_ int
)
	SELECT * 
	FROM Productos,Tipo_Producto,Marca
    WHERE   Productos.Cod_Tipo_Producto = Tipo_Producto.Cod_Tipo_Producto AND 
            Productos.Cod_Marca = Marca.Cod_Marca AND Cod_Producto = Cod_Producto_
;
CREATE PROCEDURE PA_Ingresar_Producto (
    IN Cod_Tipo_Producto_ int,
    IN Cod_Marca_ int,
    IN Producto_ varchar(255),
    IN Descripcion_Producto_ varchar(255),
    IN Precio_Producto_ decimal(14,2),
    IN Stock_Producto_ int,
    IN Stock_Minimo_ int,
    IN Stock_Maximo_ int  
)
	INSERT INTO Productos (Cod_Producto,Cod_Tipo_Producto,Cod_Marca,Producto,Descripcion_Producto,Precio_Producto,Stock_Producto,Stock_Minimo,Stock_Maximo,Estado_Producto) 
	VALUES (NULL,Cod_Tipo_Producto_,Cod_Marca_,Producto_,Descripcion_Producto_,Precio_Producto_,Stock_Producto_,Stock_Minimo_,Stock_Maximo_,1)
;
CREATE PROCEDURE PA_Modificar_Producto (
    IN Cod_Producto_ int,
    IN Cod_Tipo_Producto_ int,
    IN Cod_Marca_ int,
    IN Producto_ varchar(255),
    IN Descripcion_Producto_ varchar(255),
    IN Precio_Producto_ decimal(14,2),
    IN Stock_Producto_ int,
    IN Stock_Minimo_ int,
    IN Stock_Maximo_ int 
)
	UPDATE Productos
	SET	Cod_Tipo_Producto = Cod_Tipo_Producto_, Cod_Marca = Cod_Marca_, Producto = Producto_,Descripcion_Producto = Descripcion_Producto_,Precio_Producto = Precio_Producto_, Stock_Producto = Stock_Producto_,
        Stock_Minimo = Stock_Minimo_,Stock_Maximo = Stock_Maximo_
	WHERE Cod_Producto = Cod_Producto_
;
CREATE PROCEDURE PA_Eliminar_Producto (
    IN Cod_Producto_ int
)
	UPDATE Productos
	SET Estado_Producto = 0
	WHERE Cod_Producto = Cod_Producto_
;
CREATE PROCEDURE PA_Activar_Producto (
    IN Cod_Producto_ int
)
	UPDATE Productos
	SET Estado_Producto = 1
	WHERE Cod_Producto = Cod_Producto_
;
CREATE PROCEDURE PA_Suprimir_Producto (
    IN Cod_Producto_ int
)
	DELETE FROM Productos
	WHERE Cod_Producto = Cod_Producto_
;
CREATE TABLE Detalle_Venta (
    Cod_Venta int,
    Cod_Producto int,
    Cantidad_DV int,
    Precio_DV decimal(14,2),
    Descuento_DV decimal(14,2),
    Igv_DV int,
    Utilidad_DV decimal(14,2),
    Monto_DV decimal(14,2),
    CONSTRAINT PK_Detalle_Venta PRIMARY KEY (Cod_Venta,Cod_Producto),
    CONSTRAINT FK_Ventas_Detalle_Venta FOREIGN KEY (Cod_Venta) REFERENCES Ventas (Cod_Venta),
    CONSTRAINT FK_Productos_Detalle_Venta FOREIGN KEY (Cod_Producto) REFERENCES Productos (Cod_Producto)
)
;
CREATE PROCEDURE PA_Buscar_Detalle_Venta(
    IN Cod_Venta_ int
)
	SELECT * 
	FROM Marca
    WHERE Cod_Marca = Cod_Marca_
;
CREATE PROCEDURE PA_Ingresar_Detalle_Venta (
    IN Cod_Venta_ int,
    IN Cod_Producto_ int,
    IN Cantidad_DV_ int,
    IN Precio_DV_ decimal(14,2),
    IN Descuento_DV_ decimal(14,2),
    IN Igv_DV_ int,
    IN Utilidad_DV_ decimal(14,2),
    IN Monto_DV_ decimal(14,2)
)
	INSERT INTO Detalle_Venta (Cod_Venta,Cod_Producto,Cantidad_DV,Precio_DV,Descuento_DV,Igv_DV,Utilidad_DV,Monto_DV) 
	VALUES (Cod_Venta_,Cod_Producto_,Cantidad_DV_,Precio_DV_,Descuento_DV_,Igv_DV_,Utilidad_DV_,Monto_DV_)
;
CREATE PROCEDURE PA_Modificar_Detalle_Venta (
    IN Cod_Venta_ int,
    IN Cod_Producto_ int,
    IN Cantidad_DV_ int,
    IN Precio_DV_ decimal(14,2),
    IN Descuento_DV_ decimal(14,2),
    IN Igv_DV_ int,
    IN Utilidad_DV_ decimal(14,2),
    IN Monto_DV_ decimal(14,2)
)
	UPDATE Detalle_Venta
	SET Cantidad_DV = Cantidad_DV_, Precio_DV = Precio_DV_, Descuento_DV = Descuento_DV_, Igv_DV = Igv_DV_, Utilidad_DV = Utilidad_DV_, Monto_DV = Monto_DV_
	WHERE Cod_Venta = Cod_Venta_ AND Cod_Producto = Cod_Producto_
;
CREATE PROCEDURE PA_Suprimir_Detalle_Venta (
    IN Cod_Venta_ int,
    IN Cod_Producto_ int
)
	DELETE FROM Marca
	WHERE Cod_Venta = Cod_Venta_ AND Cod_Producto = Cod_Producto_
;
CREATE TABLE Cronograma_Ventas (
    Cod_Cronograma_Ventas  int,
    Cod_Venta int,
    Descripcion varchar(255),
    Fecha_Vencimiento datetime,
    Cuota int,
    Monto decimal(14,2),
    Estado int(1),
    CONSTRAINT PK_Cronograma_Ventas  PRIMARY KEY (Cod_Cronograma_Ventas),
    CONSTRAINT FK_Ventas_Cronograma_Ventas  FOREIGN KEY (Cod_Venta) REFERENCES Ventas (Cod_Venta)
)
;
CREATE TABLE Amortizacion_Venta (
    Cod_Movimiento int,
    Cod_Cronograma_Ventas int,
    Monto decimal(14,2),
    CONSTRAINT PK_Amortizacion_Venta PRIMARY KEY (Cod_Movimiento,Cod_Cronograma_Ventas),
    CONSTRAINT FK_Movimiento_Amortizacion_Venta FOREIGN KEY (Cod_Movimiento) REFERENCES Movimiento (Cod_Movimiento),
    CONSTRAINT FK_Cronograma_Ventas_Amortizacion_Venta FOREIGN KEY (Cod_Cronograma_Ventas) REFERENCES Cronograma_Ventas (Cod_Cronograma_Ventas)
)
;
CREATE TABLE Proveedores (
    Cod_Proveedor int AUTO_INCREMENT,
    Cod_Ciudad_P char(6),
    Ruc_P char(11),
    Nombre_Compania_P varchar(255),
    Razon_Social_P varchar(255),
    Direccion_P varchar(255),
    Tel_Fijo_P int,
    Tel_Movil_P int,
    Persona_Contacto_P varchar(250),
    Tel_Contacto_P int,
    Fecha_Registro_P date,
    Descripcion_Proveedor varchar(255),
    Estado_Proveedor int(1),
    CONSTRAINT PK_Proveedores PRIMARY KEY (Cod_Proveedor),
    CONSTRAINT FK_Ciudaddes_Proveedores FOREIGN KEY (Cod_Ciudad_P) REFERENCES Ubigeo (Cod_Ciudad)
)
;
CREATE PROCEDURE PA_Buscar_Proveedores()
	SELECT * 
	FROM Proveedores, Ubigeo
    WHERE Proveedores.Cod_Ciudad_P = Ubigeo.Cod_Ciudad  AND Estado_Proveedor = 1
;
CREATE PROCEDURE PA_Buscar_Proveedores_Codigo(
    IN Cod_Proveedor_ int
)
	SELECT * 
	FROM Proveedores, Ubigeo
    WHERE Proveedores.Cod_Ciudad_P = Ubigeo.Cod_Ciudad  AND Cod_Proveedor = Cod_Proveedor_
;
CREATE PROCEDURE PA_Ingresar_Proveedor (
    IN Cod_Ciudad_P_ char(6),
    IN Ruc_P_ char(11),
    IN Nombre_Compania_P_ varchar(255),
    IN Razon_Social_P_ varchar(255),
    IN Direccion_P_ varchar(255),
    IN Tel_Fijo_P_ int,
    IN Tel_Movil_P_ int,
    IN Persona_Contacto_P_ varchar(250),
    IN Tel_Contacto_P_ int,
    IN Fecha_Registro_P_ date,
    IN Descripcion_Proveedor_ varchar(255)
)
	INSERT INTO Proveedores (Cod_Proveedor,Cod_Ciudad_P,Ruc_P,Nombre_Compania_P,Razon_Social_P,Direccion_P,Tel_Fijo_P,Tel_Movil_P,Persona_Contacto_P,Tel_Contacto_P,Fecha_Registro_P,Descripcion_Proveedor,Estado_Proveedor) 
	VALUES (NULL,Cod_Ciudad_P_,Ruc_P_,Nombre_Compania_P_,Razon_Social_P_,Direccion_P_,Tel_Fijo_P_,Tel_Movil_P_,Persona_Contacto_P_,Tel_Contacto_P_,Fecha_Registro_P_,Descripcion_Proveedor_,1)
;
CREATE PROCEDURE PA_Modificar_Proveedor (
    IN Cod_Proveedor_ int,
    IN Cod_Ciudad_P_ char(6),
    IN Ruc_P_ char(11),
    IN Nombre_Compania_P_ varchar(255),
    IN Razon_Social_P_ varchar(255),
    IN Direccion_P_ varchar(255),
    IN Tel_Fijo_P_ int,
    IN Tel_Movil_P_ int,
    IN Persona_Contacto_P_ varchar(250),
    IN Tel_Contacto_P_ int,
    IN Fecha_Registro_P_ date,
    IN Descripcion_Proveedor_ varchar(255)
)
	UPDATE Proveedores
	SET Cod_Ciudad_P = Cod_Ciudad_P_,Ruc_P = Ruc_P_,Nombre_Compania_P = Nombre_Compania_P_,Razon_Social_P = Razon_Social_P_,Direccion_P = Direccion_P_,Tel_Fijo_P = Tel_Fijo_P_,
		Tel_Movil_P = Tel_Movil_P_,Persona_Contacto_P = Persona_Contacto_P_,Tel_Contacto_P = Tel_Contacto_P_,Fecha_Registro_P = Fecha_Registro_P_,Descripcion_Proveedor = Descripcion_Proveedor_
	WHERE Cod_Proveedor = Cod_Proveedor_
;
CREATE PROCEDURE PA_Eliminar_Proveedor (
    IN Cod_Proveedor int
)
	UPDATE Proveedores 
	SET Estado_Proveedor = 0
	WHERE Cod_Proveedor = Cod_Proveedor_
;
CREATE PROCEDURE PA_Activar_Proveedor (
    IN Cod_Proveedor int
)
	UPDATE Proveedores 
	SET Estado_Proveedor = 1
	WHERE Cod_Proveedor = Cod_Proveedor_
;
CREATE PROCEDURE PA_Suprimir_Proveedor (
    IN Cod_Proveedor_ int
)
	DELETE FROM Proveedores
	WHERE Cod_Proveedor = Cod_Proveedor_
;
CREATE TABLE Compras (
    Cod_Compra int AUTO_INCREMENT,
    Cod_Empleado int,
    Cod_Proveedor int,
    Cod_Tipo_Transaccion int,
    Fecha_Compra datetime,
    Estado_Compra int(1),
    CONSTRAINT PK_Compras PRIMARY KEY (Cod_Compra),
    CONSTRAINT FK_Persona_Compras FOREIGN KEY (Cod_Empleado) REFERENCES Persona (Cod_Persona),
    CONSTRAINT FK_Proveedores_Compras FOREIGN KEY (Cod_Proveedor) REFERENCES Proveedores (Cod_Proveedor),
    CONSTRAINT FK_Tipo_Transaccion_Compras FOREIGN KEY (Cod_Tipo_Transaccion) REFERENCES Tipo_Transaccion (Cod_Tipo_Transaccion)
)
;
CREATE PROCEDURE PA_Buscar_Compras()
	SELECT * 
	FROM Compras,Persona,Proveedores,Tipo_Transaccion
	WHERE	Compras.Cod_Empleado = Persona.Cod_Persona AND
			Compras.Cod_Proveedor = Proveedores.Cod_Proveedor AND
			Compras.Cod_Tipo_Transaccion = Tipo_Transaccion.Cod_Tipo_Transaccion AND
            Estado_Compra = 1
;
CREATE PROCEDURE PA_Buscar_Compras_Codigo(
    IN Cod_Compra_ int 
)
	SELECT * 
	FROM Compras,Persona,Proveedores,Tipo_Transaccion
	WHERE	Compras.Cod_Empleado = Persona.Cod_Persona AND
			Compras.Cod_Proveedor = Proveedores.Cod_Proveedor AND
			Compras.Cod_Tipo_Transaccion = Tipo_Transaccion.Cod_Tipo_Transaccion AND
            Cod_Compra = Cod_Compra_
;
CREATE PROCEDURE PA_Ingresar_Compra (
	 Cod_Empleado_ int,
	 Cod_Proveedor_ int,
	 Cod_Tipo_Transaccion_ int,
	 Fecha_Compra_ datetime
)
	INSERT INTO Compras (Cod_Compra,Cod_Empleado,Cod_Proveedor,Cod_Tipo_Transaccion,Fecha_Compra,Estado_Compra) 
	VALUES (NULL,Cod_Empleado_,Cod_Proveedor_,Cod_Tipo_Transaccion_,Fecha_Compra_,1)
;
CREATE PROCEDURE PA_Modificar_Compra (
	 Cod_Compra_ int,
	 Cod_Empleado_ int,
	 Cod_Proveedor_ int,
	 Cod_Tipo_Transaccion_ int,
	 Fecha_Compra_ datetime
)
	UPDATE Compras
	SET Cod_Empleado = Cod_Empleado_,Cod_Proveedor = Cod_Proveedor_,
		Cod_Tipo_Transaccion = Cod_Tipo_Transaccion_,Fecha_Compra = Fecha_Compra_
	WHERE Cod_Compra = Cod_Compra_
;
CREATE PROCEDURE PA_Eliminar_Compra (
    IN Cod_Compra_ int
)
	UPDATE Compras 
	SET Estado_Compra = 0
	WHERE Cod_Compra = Cod_Compra
;
CREATE PROCEDURE PA_Activar_Compra (
    IN Cod_Compra_ int
)
	UPDATE Compras 
	SET Estado_Compra = 1
	WHERE Cod_Compra = Cod_Compra
;
CREATE PROCEDURE PA_Suprimir_Compra (
    IN Cod_Compra_ int
)
	DELETE FROM Compras 
	WHERE Cod_Compra = Cod_Compra_
;
CREATE TABLE Detalle_Compras (
    Cod_Compra int,
    Cod_Producto int,
    Cantidad int,
    Precio decimal(14,2),
    Descuento_p decimal(14,2),
    Igv int,
    CONSTRAINT PK_Detalle_Compras PRIMARY KEY (Cod_Compra,Cod_Producto),
    CONSTRAINT FK_Compras_Detalle_Compras FOREIGN KEY (Cod_Compra) REFERENCES Compras (Cod_Compra),
    CONSTRAINT FK_Productos_Detalle_Compras FOREIGN KEY (Cod_Producto) REFERENCES Productos (Cod_Producto)
)
;
CREATE TABLE Cronograma_Compras (
    Cod_Cronograma_Compras int,
    Cod_Compra int,
    Descripcion varchar(255),
    Fecha_Vencimiento datetime,
    Cuota int,
    Monto decimal(14,2),
    Estado int(1),
    CONSTRAINT PK_Cronograma_Compras PRIMARY KEY (Cod_Cronograma_Compras),
    CONSTRAINT FK_Compras_Cronograma_Compras FOREIGN KEY (Cod_Compra) REFERENCES Compras (Cod_Compra)
)
;
CREATE TABLE Amortizacion_Compra (
    Cod_Movimiento int,
    Cod_Cronograma_Compras int,
    Monto decimal(14,2),
    Cuota int,
    CONSTRAINT PK_Amortizacion_Compra PRIMARY KEY (Cod_Movimiento,Cod_Cronograma_Compras),
    CONSTRAINT FK_Movimiento_Amortizacion_Compra FOREIGN KEY (Cod_Movimiento) REFERENCES Movimiento (Cod_Movimiento),
    CONSTRAINT FK_Cronograma_Compras_Amortizacion_Compra FOREIGN KEY (Cod_Cronograma_Compras ) REFERENCES Cronograma_Compras (Cod_Cronograma_Compras)
)
;
CREATE TABLE Boleta_Movimiento (
    Cod_Boleta int,
    Cod_Movimiento int,
    Fecha datetime,
    CONSTRAINT PK_Boleta_Movimiento PRIMARY KEY (Cod_Boleta,Cod_Movimiento),
    CONSTRAINT FK_Boleta_Boleta_Movimiento FOREIGN KEY (Cod_Boleta) REFERENCES Boleta (Cod_Boleta),
    CONSTRAINT FK_Movimiento_Boleta_Movimiento FOREIGN KEY (Cod_Movimiento) REFERENCES Movimiento (Cod_Movimiento)
)
;
CREATE TABLE Accesos (
    Cod_Acceso int AUTO_INCREMENT,
    Acceso varchar(20),
    Estado_Acceso int(1),
    CONSTRAINT PK_Accesos PRIMARY KEY (Cod_Acceso)
)
;
CREATE TABLE Acceso_Persona (
    Cod_Persona int,
    Cod_Acceso int,
    CONSTRAINT FK_Accesos_Acceso_Persona FOREIGN KEY (Cod_Acceso) REFERENCES Accesos (Cod_Acceso),
    CONSTRAINT FK_Persona_Acceso_Persona FOREIGN KEY (Cod_Persona) REFERENCES Persona (Cod_Persona)
)
;


