<?php defined('SYSPATH') or die('No direct script access.');

// Load Mustache for PHP
$mustache_src = Kohana::find_file('vendor', 'mustache/src/Mustache/Autoloader');
if (empty($mustache_src))
{
	throw new Exception("Can not find Mustache source. Did you forget to initialize the submodule?");
}
include $mustache_src;
Mustache_Autoloader::register();
