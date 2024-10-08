CREATE DATABASE biblioteca;

USE biblioteca;

CREATE TABLE estudante(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR (100)
);

CREATE TABLE autor(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR (100),
nacionalidade VARCHAR (3)
);

CREATE TABLE livro(

titulo VARCHAR (100),
ano INT,
id INT PRIMARY KEY AUTO_INCREMENT,
idAutor INT, FOREIGN KEY (idAutor) REFERENCES autor(id) ON DELETE CASCADE);