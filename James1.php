<?php
namespace Cantores\TripHop;
use \PDO;

class James{
	private $canta;
	private $banco;

	public function __construct($canta){
		$this->canta = $canta;
		$this->banco = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
	}

	public function dizOi(){
		echo 'Oi eu sou o James Blunt, eu canto '. $this->canta;
	}
}