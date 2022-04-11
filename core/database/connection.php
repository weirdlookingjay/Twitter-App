<?php

$dsn = 'mysql:host=localhost; dbname=twitter';
$user = 'root';
$pass = 'r00tadmin';

try {
	$pdo = PDO($dsn, $user, $pass);
} catch (PDOException $e) {
	echo 'Connection error! ' . $e->getMessage();
}
