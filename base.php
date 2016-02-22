<?php
error_reporting(-1);
ini_set('display_errors', 'On');

function isGet(){
 return ($_SERVER['REQUEST_METHOD'] == "GET");
}

function isPost(){
 return ($_SERVER['REQUEST_METHOD'] == "POST");
}

function serverSupports(){
	return file_get_contents("server_perms.txt");
}

?>
