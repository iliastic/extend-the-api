# extend-the-api

This code is for a database.

I started with The "IF NOT EXISTS" clause it prevents you from an error of creating a new database that already exists in the database server. You cannot have 2 databases with the same name in database server.

Than I wrote "CREATE TABLE" statement this is used to create a new table in a database.

id      INT              NOT NULL AUTO_INCREMENT --- this means that ID can only exists 

out of numbers  &  Auto-increment allows a unique number to be generated automatically when a new record is inserted into a table.

author  VARCHAR (200)   --- Author's name will exist out of letters and max 200 char.

title   VARCHAR (500) UNIQUE NOT NULL,  --- Title will exist out of letters and max 500 char.
    Title has to be unique and can't be blank

tekst    TEXT   -----  Text will be written with letters and max unlimmeted char.

PRIMARY KEY (`id`)  ----  Auto-increment is the primary key field that we would like to be created          automatically every time a new record is inserted.

By Ilias Mesbahi
