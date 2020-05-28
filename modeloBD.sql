CREATE DATABASE IF NOT EXISTS red_Vinicius;

USE red_Vinicius;

CREATE TABLE IF NOT EXISTS carro
(
    id_carro INTEGER NOT NULL AUTO_INCREMENT,
    marca VARCHAR(80) NOT NULL,
    modelo VARCHAR(80) NOT NULL,
    placa VARCHAR(80) NOT NULL,
    cor VARCHAR(80) NOT NULL,
    ano_fabricacao INTEGER NOT NULL,
    PRIMARY KEY (id_carro)
);