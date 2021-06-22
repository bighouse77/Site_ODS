<?php
    
    //CONEXÃO COM O BANCO DE DADOS
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'site_ods');

    $banco = new PDO('mysql:host='.HOST.'; dbname='.DB_NAME,USER,PASSWORD);
    //*****************************/
    
    $nome = $_POST['nome'];  
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];

    $dados = array($nome, $cpf, $email, $senha);

    $gravar = $banco->prepare(
        "INSERT INTO cadastro (Nome, CPF_CNPJ, Email, Senha)
        VALUES (?, ?, ?, ?)"
    );
    $gravar -> execute($dados);

    if($gravar) {
        header('Location: login.html');
    }


    

?>