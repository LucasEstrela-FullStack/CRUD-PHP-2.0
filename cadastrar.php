<?php 

require('conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_DEFAULT);
$dataNAS = filter_input(INPUT_POST, 'dataNas', FILTER_DEFAULT);

try{
    $sql = "INSERT INTO `cadastro`(nome, sobrenome, dataNas) VALUES ('$nome', '$sobrenome', '$dataNas')";
    $statement = $pdo->query($sql);
    header('location:/');
} catch (PDOException $e){
    echo 'Ops! Aconteceu um erro :' . $e->getMessage();
    exit();
}