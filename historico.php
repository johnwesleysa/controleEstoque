<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--reset css-->
  <link rel="stylesheet" href="src/style/reset.css">

  <!--style css-->
  <link rel="stylesheet" href="src/style/style.css">

    <!--Fonte Roboto by Google-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,900;1,700&display=swap" rel="stylesheet">
  
  <title>Estoque Toner</title>
</head>
<body>

  <!--Header-->
<header class="header">
  <div class="logo">
    <p>Escola <strong>Eleva</strong><br>Recife</p>
  </div>
  <div class="lista-nav">
    <nav class="navegacao">
      <ul class="lista-links">
        <li class="item-lista-links"><a href="index.php">Home</a></li>
        <li class="item-lista-links"><a href="historico.php">Histórico</a></li>
        <li class="item-lista-links"><a href="#">Teste</a></li>
        <li class="item-lista-links"><a href="#">Teste</a></li>
      </ul>
    </nav>
  </div>
</header>

  <!--Body-->
<div class="content">
    <div class="historico">
        <h1>Histórico das últimas atualizações do Estoque</h1>
        <table class="historico-estoque">
            <thead class="item-historico-estoque">
                <th>Item</th>
                <th>Quantidade</th>
                <th>Data</th>
            </thead>
            <tbody>
                <tr>
                    <td>Toner Amarelo</td>
                    <td>Removido 10</td>
                    <td>15/05/2023</td>
                </tr>
                <tr>
                    <td>Toner Amarelo</td>
                    <td>Adicionado 10</td>
                    <td>15/05/2023</td>
                </tr>
                <tr>
                    <td>Toner Ciano</td>
                    <td>Adicionado 10</td>
                    <td>15/05/2023</td>
                </tr>
                <tr>
                    <td>Toner Preto</td>
                    <td>Removido 10</td>
                    <td>15/05/2023</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


  <!--Footer-->
<footer class="footer">
  <h3>Escola Eleva Recife</h3>
  <p>Criado por <strong>John Wesley</strong></p>
</footer>


</body>
</html>