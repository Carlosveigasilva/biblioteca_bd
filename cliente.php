<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome_cliente'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST ['telefone'];
    $endereco = $_POST ['endereco'];

    include "conexao.php";
    echo "<h1>Dados Cadastrados:</h1>";
    echo "Nome do cliente: " . $nome . "<br>";
    echo "CPF: " . $cpf . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Endereço: " . $endereco . "<br>";
} else {
    echo "Método de envio inválido.";
}

$sql = "INSERT INTO `cliente` (`nome_cliente`, `cpf`, `telefone`, `email`,  `endereco`)
VALUES ('$nome', '$cpf', '$telefone', '$email',  '$endereco')";

// Executa a query e verifica se foi bem-sucedida
if (mysqli_query($con, $sql)) {
echo "Cliente cadastrado com sucesso!";
echo "<br> <a href='cad_cliente.html'>Voltar</a>";
} else {
// Exibe o erro específico do SQL, se houver
echo "Erro no cadastro: " . mysqli_error($con);
}

mysqli_close($con); // Fecha a conexão com o banco de dados
?>