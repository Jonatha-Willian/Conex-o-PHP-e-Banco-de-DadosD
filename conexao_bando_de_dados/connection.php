<?php
require_once 'env.php';

$dsn = "mysql:host=$ENV_HOST;dbname=$ENV_DBNAME"; // String de conexão com o BD


try {
    $pdo = new PDO($dsn, $ENV_USERNAME, $ENV_PASSWORD);
    echo 'Conexão bem sucedida <hr> <br>';
}catch(PDOException $e){
    echo 'Erro de Coenxão: ' . $e->getMessage();
}

