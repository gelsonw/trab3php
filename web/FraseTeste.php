<?php
//Classe de teste: Frase

require_once 'Frase.php';
class FraseTeste extends PHPUnit_framework_TestCase 
{
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
