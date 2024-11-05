<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<h1 align="center" >Confirmação de Envio!</h1>

<?php

$conexao = new mysqli("localhost", "root", "", "formulario");

if (isset($_POST['nome']).($_POST['email']).($_POST['comentario']));
{

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $comentario = mysqli_real_escape_string($conexao, $_POST['comentario']);

    $query = "INSERT INTO dados (nome, email, comentario) VALUES ('$nome', '$email', '$comentario')";
    
    mysqli_query($conexao, $query);
}

    echo "<center> <p> Obrigado <b>$nome!!</b><br><br> Seu comentario foi enviado com sucesso!! </p>";

?>    

<div style="text-align: center;"><a href="index.html">VOLTAR</a> </div>

</body>
</html>