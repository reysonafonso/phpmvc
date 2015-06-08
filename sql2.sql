CREATE SCHEMA IF NOT EXISTS `empresa` DEFAULT CHARACTER SET utf8 

CREATE TABLE IF NOT EXISTS `empresa`.`empresa` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `conteudo` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8


CREATE TABLE IF NOT EXISTS `empresa`.`localizacao` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `conteudo` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8


CREATE TABLE IF NOT EXISTS `empresa`.`servicos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `conteudo` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8


INSERT INTO `empresa` (`id`,`conteudo`) VALUES (1,'Empresa Reysoft é uma empresa de desenvolvimento de games para xbox360 e android, atuava antes em desenvolvimento de jogos para PC utilizando C++ e allegro,\ntrabalhando mais com jogos de aventura.');
INSERT INTO `empresa` (`id`,`conteudo`) VALUES (2,'Empresa Reysoft é uma empresa de desenvolvimento de aplicativos, atua mais em desenvolvimento de aplicativos comerciais para PC e tablets utilizando Delphi,\n');


insert into localizacao(conteudo) values('Rua Rio Jutai 26 Nossa Senhora das Graças - Manaus AM');
insert into localizacao(conteudo) values('Rua Maestro Joaquim Franco 100 Japiim 1 - Manaus AM');

INSERT INTO `servicos` (`id`,`conteudo`) VALUES (1,'Desenvolvimento de aplicações comerciais, games, aplicativos cientificos.');
INSERT INTO `servicos` (`id`,`conteudo`) VALUES (2,'Desenvolvimento de aplicativos comerciais para PC e tablets utilizando Delphi, Java e C#.');


