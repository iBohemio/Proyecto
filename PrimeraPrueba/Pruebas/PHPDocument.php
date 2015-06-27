<?php 

//Funciones con resultados numericos

	function sumar($var1,$var2)
	{
		return $var1 + $var2;	
	}
	function restar($var1,$var2)
	{
		return $var1 + $var2;
	}

	function multiplicar($var1,$var2)
	{
		return $var1 * $var2;
	}
//Funciones con resultados tipo texto 
	function concatenar($var1,$var2)
	{
		return $var1.$var2;
	}
	function Llenar_Arreglo($val1, $val2, $val3)
	{
		$array = array(
				0 => $val1,
				1 => $val2,
				2 => $val3,
		);
		return $array;
	}
//Funciones con resultados tipo Boolean
	function Comparar($uno,$dos)
	{
		return $uno==$dos;
	}
//Funciones con resultado tipo lista
	function Llenar_Lista($var1,$var2,$var3)
	{
	$info = array($var1, $var2, $var3);
	return list($varA, $varB, $varC) = $info;
	}
	
	
	//Funcion con resultado tipo Excepcion (Para este caso usaremos una division entre 0)
	function dividir($var1,$var2)
	{
		return $var1 / $var2;
	}
	
	try{
		$dato=dividir(5);
	}
	catch (Exception $e) {
		echo 'Excepción capturada: ',  $e->getMessage(), "\n";
	} finally {
		echo "finally.\n";
	}
	//Funciones con conexion a base de datos
	
	
	//Mas funciones (por si las dudas)
	function responder($param)
	{
		switch ($param){
			case 1:return 'hola';
			case 2:return 'adios';
			case 3:return 'como estas';
			case 4:return 'quien eres';
			case 5:return 'soy tu padre';
			default :return 'no permitido';
		}
	}

	

