CREATE DATABASE cadastro_usuarios;
USE cadastro_usuarios;

CREATE TABLE `login`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));

INSERT INTO `usuario` (`id`,`usuario`,`senha`) VALUES (1,'gilnei','teste123');
