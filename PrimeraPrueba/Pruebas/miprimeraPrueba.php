<?php
include 'PHPDocument.php';

Class miprimeraPrueba extends PHPUnit_Framework_TestCase {
	
	//iguales
	public function test_Suma()
	{
		$dato = sumar(2, 3);
		$this->assertEquals(5, $dato);
	}
	/*
	public function test_Suma2()
	{
		$dato = sumar(2, 3);
		$this->assertEquals(7, $dato);
	}
	*/
	public function test_Concatenar()
	{
		$dato = concatenar('algo', ' es');
		$this->assertEquals('algo es', $dato);
	}
	//diferentes
	public function test_restar()
	{
		$dato= restar(5, 3);
	
		$this->assertNotEquals(0, $dato);
	
	}
	public function test_responder()
	{
		$this->assertNotEquals('hola', responder(2));
	
	}
	//booleanos
	
	public function test_True()
	{
		$this->assertTrue(comparar(2,2));
	}
	public function test_False()
	{
		$this->assertFalse(comparar('Hola','Adios'));
	}
	
	//null
	
	public function test_Null()
	{
		
		$this->assertNull(null);
	}
	// arreglos
	
	public  function  test_ArrayEquality () {
		$array1= Llenar_Arreglo(4 , 5 , 6);
		$array2= Llenar_Arreglo(4 , 5 , 6);
	
		$this ->assertEquals($array1,$array2);
	}
	
	public function test_arreglos()
	{
		$array= Llenar_Arreglo('uno', 'dos', 'tres');
		$this->assertArrayHasKey(1, $array);
		
	}
	//Excepciones
	protected function assertException(callable $callback, $expectedException = 'Exception', $expectedCode = null, $expectedMessage = null)
	{
		if (!class_exists($expectedException) && !interface_exists($expectedException)) {
			$this->fail("An exception of type '$expectedException' does not exist.");
		}
	
		try {
			$callback();
		} catch (\Exception $e) {
			$class = get_class($e);
			$message = $e->getMessage();
			$code = $e->getCode();
	
			$extraInfo = $message ? " (message was $message, code was $code)" : ($code ? " (code was $code)" : '');
			$this->assertInstanceOf($expectedException, $e, "Failed asserting the class of exception$extraInfo.");
	
			if ($expectedCode !== null) {
				$this->assertEquals($expectedCode, $code, "Failed asserting code of thrown $class.");
			}
			if ($expectedMessage !== null) {
				$this->assertContains($expectedMessage, $message, "Failed asserting the message of thrown $class.");
			}
			return;
		}
	
		$extraInfo = $expectedException !== 'Exception' ? " of type $expectedException" : '';
		$this->fail("Failed asserting that exception$extraInfo was thrown.");
	}
	
	public function testException1()
	{
		$test = function() {
			//dividir(5,1);//Sin Generar Excepcion
			dividir(5,0); //Generando Excepcion (Division entre 0)
		};
		$this->assertException( $test, 'Exception');
	}
	
	public function testException2()
	{
		$this->setExpectedException('InvalidArgumentException');
	}
	/*
	//Profe en el index cargamos los datos de un xml devolviendo un array, pero tuvimos problemas para probarlo
	en los test.
	public function test_DatosNoNull()
	{
	$array= LeerDatos();
	$this->assertEmpty($array);
	}

	
	*/

	
	
};
