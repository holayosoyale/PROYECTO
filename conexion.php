<?php
$conectar=@mysql_connect('localhost','root','');
//verificamos la conexion
if( $conectar ) {
     echo "No se pudo conectar con el Servidor";
}else{

	$base=mysql_select_db('prueba')
	if(!$base){
		echo"No se encontro Base de Datos";
	}
}
//recuperar las variables
$nombreUsuario=$_POST['nombreUsuario'];
$contraseña=$_POST['contraseña'];
//realizamos la sentencia
$sql="INSER INTO usuarios VALUES ('$nombreUsuario',
								  '$contraseña') "
								);
//ejecutamos la sentencia de sqlç
$ejecutar=mysql_query($sql);
//verificamos la ejecucion
if(!$ejecutar){
	echo "Hubo un error";
}else´{
	echo "Datos guardados correctamente<br><a href='index.html'>volver</a";
}

?>