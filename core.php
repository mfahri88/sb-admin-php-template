<?php 
//error_reporting(0);
//setlocale(LC_ALL, 'en_US.UTF-8');
//date_default_timezone_set('America/New_York');

$db_host = 'localhost';
$db_name = 'fahriwebdesign';
$db_user = 'root';
$db_pasw = '';

try {
	$pdo = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pasw);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
}
?>