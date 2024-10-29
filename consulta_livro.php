<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta Livro</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">
</head>
</head>

<body>
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
</body>
<h1>Consulta</h1>
<br>
<table style="border: 1px solid black">
  <tr>
    <th>ISBN </th>
    <th>Nome </th>
    <th>Editora </th>
    <th>Autor </th>
    <th>Paginas</th>
    <th>Classificação</th>
    <th>Gênero</th>
    <th>Estoque</th>
  </tr>
  <tbody>
    <?php
    include "conexao.php";

    $sql = "SELECT * FROM livro";

    $dados = mysqli_query($con, $sql);

    while ($linha = mysqli_fetch_array($dados)) {
      $isbn = $linha['isbn'];
      $nome = $linha['nome_livro'];
      $editora = $linha['editora'];
      $autor = $linha['nome_autor'];
      $paginas = $linha['num_pagina'];
      $classificacao = $linha['classificacao'];
      $genero = $linha['genero'];
      $estoque = $linha['estoque'];



      echo "<tr>
                <td>$isbn</td>
                <td>$nome</td>
                <td>$editora</td>
                <td>$autor</td>
                <td>$paginas</td>
                <td>$classificacao</td>
                <td>$genero</td>
                <td>$estoque</td>
            </tr>";

    }
    ?>
  </tbody>
</table>

<a href="index.html">Voltar</a>
</body>

</html>