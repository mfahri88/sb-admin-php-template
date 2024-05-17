<?php
error_reporting(0);
function valiasiLogin() {
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
        // Hapus cookies user_id dan username
        setcookie('user_id', '', time() - 3600, '/');
        setcookie('username', '', time() - 3600, '/');
        
        // Akhiri session
        session_destroy();
        
        // Redirect ke halaman login
        header('Location: index.php');
        exit();
    } else {
        // User valid, require_once core.php
        require_once "core.php";
    }
}
valiasiLogin();
?>
