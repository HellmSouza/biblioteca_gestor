<?php
    #include("conexao.php");

    $dataPrevista = new DateTime(date('Y-m-d')); #receber data do banco ((getdata_prevista))
    $dataDevolução = new DateTime(date('Y-m-d')); #receber data do formulário

    $diferencaData = 0;
    $multa = 0;

    $diferencaData = $dataPrevista->diff($dataDevolução); #fazer um if para calcular o valor da multa de aordo com os dias de atraso
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolução</title>
</head>
<body>
<h1>Realizar Devolução</h1>
    <form action="envioEmail.php" method="POST">

    <p>
        <label>Nome do Livro</label> <!--puxar do banco -->
    </p>
    <p>
        <label>Nome do Autor</label> <!--puxar do banco -->
    </p>
    <p>
        <label>Lançamento</label> <!--puxar do banco -->
    </p>
    <p>
        <label>Data de Devolução</label> 
        <input type="date" name="data">
    </p>
    <p>
        <label>Houve Multa de Atraso?</label> <!--informar se houve dado $diferencaData-->
    </p>
    <p>
        <input type="submit" name="enviar" placeholder="Devolver">
    </p>
</body>
</html>