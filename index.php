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

    <!--Div que mostra os itens e as quantidades do banco de dados-->
    <div class="listar">
      <div class="title">
        <h1>Itens em Estoque</h1>
        <p>Impressora Xerox</p>
      </div>
      <table class="tbItensEstoque">
        <thead>
          <tr>
            <th class="tbTitle">Item</th>
            <th class="tbTitle">Quantidade</th>
          </tr>
        </thead>
        <!--Chamando o arquivo listar.php para exibir na tela a consulta sql-->
        <tbody>
          <?php
            include"php/listar.php";
          ?>
        </tbody>
      </table>
    </div>


    <!--Div para adicionar ou remover algo do bd-->
    <div class="adicionar-remover-bd">

      <!--Adicionar item ao BD-->
      <div class="adicionar-bd">
        <h1>Adicionar Item ao estoque</h1> <br>
        <form action="php/processa.php" method="post">
          <div class="selecionar-quantidade-add">
            <label for="adicionar-item">Selecione um item: </label>
            <select name="adicionar_item" id="adicionar-item">
              <option value="" selected>Selecione uma opção</option>
              <option value="Toner Amarelo">Toner Amarelo</option>
              <option value="Toner Ciano">Toner Ciano</option>
              <option value="Toner Magenta">Toner Magenta</option>
              <option value="Toner Preto">Toner Preto</option>
              <option value="Cartucho de Residuo">Cartucho de Resíduo</option>
            </select> <br> <br>
          </div>
          <div class="adicionar-quantidade-add">
            <label for="number">Insira a quantidade: </label>
            <input type="number" name="adicionar_quantidade" class="adicionar-quantidade" placeholder="Digite aqui">
            <input type="submit" name="enviar_formulario" class="enviar-formulario" value="enviar">
          </div>
        </form>
      </div> <br> <br>

      <!--Remover item do BD-->
      <div class="remover-bd">
        <h1>Remover Item do estoque</h1> <br>
        <form action="php/remove.php" method="post">
          <div class="selecionar-quantidade-remove">
            <label for="remover-item">Selecione um item: </label>
            <select name="remover_item" id="remover-item">
              <option value="" selected>Selecione uma opção</option>
              <option value="Toner Amarelo">Toner Amarelo</option>
              <option value="Toner Ciano">Toner Ciano</option>
              <option value="Toner Magenta">Toner Magenta</option>
              <option value="Toner Preto">Toner Preto</option>
              <option value="Cartucho de Residuo">Cartucho de Resíduo</option>
            </select> <br> <br>
          </div>
          <div class="adicionar-quantidade-remove">
            <label for="quantidade">Insira a quantidade: </label>
            <input type="number" name="remover_quantidade" class="remover-quantidade" placeholder="Digite aqui">
            <input type="submit" name="enviar_formulario" class="enviar-formulario_remover" value="enviar">
          </div>
        </form>
      </div>
    </div>

  </div>

  <!--Footer-->
  <footer class="footer">
    <div class="content-footer">
      <h3>Escola Eleva Recife</h3>
      <p>Criado por <strong>John Wesley</strong></p>
    </div>
  </footer>


</body>

</html>