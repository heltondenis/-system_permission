<?php 
require 'config.php';
require 'class/user.class.php';

	if(!isset($_SESSION['logado'])) {
		header("Location: login.php");
		exit;
	}

	$users = new Users($pdo);
	$users->setUser($_SESSION['logado']);
 ?>

 <h1>Sistema</h1>