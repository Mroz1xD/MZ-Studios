<?php

session_start();

include("./conf/db.php");
require_once('./src/func.php');

if( isset($_GET['a']))
	$a = $_GET['a'];	
else
	$a = '';

require_once("./src/skelet/header.php");
require_once("./src/skelet/menu.php");

switch($a){
	case '':
		require_once("./src/skelet/main.php");
	break;
	case 'onas':
		require_once("./src/sites/onas.php");
	break;
	case 'produkty':
		require_once("./src/sites/produkty.php");
	break;
	case 'logowanie':
		require_once("./src/sites/logowanie.php");
	break;
	case'rejestracja':
		require_once("./src/sites/rejestracja.php");
	break;
}

require_once("./src/skelet/footer.php");

?>