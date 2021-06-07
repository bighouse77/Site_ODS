CREATE DATABASE IF NOT EXISTS site_ods;

USE site_ods;

CREATE TABLE IF NOT EXISTS cadastro (
    id INT,
    Nome_Razão VARCHAR(30),
    CPF_CNPJ VARCHAR(30) NOT NULL,
    Email VARCHAR(50),
    Senha VARCHAR(50),

    PRIMARY KEY (id)
);
