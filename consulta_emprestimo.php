<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta Emprestimo</title>
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
    <th>ID emprestimo </th>
    <th>ISBN </th>
    <th>Id usuario </th>
    <th>id cliente </th>
    <th>data emprestimo </th>
    <th>data devolucao </th>
  </tr>
  <tbody>
    <?php
    include "conexao.php";

    $sql = "SELECT * FROM emprestimo";

    $dados = mysqli_query($con, $sql);

    while ($linha = mysqli_fetch_array($dados)) {
      $idLivro = $linha['isbn'];
      $idUsuario = $linha['id_usuario'];
      $idCliente = $linha['id_cliente'];
      $dataEmprestimo = $linha['data_emprestimo'];
      $dataDevolucao = $linha['data_devolucao'];

      echo "<tr>
                <td>$idLivro</td>
                <td>$idUsuario</td>
                <td>$idCliente</td>
                <td>$dataEmprestimo</td>
                <td>$dataDevolucao</td>
            </tr>";

    }
    ?>
  </tbody>
</table>

<a href="index.html">Voltar</a>
</body>

</html>