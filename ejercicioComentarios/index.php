<html>
<body>

<header>
	<title>App para comentarios</title>

</header>

<head>Cabecera</head></br>

<?php
include 'conexion_db.php';
include 'funcionalidad.php';

error_reporting(E_ALL);
ini_set('display_errors','1');


conectarBase($db_host,$db_user,$db_password,$db_database);

mostrarComentarios();


/*
    $consulta="SELECT * FROM comentarios";
    $resultado = mysql_query($consulta);
    
    if(!$resultado){
        die ("No se pudo ejecutar la consulta sobre la base de datos: </br>".mysql_error());
    }
    
    
    while ($result_row=mysql_fetch_row(($resultado))){
        echo "Comentario: ".$result_row[0]."</br>";
    }
   
    mysql_close($conexion);*/
/*
Si encontramos algun error al llamar a mysql_connect puede ser
porque en /etc/php5/apache2/php.ini esté comentada la linea 
 extension=msql.so , descomentándola y reiniciando apache con
 service apache2 restart por ejemplo todo debería funcionar.
*/
?>
</body>
</html>