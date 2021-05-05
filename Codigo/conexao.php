<?php
define('HOST', 'sql306.epizy.com');
define('USUARIO', 'epiz_27945376');
define('SENHA', 'jqsgV7wMOS');
define('DB', 'epiz_27945376_web');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');