<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class healer extends Mobile {
	public function summon() {
		$this->name = "healer";
		$this->body = 175;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0x3E9;
		$this->str = rand(403, 850);
		$this->dex = rand(101, 150);
		$this->int = rand(503, 800);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 21;
		$this->damage_max = 33;
		$this->resist_physical = rand(85, 90);
		$this->resist_fire = rand(60, 70);
		$this->resist_cold = rand(60, 70);
		$this->resist_poison = rand(80, 90);
		$this->resist_energy = rand(80, 90);
		$this->karma = 22500;
		$this->fame = 22500;
		$this->virtualarmor = 100;

}}
?>
