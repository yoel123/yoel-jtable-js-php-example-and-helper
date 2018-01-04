<?php
require_once('config.php');

require_once('yapi/ytemplate/ytemplate_class.php');
require_once('yapi/ycrud/ycrud.php');
require_once('yapi/ycrud/jtable_actions.php');

if(session_status() == PHP_SESSION_NONE)
{
 session_start();
}
//print_r($_COOKIE);

//display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
		
		


?>

