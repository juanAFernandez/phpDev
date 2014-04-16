<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

    /* Para poder hacer la conexión creamos una pequeñisima base de datos
     * de prueba y vemos que esté creada en mysql:
     * 
     * Accedemos a mysql como root:   $mysql -h localhost -u root -p
     * Una vez en el terminal de mysql vemos las bases de datos creadas:
     * 
     *      mysql> show databases;
     * 
     * Para elegir una base de datos hacemos:
     * 
     *      mysql> use <nombreBaseDeDatos>
     * 
     * y para ver las tablas:
     * 
     *      mysql> show tables;
     * 
     * Las consultas con formato SQL y la creación de tablas es otra historia.
     */

    $db_host='localhost';
    $db_database='prueba';
    $db_username='root';
    $db_password='root';

    
    $connection=  mysql_connect($db_host,$db_username,$db_password);

    
    if(!$connection){
        die ("No se pudo conectar a la base de datos: </br>".mysql_error());
    };
    
    
    
    $db_select=mysql_select_db($db_database);
    if(!$db_select){
        die ("No se pudo seleccionar la base de datos: ".mysql_error());
    }
    
    
    $consulta="SELECT * FROM profesores";
    $resultado = mysql_query($consulta);
    
    if(!$resultado){
        die ("No se pudo ejecutar la consulta sobre la base de datos: </br>".mysql_error());
    }
    
    
    while ($result_row=mysql_fetch_row(($resultado))){
        echo "Nombre: ".$result_row[0]."</br>";
    }
   
    mysql_close($connection);
    
    
    
?>
