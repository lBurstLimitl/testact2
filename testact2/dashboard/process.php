<?php
session_start();
require_once('config.php');
?>
<?php

if(isset($_POST)){
	$petname 		= $_POST['petname']; 
	$ownerid = $_SESSION['login'];  
	$breed 		= $_POST['breed']; 
	$gender 			= $_POST['gender'];
	$birthdate 		= $_POST['birthdate']; 
    
		$sql = "INSERT INTO pets (petname,ownerid, breed, gender,birthdate) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$petname,$ownerid, $breed, $gender,$birthdate]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}