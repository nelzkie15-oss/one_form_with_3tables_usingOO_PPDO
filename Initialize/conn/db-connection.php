<?php
	try{
	$db = new PDO('mysql:host=localhost;dbname=Insertinto3table_db;charset=utf8mb4', 'root','');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>