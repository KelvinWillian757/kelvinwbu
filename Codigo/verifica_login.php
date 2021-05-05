<?php
//verifica se o usuario esta logado para acesssar as paginas
if(!$_SESSION['usuario']) {
	header('Location: index.php');
	exit();
}
?>