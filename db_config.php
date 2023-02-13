<?php 
	$DB_HOST = 'localhost';
	$DB_USER = '${{ secrets.DB_USER }}';
	$DB_PASS = '${{ secrets.DB_PASS }}';
	$DB_NAME = '${{ secrets.DB_NAME }}';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>