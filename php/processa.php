<?php

include "conexao.php";

//VERIFICA SE OS DADOS ENVIADOS ESTÃO NO MODO POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //dados do formulario
    $adicionar_item = $_POST["adicionar_item"];
    $adicionar_quantidade = $_POST["adicionar_quantidade"];
    $enviar_formulario = $_POST["enviar_formulario"];


    //consulta que veririfica se o item existe no estoque
    $sql = "SELECT quantidade FROM estoque WHERE item = '$adicionar_item'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // 0 item já existe no estoque, atualizar a quantidade.
        $row = mysqli_fetch_assoc($result);
        $quantidade_banco = $row['quantidade'];
        $novaQuantidade = $quantidade_banco + $adicionar_quantidade;

        //Atualiza item no banco
        $sqlUpdate = "UPDATE estoque SET quantidade = $novaQuantidade WHERE item = '$adicionar_item'";$sqlInsertHistorico = "INSERT INTO historico (acao, item, quantidade) VALUES ('Adicionado', '$adicionar_item', '$adicionar_quantidade')";
        
        mysqli_query($conn, $sqlUpdate);
        mysqli_query($conn, $sqlInsertHistorico);

    } else {
        // O item não existe no estoque, insere uma linha
        $sqlInsert = "INSERT INTO estoque (item, quantidade, data_insercao) VALUES ('$adicionar_item', '$adicionar_quantidade', NOW())";
        mysqli_query($conn, $sqlInsert);
        mysqli_query($conn, $sqlInsertHistorico);
    }
}

header("Location: ../index.php");
exit();
