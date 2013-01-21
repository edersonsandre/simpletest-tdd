<?php

/**
* 
* Exemplo TDD com PHP utilizando o framework SimpleTest
*
* Angelito M. Goulart
* http://angelitomg.com
*
* 07/08/2012
* 
*
*/

require('simpletest/autorun.php');

require('testes.php');

class TestOfTestes extends UnitTestCase{

	function teste(){

		// Objeto da classe que queremos testar

		$obj = new Testes();
		$obj->xml = true;

		// Aqui vao os testes

		$this->assertTrue($obj->verificarNumero(1));

		$this->assertEqual($obj->escreverMensagem('Teste'), 'Teste');

	}

}

?>