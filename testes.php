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

class Testes{

	// Metodo que retorna true se o numero for maior que 0
	function verificarNumero($num = 0){
		
		return (intval($num) > 0) ? true : false;

	}

	
	// Metodo que imprime e retorna uma mensagem passada como parametro
	function escreverMensagem($msg){

		print $msg;

		return $msg;

	}

}

?>