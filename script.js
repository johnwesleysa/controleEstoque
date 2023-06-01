$(document).ready(function() {

    //Função para atualizar a lista de itens em estoque
    function atualizarEstoque() {
        $.ajax({
            url:'addItem.php',
            type: 'GET',
            dataType: 'json',
            success: function() {
                //Limpar lista de itens em estoque
                $('#lista-estoque').empty()

                //Adiciona novos itens a lista
                $each(data, function(index, item) {
                    var listItem = '<li>' + item.item + " : " +  item.quantidade+"</li>"
                    $('#lista-estoque').append(listItem)
                });
            },
            error: function() {
                console.log('Erro ao atualizar o estoque');
            }
        });
    }

    //Evento de submit de formulário
    $('form').on('submit', function(e) {
        e.preventDefault(); //impede o envio padrão do formulário

        //Obtém os valores dos campos
        var item = $('#item').val();
        var quantidade = $('#quantidade').val();

        //Envia os dados do formulário para o arquivo processar.php
        $.ajax({
            url: 'addItem.php',
            type: 'POST',
            data: {item: item, quantidade: quantidade},
            success: function() {
                console.log('Item adicionado ao estoque com sucesso');
                atualizarEstoque(); //Atualiza a lista de itens em estoque
            },
            error: function() {
                console.log('Erro ao adicionar item ao estoque')
            }
        })
    })

    //Chama a função para atualizar a lsita de itens em estoque ao carregar a página
    atualizarEstoque()
})