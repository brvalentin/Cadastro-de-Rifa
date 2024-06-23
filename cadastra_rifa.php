<?php
include("conecta.php");

// Recebe os dados do formulário de cadastro de rifas
$nome_rifa = $_POST['nome_rifa'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$nome_comprador = $_POST['nome_comprador'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

// Insere os dados no banco de dados
$sql = "INSERT INTO rifas (nome_rifa, descricao, preco, nome_comprador, telefone, endereco) VALUES ('$nome_rifa', '$descricao', '$preco', '$nome_comprador', '$telefone', '$endereco')";
if (mysqli_query($conn, $sql)) {
    echo "Rifa cadastrada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
