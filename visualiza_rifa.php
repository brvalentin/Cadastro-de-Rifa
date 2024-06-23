<?php
include("conecta.php");

$sql = "SELECT id, nome_rifa, descricao, preco, nome_comprador, telefone, endereco FROM rifas";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nome da Rifa</th><th>Descrição</th><th>Preço</th><th>Nome do Comprador</th><th>Telefone</th><th>Endereço</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nome_rifa"]. "</td><td>" . $row["descricao"]. "</td><td>" . $row["preco"]. "</td><td>" . $row["nome_comprador"]. "</td><td>" . $row["telefone"]. "</td><td>" . $row["endereco"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

mysqli_close($conn);
?>
