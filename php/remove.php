<?php

include "conexao.php";

//VERIFICA SE OS DADOS ENVIADOS ESTÃO NO MODO POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //dados do formulario
    $remover_item = $_POST["remover_item"];
    $remover_quantidade = $_POST["remover_quantidade"];
    $enviar_formulario = $_POST["enviar_formulario"];


    //consulta que veririfica se o item existe no estoque
    $sql = "SELECT quantidade FROM estoque WHERE item = '$remover_item'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // 0 item já existe no estoque, atualizar a quantidade.
        $row = mysqli_fetch_assoc($result);
        $quantidade_banco = $row['quantidade'];
        $novaQuantidade = $quantidade_banco - $remover_quantidade;

        //Atualiza item no banco
        $sqlUpdate = "UPDATE estoque SET quantidade = $novaQuantidade WHERE item = '$remover_item'";
        mysqli_query($conn, $sqlUpdate);
        
        $sqlInsertHistorico = "INSERT INTO historico (acao, item, quantidade) VALUES ('Removido', '$remover_item', '$remover_quantidade')";
        mysqli_query($conn, $sqlInsertHistorico);
    } 
}

header("Location: ../index.php");
exit();
