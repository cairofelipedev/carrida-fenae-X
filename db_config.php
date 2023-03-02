<?php 
	$DB_HOST = '${{ secrets.SECRET_DB_HOST }}';
	$DB_USER = '${{ secrets.SECRET_DB_USER }}';
	$DB_PASS = $_ENV['SECRET_DB_PASS'];
	$DB_NAME = $_ENV['SECRET_DB_NAME'];
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
