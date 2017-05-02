<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Bogling extends Mobile {
	public function summon() {
		$this->name = "a bogling";
		$this->body = 779;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(96, 120);
		$this->dex = rand(91, 115);
		$this->int = rand(21, 45);
		$this->maxhits = rand(58, 72);
		$this->hits = $this->maxhits;
		$this->damage = 5;
		$this->damageMax = 7;
		$this->resist_physical = rand(20, 25);
		$this->resist_fire = rand(10, 20);
		$this->resist_cold = rand(15, 25);
		$this->resist_poison = rand(15, 25);
		$this->resist_energy = rand(15, 25);
		$this->karma = -450;
		$this->fame = 450;
		$this->virtualarmor = 28;

}}
?>
