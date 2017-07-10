<?php

class Frase  {

	private $frase;  	
	private $corTexto;  	
	private $corFundo;  	
	
	public function setFrase($texto)
	{
		$this->frase = trim($texto);
	}

	public function getFrase()
	{
		return $this->frase;
	}

	public function setCorTexto($cor)
	{
	  	$this->corTexto = $cor;
	}

	public function getCorTexto()
	{
		return $this->corTexto;
	}

        public function setCorFundo($cor_fundo)
	{
		$this->cor_fundo = $cor_fundo;
	}

	public function getCorFundo()
	{
		return $this->corFundo();
	}
       
}
