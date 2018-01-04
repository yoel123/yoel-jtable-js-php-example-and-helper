<?php
include "header.php";

$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
$pdo = new PDO($dsn, DB_USER, DB_PASSWORD);

$tbl = $_GET['tbl'];
$tbls = ["posts"];
$table_name = $tbls[$tbl];

$dir_table = new ycrud($pdo,$table_name);
$action_tst = new yjtable($dir_table);
$action = $_GET['action'];

if($action =="show")
{

	$from = $_REQUEST['jtStartIndex'];
	$to = $_REQUEST['jtPageSize'];
	
	$action_tst->select($from,$to);

}//end show

if($action =="edit")
{
	$action_tst->update($_POST);
}//end edit

if($action =="add")
{
	$action_tst->create($_POST);
}//end add

if($action =="deleate")
{
	$action_tst->deleate($_POST);
}//end deleate


?>