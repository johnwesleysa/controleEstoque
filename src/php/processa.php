<?php

include "conexao.php";

//VERIFICA SE OS DADOS ENVIADOS ESTÃO NO MODO POST
if ($_SERVER ['REQUEST METHOD'] == "POST") {
    //PUXA OS DADOS QUE RECEBEU DA REQUISIÇÃO E ARMAZENA EM UMA VÁRIAVEL

    $adicionar_item = $_POST["adicionar_item"];
    $adicionar_quantidade = $_POST["adicionar_quantidade"];
    $enviar_formulario = $_POST["enviar_formulario"];
    //$remover_item = $_POST["remover_item"];
    //$remover_quantidade = $_POST["remover_quantidade"];

    $inserirDadosNoBanco = "INSERT INTO estoque (item, quantidade, data_insercao) VALUES ('$adicionar_item', '$adicionar_quantidade', now())";
    
}
