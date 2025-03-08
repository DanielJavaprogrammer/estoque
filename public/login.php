<?php
// require "../includes/header.php";
require "../includes/footer.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gerenciador de estoque exlusivo Red House.">
    <meta name="keywords" content="estoque, gerenciamento, controle, produtos, inventário">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <title>Estoque</title>
</head>

<body>
    <main>
        <div class="formulario_login">
            <div class="formulario_login_logo">
                <div class="logo">
                    <img src="../public/assets/img/logo_rh.png" alt="logo redhouse">
                    <h1>Red House Estoque</h1>
                </div>
                <div class="descricao">
                    <p>Gestão de estoque escolar</p>
                </div>
            </div>
            <form action="../public/index.php" method="post">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" required>
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required>
                <button type="submit" id="btn_entrar">Entrar</button>
            </form>
        </div>
    </main>
</body>

</html>