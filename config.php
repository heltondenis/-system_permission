<?php
try {
	$pdo = new PDO("mysql:dbname=system_permission;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}