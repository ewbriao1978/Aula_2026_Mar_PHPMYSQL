
<?php

$id_para_ser_editado = $_POST["id_para_ser_editado"];

$conexao = mysqli_connect("localhost", "root", "", "aulaprog");
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$query = "SELECT nome,preco, quantidade FROM my_table WHERE id = " . $id_para_ser_editado;

$resultado = mysqli_query($conexao, $query);
$row = mysqli_fetch_assoc($resultado);

?>


<form action="atualizar_no_bd.php" method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$row["nome"];?>" required><br><br>

    <label>Preço:</label>
    <input type="number"  name="preco" value="<?=$row["preco"];?>" step="0.01" required><br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" value="<?=$row["quantidade"];?>" required><br><br>

    <input type="hidden" name="id_para_ser_atualizado" value="<?=$id_para_ser_editado;?>">

    <input type="submit" value="Editar Produto">   
</form>
