<?php
    include "conexao.php";

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $sql = mysqli_query($conexao, "select * from usuarios where login = '$login' and senha = '$senha'");
    
    $linha = mysqli_fetch_array($sql);

    if($linha == 0){
        echo "<script>
                alert ('Usuário não encontrado')
                location.href = 'login.html'
              </script>";
    }else{
        echo "<script>
                alert('Usuário logado com sucesso!')
                location.href = 'cadastro_cliente.html'
              </script>";
    }

?>
