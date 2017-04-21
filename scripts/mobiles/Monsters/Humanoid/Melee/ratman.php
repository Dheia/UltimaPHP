<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class ratman extends Mobile {
	public function summon() {
		$this->name = "ratman";
		$this->body = 155;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0x45A;
		$this->str = rand(301, 350);
		$this->dex = rand(26, 40);
		$this->int = rand(151, 200);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 8;
		$this->damage_max = 10;
		$this->resist_physical = rand(35, 45);
		$this->resist_fire = rand(20, 30);
		$this->resist_cold = rand(50, 70);
		$this->resist_poison = rand(40, 50);
		$this->resist_energy = rand(20, 30);
		$this->karma = -6000;
		$this->fame = 6000;
		$this->virtualarmor = 40;

}}
?>
