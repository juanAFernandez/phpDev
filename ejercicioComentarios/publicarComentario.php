<?php
include 'conexion_db.php';
include 'funcionalidad.php';


//Podemos importar las variables del formulario de contacto.
@$comentario=addslashes($_POST['comentario']);


echo $comentario;
conectarBase($db_host,$db_user,$db_password,$db_database);
mysql_query("INSERT INTO comentarios(comentario) VALUES ('$comentario')");



?>
<script language="javascript"> 
window.location="index.php"; 
</script>