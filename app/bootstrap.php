<?php
//load config .php
require_once 'config/config.php';
//loading the library....
/*require_once 'library/Core.php';
require_once 'library/Controller.php';
require_once 'library/Database.php';*/
//auto load call library;...
spl_autoload_register(function($className){
require_once 'library/'.$className . '.php';
});
?>