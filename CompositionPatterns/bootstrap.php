<?php

define("BASE_PATH", dirname(__FILE__));

spl_autoload_register(function ($class) {
    $filename = BASE_PATH . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
	if(file_exists($filename)){
		include($filename);	
	}
	
});