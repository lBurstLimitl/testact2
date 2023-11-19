<?php
session_start();
require_once('config.php');

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
	$row = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($row){
		$_SESSION['login'] = $row['id'];
		$_SESSION['username']=$row['username'];
		echo 'Login Successfully';
	}else{
		echo 'There no user for that combo';		
	}
}else{
	echo 'There were errors while connecting to database.';
}