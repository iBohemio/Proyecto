<?php


function  conectar()
{
global $con;
global $resultado;
global $fila;
global $array;
	$host="localhost";
	$user="Gerente";
	$password="1234";
	$bd='coches';
	$query='select*from autos';
	
	$con=mysqli_connect($host,$user,$password);
	mysqli_select_db($con,$bd);
	$resultado= mysqli_query($con,$query);

	$i=0;$j=1;$k=2;
	echo "ID Marca Modelo <br>";
	$fila=mysqli_fetch_all($resultado);
	return $fila;
}
conectar();
printf("<br><br>");
if($con)
{
	echo 'bien';

	echo $fila[0][0];
	echo $fila[0][1];
	echo $fila[0][2];
	echo $fila[1][0];
	echo $fila[1][1];
	echo $fila[1][2];
	
}
else
{
	echo 'mal';
}
