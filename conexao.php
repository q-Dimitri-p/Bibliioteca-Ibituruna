<?php
date_default_timezone_set('America/Sao_Paulo');
try{
    $pdo_SQLITE = new PDO('sqlite:livros.db3'); //ENTRADA
    echo 'Conectado com sucesso'; //SAÍDA
} catch (Exception $e) {
    echo 'NAO conectado = crie o banco de Dados SQLITE';
}