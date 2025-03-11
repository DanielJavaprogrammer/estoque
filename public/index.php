<?php
require '../includes/header.php';


if ($_SERVER["REQUEST_METHOD" === 'Post']) {
    $usuario = filter_input(FILTER_DEFAULT, $usuario, FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    if (empty($usuario) || empty($senha)) {
        http_response_code(400);
        echo 'Os dados precisam ser preenchidos';
        die;
    }
}
?>

<DOCTYPE html>

    </html>