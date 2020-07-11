<?php namespace FGTA4\module; if (!defined('FGTA4')) { die('Forbiden'); } 
if (__TEMPLATE!='fgta-content') die('Module ini hanya bisa menggunakan template fgta-content');

class HeadBig extends WebModule {
	
	public function LoadPage() {
	}
}

$MODULE = new HeadBig();