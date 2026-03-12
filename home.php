<?php
$conexao = mysqli_connect("localhost", "root", "", "aulaprog");

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
} else {
    echo "Conexão bem-sucedida!";   
}

?>