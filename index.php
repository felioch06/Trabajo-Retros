
<?php
/******** MODELS ************/
require_once('models/DB.php');
require_once('models/Usuario.php');
$controller=isset($_GET['c']) ? $_GET['c'] : 'Usuarios'; 
$method=isset($_GET['m']) ? $_GET['m'] : 'index';
require_once('controllers/'.$controller.'Controller.php');
call_user_func(["{$controller}Controller", $method]);
