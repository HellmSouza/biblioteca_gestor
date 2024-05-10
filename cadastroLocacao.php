<?php
    #include("conexao.php");

    if(isset($_POST['nome']) || isset($_POST['telefone']) || isset($_POST['email'])) {

        if(strlen($_POST['nome']) == 0){
            echo "Insira o Nome do Locador";           
        } else if(strlen($_POST['email']) == 0)
            echo "Insira o email do Locador";
            else if(strlen($_POST['livro']) == 0){
             echo "Insira o nome do livro Locado"; #puxar nome do banco
            $nome = $mysqli->real_escape_string($_POST['nome']);
            $telefone = $mysqli->real_escape_string($_POST['email']);
            $email = $mysqli->real_escape_string($_POST['livro']);
            #$sql = "INSER INTO locacoes (livro, nome, email, dataLocacao) VALUES (livro_id, cliente_nome, cliente_email, data_locacao);
            # if (mysqli_querry($mysqli, $sql)){
                #echo "Locação Realizada";
            #} else {
                #echo "Desculpe, ocorreu um erro ao salvar!" . $sql . "<br>" . mysqli->connect_error ($mysqli);
            #}
            #mysqli_close($mysqli);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Locação</title>
</head>
<body>
    <h1>Informações de Locação</h1>
    <form action="" method="POST">
    <p>
        <label>Nome do Locador</label>
        <input type="text" name="nome">
    </p>
    <p>
        <label>Telefone</label>
        <input type="text" name="livro">
    </p>
    <p>
        <label>E-mail</label>
        <input type="text" name="email">
        <p>
        <label>Data de Locação</label>
        <input type="date" name="dataLocacao">
    </p>
    </p>
    <p>
        <label>Livro Locado</label>
    </p>
    <p>
        <button type="submit">Realizar Locação</button>
    </p>
    <p>
        <button type="submit">Voltar</button>
    </p>
</body>
</html>