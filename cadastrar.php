<?php

require('conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_DEFAULT);
$dataNas = filter_input(INPUT_POST, 'daaNas', FILTER_DEFAULT);

try{
    $sql = "INSERT INTO `cadastro`(nome, sobrenome, dataNas) VALUES('$nome', '$sobrenome', '$$dataNas')";
    $statement = $pdo->query($sql);
    header('location: index.php ');
}catch(PDOException $e){
    echo "Ops! Algo deu errado". $e->getMessage();
    exit();
}
