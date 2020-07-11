<?php namespace FGTA4\module; if (!defined('FGTA4')) { die('Forbiden'); } 


class Module extends WebModule {
	
	public function __construct() {
		
	}

	public function LoadPage() {
		$this->test = 'hahaha';
		$this->miniheader = true;
	}
}

$MODULE = new Module();