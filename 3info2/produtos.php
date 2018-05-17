
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Produtos</h1>
	<?php
	if (isset($_POST['busca'])) {
		$busca = $_POST['busca'];
		echo '<p>Você buscou pelo termo "'.$busca.'"</p>';	
	}

	if (isset($_GET['nome'])) {
		$categoria = $_GET['nome'];
		echo '<p>Você escolheu a categoria "'.$categoria.'"</p>';	
	}
	
?>
</body>
</html>

