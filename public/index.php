<?php
require '../includes/header.php';


if ($_SERVER["REQUEST_METHOD" === 'POST']) {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = $_POST['password'] ?? '';

    if (empty($usuario) || empty($senha)) {
        http_response_code(400);
        echo 'Os dados precisam ser preenchidos';
        die;
    }

    $prep = $pdo->prepare("SELECT * FROM usuario WHERE nome_usuario = ?");
    
}
