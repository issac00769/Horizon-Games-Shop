/**********************Mostrar producto *********************************/
USE `horizon`;
DROP procedure IF EXISTS `ps_mostrarproducto`;

USE `horizon`;
DROP procedure IF EXISTS `horizon`.`ps_mostrarproducto`;
;

DELIMITER $$
USE `horizon`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ps_mostrarproducto`(
	in IdP int
)
BEGIN
	SELECT * FROM producto WHERE IdProducto = IdP ;
END$$

DELIMITER ;
;


/**************************Pefil consulta 1- funciona ********************************/
USE `horizon`;
DROP procedure IF EXISTS `sp_perfil_consulta1`;

DELIMITER $$
USE `horizon`$$
CREATE PROCEDURE `sp_perfil_consulta1` (
	in idU1 int
)
BEGIN
	SELECT * FROM usuario WHERE IdUsuario = idU1;
END$$

DELIMITER ;


/*************************ConSULTA 2 perfil funciona *****************************/
DROP procedure IF EXISTS `horizon`.`sp_perfilconsulta2`;
;

DELIMITER $$
USE `horizon`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_perfilconsulta2`(
    in Id2P int
)
BEGIN
	SELECT venta.id_producto, venta.id_usuario, producto.foto, venta.id 
    FROM venta
	INNER JOIN producto 
    ON venta.id_producto = producto.IdProducto 
    WHERE id_usuario = Id2P;
END$$

DELIMITER ;
;

/************************Info producto- funciona***************************/
USE `horizon`;
DROP procedure IF EXISTS `sp_consulta_info_producto`;

DELIMITER $$
USE `horizon`$$
CREATE PROCEDURE `sp_consulta_info_producto` (
	in idP int
)
BEGIN
	SELECT * FROM producto WHERE IdProducto = idP;
END$$

DELIMITER ;

/******************** Pago consulta 1 *********************/
USE `horizon`;
DROP procedure IF EXISTS `sp_pago_consulta1`;

USE `horizon`;
DROP procedure IF EXISTS `horizon`.`sp_pago_consulta1`;
;

DELIMITER $$
USE `horizon`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pago_consulta1`(
 in idP1 int
)
BEGIN
	SELECT producto.IdProducto, producto.NombreProducto, producto.Precio, producto.stock, producto.foto, marca.NombreMarca 
    FROM producto 
	INNER JOIN marca 
    ON producto.Id_Marca = marca.IdMarca 
    WHERE IdProducto = idP1;
END$$

/********************* PAgo consulta 2- funciona**********************/
USE `horizon`;
DROP procedure IF EXISTS `sp_pago_consulta2`;

DELIMITER $$
USE `horizon`$$
CREATE PROCEDURE `sp_pago_consulta2` (
	in idU2 int
)
BEGIN
	SELECT * FROM usuario WHERE IdUsuario = idU2;
END$$

DELIMITER ;

/****************** tabla y tigre de log.venta **************************/
CREATE TABLE `horizon`.`log_venta` (
  `idlog_venta` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `accion` VARCHAR(500) NOT NULL,
  `informacion` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`idlog_venta`));

drop trigger if exists insertar_venta;
delimiter //
create trigger insertar_venta after insert on venta
for each row
begin
 insert into log_venta (accion)
 value('Se inserto: ', NEW.)



delimiter ;CALL `horizon`.`ps_mostrarproducto`(<{in IdP int}>);
