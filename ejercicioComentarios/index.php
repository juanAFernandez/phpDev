<<<<<<< HEAD
<?php

phpinfo();

?>
=======
<html>
<body>

<header>
	<title>App para comentarios</title>

</header>

<head>Comentarios</head></br></br>

<?php
include 'conexion_db.php';
include 'funcionalidad.php';

error_reporting(E_ALL);
ini_set('display_errors','1');


conectarBase($db_host,$db_user,$db_password,$db_database);

mostrarComentarios();
/*
Si encontramos algun error al llamar a mysql_connect puede ser
porque en /etc/php5/apache2/php.ini esté comentada la linea 
 extension=msql.so , descomentándola y reiniciando apache con
 service apache2 restart por ejemplo todo debería funcionar.
*/
?>

<!--Formulario para enviar los datos -->

<section class="formulario">


                <h3>Deja tu comentario:</h3>

                <form action="publicarComentario.php" method="post">
                <br>

                    <textarea id="textoComentario" name="comentario" rows="8" cols="72">Opinión aquí...</textarea>
                    
                    
                    <input type="submit" value="Publicar">


                </form> 



            </section>




</body>
</html>
>>>>>>> 8ce31b075ca6d8b09302d1687c699b9990c3860e
