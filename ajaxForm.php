<?php

require_once('./includes/connect.inc.php');

if(isset($_POST['username']) && isset($_POST['password'])){
	
	$username   = strip_tags(trim($_POST['username']));
	$password   = md5(trim($_POST['password']));
		
		// Verifica se o login já está cadastrado
		try {
			$sql = "select id from formlogin where password = :password";
			$resultado = $db->prepare($sql);
			$resultado->execute(array(':password'=>$password));
		} catch(PDOException $e){
			echo "Erro ao fazer consulta no banco de dados.";
		}
		
		if ( 0 < $resultado->rowCount() ){
			$mensagem = "Username já cadastrado.";
		}
		else
		{
			// Inseri os dados na tabela
			try {
				$sql = "INSERT INTO formlogin (username, password) values (:username, :password)";
				$resultado = $db->prepare($sql);
				$resultado->execute(array(':username'=>$username, ':password'=>$password));
				$mensagem = "Cadastro realizado com sucesso!";
			} catch (PDOException $e){
				$mensagem = "Erro ao realizar o cadastro.";
			}
		}

		echo $mensagem;	
	}

?>