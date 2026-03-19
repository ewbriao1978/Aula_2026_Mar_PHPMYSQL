<?php
require_once 'db.php';

$id_para_ser_editado = $_POST["id_para_ser_atualizado"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

$conexao = getConexao();
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$query = "UPDATE my_table SET nome = '$nome', preco = $preco, quantidade = $quantidade WHERE id = $id_para_ser_editado";


if (mysqli_query($conexao, $query)) {
    echo "Produto atualizado com sucesso!";
} else {
    echo "Erro ao atualizar produto: " . mysqli_error($conexao);
}

mysqli_close($conexao);

echo "<br><a href='home.php'>Voltar para Home</a>";

?>