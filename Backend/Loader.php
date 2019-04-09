<?php
namespace Backend;

class Loader
{
	static function autoload($class)
	{
		// var_dump($class);
		// $file = BASEDIR.'/'.str_replace("\\", "/", $class).".php";
		// var_dump($file);

		require BASEDIR.'/'.str_replace("\\", "/", $class).".php";
	}
}