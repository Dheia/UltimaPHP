<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class magicwand extends Object {
	public function build() {
		$this->name = "magic wand";
		$this->graphic = 0xDF2;
		$this->type = "";
		$this->flags = 0x00;
		$this->value = 0;
		$this->amount = 1;
		$this->color = 0x47E;
		$this->aosstrengthreq = 5;
		$this->aosmindamage = 9;
		$this->aosmaxdamage = 11;
		$this->aosspeed = 40;
		$this->mlspeed = 2;
		$this->oldstrengthreq = 0;
		$this->oldmindamage = 2;
		$this->oldspeed = 35;
		$this->defhitsound = 0x233;
		$this->defmisssound = 0x239;
		$this->hits = 31;
		$this->maxHits = 110;
		$this->weight = 1.0;

}}
?>