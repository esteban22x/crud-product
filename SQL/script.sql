CREATE TABLE `product` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`referencia` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`precio` INT(11) NOT NULL DEFAULT '0',
	`peso` INT(11) NOT NULL DEFAULT '0',
	`categoria` VARCHAR(50) NOT NULL DEFAULT '0' COLLATE 'utf8_general_ci',
	`stock` INT(11) NOT NULL DEFAULT '0',
	`fechaCreacion` DATE NULL DEFAULT curdate(),
	`ultimaVenta` DATETIME NOT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
