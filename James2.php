<?php
namespace Cantores\HeavyMetal;

class James{
	private $canta;

	public function __construct($canta){
		$this->canta = $canta;
	}

	public function dizOi(){
		echo 'Oi eu sou o James Hatfield, eu canto '. $this->canta;
	}
}