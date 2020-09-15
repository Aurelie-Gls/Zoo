<?php 

class Autoloader{

	static function autoload($class){
		require 'Class/'.$class.'.php';
	}

	static function register(){
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}
}
