<?php

	$db_host='localhost';
	$db_user='root';
	$db_pass='';
	$db_name='credit';

	try {
		$pdo= new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo $e->getMessage();
	}

?>
<!--
INSERT INTO users (user_id,user_name,email,user_credits) VALUES
(1,'Shweta Dundale','shwetaundale@gmail.com',2000),
(2,'Blessy Thomas','blessythomas.com',600),
(3,'Prajkta Ghorpade','prajktaghorpade@gmail.com',1100);

-->