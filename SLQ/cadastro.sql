CREATE DATABASE IF NOT EXISTS cadastro 
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci

CREATE TABLE IF NOT EXISTS usuarios (
    codigo int NOT null AUTO_INCREMENT,
    nome varchar(50) NOT null,
    nomeusuario varchar(50) NOT null UNIQUE,
    senha varchar(50) NOT null,
    PRIMARY KEY(codigo)
) DEFAULT charset=utf8;

CREATE TABLE IF NOT EXISTS produtos (
	codigo int NOT null AUTO_INCREMENT,
	nome VARCHAR(50) NOT null UNIQUE,
	quantidade INT,
	PRIMARY KEY(codigo)
) DEFAULT charset=utf8;