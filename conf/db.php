<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'mzstudiosweb';

$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

try {
	$PDO = new PDO($dsn,$user,$password);

}catch(PDOException $e){
	echo $e->getMessage();
}
?>