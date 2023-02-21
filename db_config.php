<?php 
	$DB_USER = 'apcefp08_site';
	$DB_PASS = '@Apcef321!02';
	$DB_NAME = 'apcefp08_site';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>
