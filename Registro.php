<?php
	
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("globalcomputer",$link) or die("<h2>Error de Conexion</h2>");

	
	$nombres = $_POST['nom'];
	$apellidos = $_POST['ap'];
    $usuario = $_POST['us'];
	$email = $_POST['correo'];
	$pass = $_POST['contra'];
	$rpass = $_POST['contrar'];

	
	$req = (strlen($nombres)*strlen($apellidos)*strlen($email)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");


	if ($pass != $rpass) {
		die('Las contraseñas no coinciden, Verifique <br /> <a href="Registro.html">Volver</a>');
	}

	
	$contraseñaUser = md5($pass);

	
	mysql_query("INSERT INTO usuarios nuevos VALUES('','$nombres','$apellidos','$usuario''$email','$pass')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'


?>
