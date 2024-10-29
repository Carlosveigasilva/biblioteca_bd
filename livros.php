<?php
$nome = $_POST['nome_livro'];
$isbn = $_POST['isbn'];
$editora = $_POST['editora'];
$autor = $_POST['nome_autor'];
$paginas = $_POST['num_pagina'];
$classificacao = $_POST['classificacao'];
$genero = $_POST['genero'];
$estoque = $_POST['estoque'];

include "conexao.php";

echo "<h2>Dados do Livro Cadastrado:</h2>";
echo'ISBN: ' . $isbn . "<br>";
echo "Nome: " . $nome . "<br>";
echo "Editora: " . $editora . "<br>";
echo "Autor: " . $autor . "<br>";
echo "Páginas: " . $paginas . "<br>";
echo "Classificação Indicativa: " . $classificacao . "<br>";
echo "Gênero: " . $genero . "<br>";
echo "Estoque: " . $estoque . "<br>";

$sql = "INSERT INTO `livro` ( `isbn`, `nome_livro`, `editora`, `nome_autor`, `num_pagina`, `classificacao`, `genero`, `estoque`)
VALUES ('$isbn', '$nome', '$editora', '$autor', '$paginas', '$classificacao', '$genero', '$estoque')";

// Executa a query e verifica se foi bem-sucedida
if (mysqli_query($con, $sql)) {
echo "Livro cadastrado com sucesso!";
echo "<br> <a href='cad_livro.html'>Voltar</a>";
} else {
// Exibe o erro específico do SQL, se houver
echo "Erro no cadastro: " . mysqli_error($con);
}

mysqli_close($con); // Fecha a conexão com o banco de dados