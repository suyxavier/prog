<?php
	session_start();

	//RECEBE OS DADOS DE POS DO FORM DE LOGIN
	//VERIFICA SE ESTÃO CERTOS
	if (isset($_POST['usuario']) AND isset($_POST['senha'])) {
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		//VERIFICAR SE ESTÃO CERTOS
		//SE ESTIVER CERTO - CRIAR SESSÃO, E ARMAZENAR VALORES NELA E REDIRECIONA
		if ($usuario=='admin' AND $senha=='1234') {
			$_SESSION['nome'] = 'Administrador';
			$_SESSION['tipo'] = 'a';
			header("Location:index.php");

		}else{//SE NÃO - MENSAGEM DE ERRO E REDIRECIONA
			echo "Dados incorretos";
		}

	}else{
		echo "Preecha usuário e senha";
	}


