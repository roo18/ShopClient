<?php
	
	$nick=$_POST["nick"];
	$pass=$_POST["pass"];
	
	$db=mysql_connect("localhost","root","")or die("Connection Error:");
	mysql_select_db("proyecto2_tienda")or die ("Error connecting db");
	
	$SQL="SELECT idCliente FROM cliente WHERE nick LIKE '$nick' AND contrasenya LIKE '$pass'";
	
	$resultado=mysql_query($SQL) or die("Couldnt execute query");
	
	while($fila=mysql_fetch_array($resultado,MYSQL_ASSOC)){
		echo $fila["idCliente"];
	}
	
	
	
	?>
	
	
	