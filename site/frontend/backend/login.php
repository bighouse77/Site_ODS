<?php

    //CONEXÃO COM O BANCO DE DADOS
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'site_ods');

    $banco = new PDO('mysql:host='.HOST.'; dbname='.DB_NAME,USER,PASSWORD);
    //*****************************/

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $usuario = array($login, $senha);

    
    $consulta = $banco -> prepare(
        "SELECT CPF_CNPJ, Senha
        FROM cadastro
        WHERE 
        CPF_CNPJ = $login AND
        Senha = $senha"
    );

    $consulta -> execute();

    $linhas = $consulta -> rowCount();

    if($linhas == 0) {
        echo "<h1>ERROR_00X7045</h1><h3>SENHA OU USUARIO NAO CADASTRADO!</h3>";
    }

    else {
        echo "<h1>É ISSO!</h1>";
    }

?>