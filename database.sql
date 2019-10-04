CREATE DATABASE shizzle;

CREATE TABLE IF NOT EXCISTS enzo (
	id      INT   UNSIGNED		NOT NULL AUTO_INCREMENT,
  	author  VARCHAR (200)    ,
    title   VARCHAR (500) UNIQUE NOT NULL, 
   	tekst    TEXT   ,
	 PRIMARY KEY (`id`)  ; 