<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class daemon extends Mobile {
	public function summon() {
		$this->name = "daemon";
		$this->body = 140;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0x45A;
		$this->str = rand(116, 150);
		$this->dex = rand(91, 115);
		$this->int = rand(161, 185);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 4;
		$this->damage_max = 14;
		$this->resist_physical = rand(25, 35);
		$this->resist_fire = rand(30, 40);
		$this->resist_cold = rand(20, 30);
		$this->resist_poison = rand(30, 40);
		$this->resist_energy = rand(30, 40);
		$this->karma = -3000;
		$this->fame = 3000;
		$this->virtualarmor = 30;

}}
?>
