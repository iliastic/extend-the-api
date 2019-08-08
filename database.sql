CREATE DATABASE IF NOT EXISTS `Database shizzle`;

CREATE TABLE `table enzo `(
	ID      INT              NOT NULL AUTO_INCREMENT,
  	Author  VARCHAR (20)    ,
    Title   VARCHAR (100) UNIQUE NOT NULL, 
   	Text    VARCHAR(1000)    ,
	 PRIMARY KEY (`ID`);