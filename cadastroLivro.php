<?php

#include(conexao.php);

if(isset($_POST['nome_livro']) || isset($_POST['nome_autor']) || isset($_POST['lancamento'])) {

    if(strlen($_POST['nome_livro']) == 0){
        echo "Insira o Nome do Livro";           
    } else if(strlen($_POST['nome_autor']) == 0)
        echo "Insira o Nome do Autor";
        else if(strlen($_POST['lancamento']) == 0){
         echo "Insira a data de Laçamento";
        $nomeLivro = $mysqli->real_escape_string($_POST['nome_livro']);
        $nomeAutor = $mysqli->real_escape_string($_POST['nome_autor']);
        $lancamento = $mysqli->real_escape_string($_POST['lancamento']);
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Livro</title>
</head>
<body>
    <h1>Cadastrar Livro</h1>
    <form action="" method="POST">
    <p>
        <label>Nome do Livro</label>
        <input type="text" name="nome_livro">
    </p>
    <p>
        <label>Nome do Autor</label>
        <input type="text" name="nome_autor">
    </p>
    <p>
        <label>Data de Lançamento</label>
        <input type="text" name="lancamento">
    </p>
    <p>
        <button type="submit">Cadastrar Livro</button>
    </p>
</body>
</html>