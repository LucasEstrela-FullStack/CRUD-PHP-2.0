<?php
require('conexao.php');
try {
    $userId = filter_input(INPUT_GET, 'userId', FILTER_DEFAULT);
    $sql = "DELETE FROM `cadastro` WHERE userId = $userId";
    $statement = $pdo->query($sql);
    header('location:/');
} catch (PDOException $e) {
    echo 'Ops! Aconteceu um erro :' . $e->getMessage();
    exit();
}
