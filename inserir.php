<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
</head>
<body>

<form action="inserir.php" method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Preço:</label>
    <input type="number"  name="preco" step="0.01" required><br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" required><br><br>

    <input type="submit" value="Inserir Produto">   
</form>
</body>
</html>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    $conexao = mysqli_connect("localhost", "root", "", "aulaprog");

    if (!$conexao) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    $query = "INSERT INTO my_table (nome, preco, quantidade) VALUES ('$nome', '$preco', '$quantidade')";
   // echo "Query SQL: " . $query . "<br>";

    if (mysqli_query($conexao, $query)) {
        echo "Produto inserido com sucesso!";
    } else {
        echo "Erro ao inserir produto: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);

}

?>

<br>
<a href="home.php">Voltar para Home</a>