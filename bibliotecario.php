<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome_usuario'];
    $cpf = $_POST['cpf'];
    $data_nasc = $_POST['data_nasc'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $termos = isset($_POST['termos_e_condicoes']) ? "Aceitou" : "Não aceitou";

    include "conexao.php";
    echo "<h1>Dados Cadastrados:</h1>";
    echo "Nome do Usuário: " . $nome . "<br>";
    echo "CPF: " . $cpf . "<br>";
    echo "Data de Nascimento: " . $data_nasc . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Senha: " . $senha . "<br>";
} else {
    echo "Método de envio inválido.";
}
$sql = "INSERT INTO `usuario` (`nome_usuario`, `cpf`, `data_nasc`, `email`, `senha`, `termos_e_condicoes`)
VALUES ('$nome', '$cpf', '$data_nasc', '$email', '$senha', '$termos')";

// Executa a query e verifica se foi bem-sucedida
if (mysqli_query($con, $sql)) {
echo "Usuário cadastrado com sucesso!";
echo "<br> <a href='cad_usuario.html'>Voltar</a>";
} else {
// Exibe o erro específico do SQL, se houver
echo "Erro no cadastro: " . mysqli_error($con);
}

mysqli_close($con); // Fecha a conexão com o banco de dados
?>
?>

