<?php
$conexao = mysqli_connect("localhost", "root", "", "aulaprog");

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
} else {
    echo "Conexão bem-sucedida!<br>";   
}

$query = "SELECT id, nome,preco, quantidade FROM my_table";

$resultado = mysqli_query($conexao, $query);

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th> # </th>
        <th> # </th>
    </tr>



<?php


while ($row = mysqli_fetch_assoc($resultado)) {
    echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Preço: " . $row["preco"] . " - Quantidade: " . $row["quantidade"] . "<br>";
}
echo "<br>";
?>

<table>

<hr>

<?php
echo "Total de registros: " . mysqli_num_rows($resultado);


?>