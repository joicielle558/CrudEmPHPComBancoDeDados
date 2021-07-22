<?php

    include "conexao.php";

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $nome_produto = $_POST["nome_produto"];
    $quantidade = $_POST["quantidade"];
    $valor_unidade = $_POST["valor_unitario"];
    $email = $_POST["email"];
    $forma_pagamento = $_POST["forma_pagamento"];
    $valor_total = ($valor_unidade * $quantidade);

    $enviar = mysqli_query($conexao, "insert into clientes(nome,cpf,nome_produto,quantidade,valor_unidade,email,forma_pagamento,valor_total) values('$nome','$cpf','$nome_produto',$quantidade,$valor_unidade,'$email','$forma_pagamento',$valor_total)");

    if($enviar){
        echo "<script>
                alert ('Dados cadastrados com sucesso!')
                location.href = 'cadastro_cliente.html'
              </script>";
    }else{
        echo "<script>
            alert ('Erro no cadastro!')
            location.href = 'cadastro_cliente.html'
        </script>";
    }



?>