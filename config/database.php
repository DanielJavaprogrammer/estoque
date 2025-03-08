<?php

$host = "localhost";
$usuario = "estoque_user_daniel";
$senha = "senha_segura_1998";
$banco_dados = "estoque_redhouse";

try {
    // 1️⃣ Criando a conexão PDO
    $pdo = new PDO("mysql:host=$host;dbname=$banco_dados;charset=utf8", $usuario, $senha);
    // 2️⃣Configurar o PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // 3️⃣ Capturar erro e exibir mensagem personalizada
    die("Erro na conexao" . $e->getMessage());
}
