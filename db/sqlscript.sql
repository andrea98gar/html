/* Ejecutar instalacion.sh

Para ejecutarlo este script: sudo mysql -u root -p <sqlscript.sql*/

CREATE DATABASE COMPUSHOP;

SHOW DATABASES;

USE COMPUSHOP;

CREATE TABLE USUARIOS(Usuario VARCHAR(30) PRIMARY KEY, Contrasena VARCHAR (100) NOT NULL,  Nombre VARCHAR(30), Apellidos LONGTEXT, DNI VARCHAR(10), Tel VARCHAR(9), Fecha VARCHAR(10), email LONGTEXT , cBancaria LONGTEXT);

CREATE TABLE PRODUCTOS (Modelo VARCHAR(30) PRIMARY KEY, RAM VARCHAR(30), Bateria VARCHAR(30), Procesador VARCHAR(30), Precio VARCHAR(30));

CREATE TABLE LOGS (Usuario VARCHAR(30), Fecha VARCHAR(30), Intento VARCHAR(30), PRIMARY KEY (Usuario, Fecha));
