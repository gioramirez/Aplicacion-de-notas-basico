CREATE DATABASE libreta
USE libreta

CREATE TABLE notas(
id INT(100) NOT NULL AUTO_INCREMENT,
titulo VARCHAR (100) NOT NULL,
contenido TEXT NOT NULL,
fecha VARCHAR(10) NOT NULL,
hora VARCHAR(10) NOT NULL,
PRIMARY KEY(id)
)
DROP TABLE notas
SELECT * FROM NOTAS
