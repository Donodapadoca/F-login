<?php

define('HOST','127.0.1');
define('USUARIO','root');
define('EMAIL','user@userconfig.com');
define('SENHA','umdoistresquarto');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, EMAIL, SENHA, DB) or die ('Não foi Possivel Cadastrar');
 

?>