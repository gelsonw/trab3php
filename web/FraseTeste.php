<?php
//Classe de teste: Frase

require_once 'Frase.php';
class FraseTeste extends PHPUnit_framework_TestCase 
{

	//To-do: Validar Cor
	//
	//^ match beginning
	//# a hash
	//[a-f0-9] any letter from a-f and 0-9
	//{6} the previous group appears exactly 6 times
	//$ match end
	//i ignore case
	//
	//
	// var isOk  = /(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test('#ac3') // for #f00 (Thanks Smamatti)

        /**
        * @test
        */
	public function testaFraseVazia()
	{
            $frase = new Frase();
            $this->assertEmpty($frase->getFrase());
	}

	public function testaGetFrase()
	{
            $frase = new Frase();
	    $frase->setFrase("Frase");
            $this->assertEquals('Frase',$frase->getFrase());
	}

}
