<?php
session_start();
require 'config.php';
require 'class/user.class.php';

if(!empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$password = md5($_POST['password']);

	$users = new Users($pdo);

	if($users->doLogin($email, $password)) {
		header("Location: index.php");
		exit;
	} else {
		echo "Usuário e/ou senha estão errados!";
	}

}

?>
<h1>Login</h1>
<form method="POST">
	E-mail:<br/>
	<input type="email" name="email" /><br/><br/>

	Senha:<br/>
	<input type="password" name="password" /><br/><br/>

	<input type="submit" value="Entrar" />
</form>