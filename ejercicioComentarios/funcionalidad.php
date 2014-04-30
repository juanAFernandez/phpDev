<?php
//Vamos a traer aquí las funciones para poder gestionar mejor en index las llamadas.
include 'conexion_db.php';

function conectarBase($db_host,$db_user,$db_password,$db_database){
	
	if(!$conexion=mysql_connect($db_host,$db_user,$db_password)){
		return false;
	}elseif(!mysql_select_db($db_database)){
		return false;
	}else{
		return true;

	}

}


function mostrarComentarios(){
	 $consulta="SELECT * FROM comentarios";
    $resultado = mysql_query($consulta);
    
    if(!$resultado){
        die ("No se pudo ejecutar la consulta sobre la base de datos: </br>".mysql_error());
    }
    
    
    while ($result_row=mysql_fetch_row(($resultado))){
        echo "Comentario: ".$result_row[0]."</br>";
    }
}

?>