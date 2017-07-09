<?php
//Classe de teste: Usuario

require_once 'Usuario.php';
class UsuarioTeste extends PHPUnit_framework_TestCase 
{
	
        /**
        * @test
        */
	public function testaNomeVazio()
	{
            $usuario = new Usuario();
            $this->assertEmpty($usuario->getNome());
	}

        public function testaNome()
	{
            $usuario = new Usuario();
	    $usuario->setNome('Gelson');
            $this->assertEquals('Gelson',$usuario->getNome());
	}

}
