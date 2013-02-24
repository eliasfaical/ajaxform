<?php

	#conexao
	$hostname = 'localhost';
	$username = 'root';
	$password = '1234';
	$database = 'labz';

	try
	{
		$db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
		#$db->exec("SET CHARACTER SET utf8");
	}
	catch(PDOExtension $e)
	{
		echo "Erro ao conectar o banco de dados.";
	}

?>