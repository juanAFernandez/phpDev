#Creación de la base de datos.

/*Para ejecutar este fichero sólo tenemos que entrar entrar
en mysql como root que está configurado como el usuario
y hacer source db.sql*/

CREATE DATABASE comentarios;
SHOW DATABASES;
USE comentarios;
SHOW TABLES;
CREATE TABLE comentarios (comentario VARCHAR(200));
SHOW TABLES;
DESCRIBRE comentarios;
#Introducimos el primer comentario
INSERT INTO comentarios VALUES ('hola que tal');
SELECT * FROM comentarios;
