<?php 
function auto_load($class) {
	include __DIR__ . '/classes/' . $class . '.php' ;
}
spl_autoload_register('auto_load');
?>