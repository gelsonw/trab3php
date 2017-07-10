<?php

class Frase  {

	private $frase;  	
	
	public function setFrase($texto)
	{
		$this->frase = trim($texto);
	}

	public function getFrase()
	{
		return $this->frase;
	}
