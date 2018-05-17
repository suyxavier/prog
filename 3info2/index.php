<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
</head>
<body>

<nav id="menu">
    <ul>
        <li><a href="produtos.php?categoria=1&nome=eletronicos">Eletrônicos</a></li>
        <li><a href="produtos.php?categoria=2&nome=esportes">Esportes</a></li>
        <li><a href="produtos.php?categoria=3&nome=moveis">Móveis</a></li>
        <li><a href="produtos.php?categoria=4&nome=roupas">Roupas</a></li>
    </ul>
</nav>
	<form method="post" action="produtos.php">
		<input type="text" name="busca" placeholder="Pesquisar">
		<input type="submit" value="Buscar">
	</form>

<br>
<?php
    if (isset($_SESSION['nome']) AND $_SESSION['tipo'] == 'a'){
        ?>
    	<p>Olá<?= $_SESSION['nome'] ?> | <a href="logout.php">sair</a>
<?php
    }else{
        ?>
	<form method="post" action="login.php">
		<input type="text" name="usuario" placeholder="Nome de usuario">
		<input type="password" name="senha" placeholder="Senha">
		<input type="submit" value="Entrar">
	</form>
	<?php
    }
    ?>
</body>
</html>