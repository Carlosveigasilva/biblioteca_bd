<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idCliente = $_POST['id_cliente'];
    $idLivro = $_POST['isbn'];
    $idUsuario = $_POST['id_usuario'];
    $dataEmprestimo = $_POST['data_emprestimo'];
    $dataDevolucao = $_POST['data_devolucao'];

    include "conexao.php";
    echo "<h1>Dados do Empréstimo:</h1>";
    echo "ID do Livro: " . $idLivro . "<br>";
    echo "ID do Usuário: " . $idUsuario . "<br>";
    echo "ID do Cliente: " . $idCliente . "<br>";
    echo "Data do Empréstimo: " . $dataEmprestimo . "<br>";
    echo "Data Prevista para Devolução: " . $dataDevolucao . "<br>";
} else {
    echo "Método de envio inválido.";
}

$sql = "INSERT INTO `emprestimo` ( `isbn`, `id_usuario`,`id_cliente`, `data_emprestimo`, `data_devolucao`)
VALUES ( '$idLivro', '$idUsuario', '$idCliente','$dataEmprestimo', '$dataDevolucao')";

// Executa a query e verifica se foi bem-sucedida
if (mysqli_query($con, $sql)) {
    echo "Empréstimo cadastrado com sucesso!";
    echo "<br> <a href='emprestimo.html'>Voltar</a>";
} else {
    // Exibe o erro específico do SQL, se houver
    echo "Erro no cadastro: " . mysqli_error($con);
}

mysqli_close($con); // Fecha a conexão com o banco de dados