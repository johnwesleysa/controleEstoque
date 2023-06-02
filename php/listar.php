<?php

include "conexao.php";

// Consulta SQL para obter os dados do banco
$sql = "SELECT item, quantidade FROM estoque";
$result = mysqli_query($conn, $sql);

// Início do bloco HTML
echo '<div class="listar">';
echo '<div class="title">';
echo '<h1>Itens em Estoque</h1>';
echo '<p>Impressora Xerox</p>';
echo '</div>';
echo '<div class="item-quantidade-banco">';
echo '<div class="item-banco">';
echo '<ul id="id-lista-item" class="lista-item">';
echo '<li id="id0-item-lista-item" class="item-lista-item"><h2><strong>Item</strong></h2></li><br>';

// Loop através dos resultados e exibe-os na lista de itens
while ($row = mysqli_fetch_assoc($result)) {
    echo '<li class="item-lista-item">' . $row['item'] . '</li>';
}

echo '</ul>';
echo '</div>';
echo '<div class="quantidade-banco">';
echo '<ul id="id-lista-quantidade" class="lista-quantidade">';
echo '<li id="id0-item-lista-quantidade" class="item-lista-quantidade"><h2><strong>Quantidade</strong></h2></li><br>';

// Reposiciona o ponteiro interno do resultado para o início
mysqli_data_seek($result, 0);

// Loop através dos resultados e exibe-os na lista de quantidades
while ($row = mysqli_fetch_assoc($result)) {
    echo '<li class="item-lista-quantidade">' . $row['quantidade'] . '</li>';
}

echo '</ul>';
echo '</div>';
echo '</div>';
echo '</div>';

// Fecha a conexão com o banco de dados
mysqli_close($conn);
