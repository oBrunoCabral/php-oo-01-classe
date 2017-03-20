<?php 
class Pessoa {
	var $Genero;
	var $Cor;
	var $Idade;
	var $Peso;
	var $Altura;

	function ImprimeDados(){
		print 'Gênero: ' . $this->Genero . "\n";
		print 'Cor: ' . $this->Cor . "\n";
		print 'Idade: ' . $this->Idade . "\n";
		print 'Peso: ' . $this->Peso . "\n";
		print 'Altura: ' . $this->Altura . "\n";
	}

}
?>