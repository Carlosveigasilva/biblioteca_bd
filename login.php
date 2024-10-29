<?php
$usuario_valido = "bibliotecario";
$senha_valida = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == $usuario_valido && $senha == $senha_valida) {
        echo "Login bem-sucedido! Bem-vindo(a), $login.";
    } else {
        echo "Login ou senha inválidos.";
    }
}
?>