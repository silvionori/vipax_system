<?php 

class conectar{
	private $servidor = "localhost";
	private $usuario = "ViannaPX";
	private $senha = "Mathy2510*";
	private $bd = "sistema2";

	public function conexao(){
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

		return $conexao;
	}
}

 ?>