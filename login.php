<?php

$dbhost = "IP_Address";
$dbuser = "User";
$dbpass = "Password";
$dbname = "DataBase_Name";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM poject_19_login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	echo "<script> alert('Error');window.location= 'index.html' </script>";
}
	
?>
