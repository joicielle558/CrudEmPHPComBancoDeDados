<?php
    include "conexao.php";

    $cpf = $_POST["cpf"];

    $consulta = mysqli_query($conexao, "select * from clientes where cpf = '$cpf'");


    if(!$consulta){
        echo "Dados não encontrados.";
    }else{
        echo "<table border = '1'>";
        echo "<tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Nome do Produto</th>
        <th>Quantidade</th>
        <th>Valor Unitário</th>
        <th>Valor Total</th>
        <th>Forma de Pagamento</th>
        </tr>";

        while($linha = mysqli_fetch_array($consulta)){
            echo "<tr>";
            echo "<td>".$linha["nome"]."</td>
            <td>".$linha["cpf"]."</td>
            <td>".$linha["email"]."</td>
            <td>".$linha["nome_produto"]."</td>
            <td>".$linha["quantidade"]."</td>
            <td>".$linha["valor_unidade"]."</td>
            <td>".$linha["valor_total"]."</td>
            <td>".$linha["forma_pagamento"]."</td>";
            echo "<tr>";
        }
        echo "</table>";
    }



?>