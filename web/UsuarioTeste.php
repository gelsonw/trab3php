<?php
//Classe de teste: Usuario

require_once 'Usuario.php';
class UsuarioTeste extends PHPUnit_framework_TestCase 
{
	
	public function setUp() 
	{
		$this->usuario = new Usuario();
	}

        /**
        * @test
        */
	public function testaNomeNaoVazio()
	{
		
            $usuario = new Usuario();
            
            $usuario->setNome('Gelson');
            //$usuario->setNome('');

            $this->assertNotEmpty($usuario->getNome());
	}

}
