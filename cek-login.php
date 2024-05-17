<?php
error_reporting(0);
require_once "core.php";

function loginUser($username, $password, $pdo){
	$stmt = $pdo->prepare("SELECT * FROM tabel_user WHERE username=:username");
	$stmt->bindParam(':username', $username, PDO::PARAM_STR);
	$stmt->execute();
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($user && password_verify($password, $user['password'])) {
		session_start();
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['username'] = $user['username'];

		$cookieExpire = time() + 30 * 24 * 60 * 60; // 30 days
		setcookie('user_id', $user['id'], $cookieExpire, '/');
		setcookie('username', $user['username'], $cookieExpire, '/');

		return true;
	} else {
		return false;
	}
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (loginUser($username, $password, $pdo)) {
		header('Location: container.php');
		exit();
	} else {
		header('Location: index.php');
	}
}

?>
