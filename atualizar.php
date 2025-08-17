<?php
require('conexao.php');

$userId = filter_input(INPUT_GET, 'userId', FILTER_DEFAULT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_DEFAULT);
$dataNAS = filter_input(INPUT_POST, 'dataNAS', FILTER_DEFAULT);

try {
    $sql = "UPDATE `cadastro` SET `nome`='$nome',`sobrenome`='$sobrenome',`dataNaS`='$dataNAS' WHERE userId = $userId";
    $statement = $pdo->query($sql);
    header('location:/');
} catch (PDOException $e) {
    echo 'Ops! Aconteceu um erro :' . $e->getMessage();
    exit();
}
