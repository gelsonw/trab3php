<?php

class Usuario  {

	private $nome_usuario;  	
	
	public function setNome($nome)
	{
		$this->nome_usuario = trim($nome);
	}

	public function getNome()
	{
		return $this->nome_usuario;
	}
}
