<?php
session_start();

global $pdo;
try {
	$pdo = new PDO("mysql:dbname=classifieds_project;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
}
?>