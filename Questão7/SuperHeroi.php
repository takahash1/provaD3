<?php

class SuperHeroi{

	private $id;
	private $nome;
	private $poderEspecial;
	private $energia; 
	private $forca;
	private $origem;

	public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem){
		$this->id = $id;
		$this->nome = $nome;
		$this->poderEspecial = $poderEspecial;
		$this->energia = $energia;
		$this->forca = $forca;
		$this->origem = $origem;
		echo __CLASS__;
	}

	public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getPoderEspecial(){
        return $this->poderEspecial;
    }

    public function setPoderEspecial($poderEspecial){
        $this->poderEspecial = $poderEspecial;
    }

    public function getEnergia(){
        return $this->energia;
    }

    public function setEnergia($energia){
        $this->energia = $energia;
    }

    public function getForca(){
        return $this->forca;
    }

    public function setForca($forca){
        $this->forca = $forca;
    }

    public function getOrigem(){
        return $this->origem;
    }

    public function setOrigem($origem){
        $this->origem = $origem;
    }

    public function aumentarEnergia($energia){
    	$ra = 11910189;
    	$this->energia = $energia*$ra;
    	return energia;
    }

     public function calcularPoderMedio($energia, $forca){
    	$media = ($energia+$forca)/2;
    	$this->media = $media; 
    	return media;
    }
}	

    $hero = new SuperHeroi(1, "Harry Potter", "Vingardium leviossa", 9000, 5000, "Hogwarts");
    $hero1 = new SuperHeroi(2, "Goku", "Genkidama", 15000, 10000, "Planeta sei lá não lembro kkk");
    $hero2 = new SuperHeroi(3, "Michelangelo", "Lutar igual ninja", 10, 9, "Esgotos de NY");
    $hero3 = new SuperHeroi(4, "Homem de ferro", "Ser milionário", 5000, 10000, "De algum lugar dos EUA");

    var_dump($hero);
    var_dump($hero1);
    var_dump($hero2);
    var_dump($hero3);

 

//não manjo nada de heroi deu pra ver né professor KKKKKKK
?>