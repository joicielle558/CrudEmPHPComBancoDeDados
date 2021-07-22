<?php
    include "conexao.php";

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $erro = 0;

    if(empty($login)){
        echo "<script>
                alert ('Favor preencher o campo login')
                location.href = 'cadastro_usuario.html'
              </script>";
        $erro = 1;
    }

    if(empty($senha)){
        echo "<script>
                alert ('Favor preencher o campo senha')
                location.href = 'cadastro_usuario.html'
              </script>";
        $erro = 1;
    }

    if(strlen($login) > 20){
        echo "<script>
                alert ('O campo login deve conter no máximo, 20 caracteres!')
                location.href = 'cadastro_usuario.html'
              </script>";
        $erro = 1;
    }

    if(strlen($senha) > 20){
        echo "<script>
                alert ('O campo senha deve conter no máximo, 20 caracteres!')
                location.href = 'cadastro_usuario.html'
              </script>";
        $erro = 1;
    }

    if($erro == 0){

    

        $enviar = mysqli_query($conexao, "insert into usuarios(login,senha) values('$login','$senha')");

        if($enviar){
            echo "<script>
                    alert ('Usuário cadastrado com sucesso!')
                    location.href = 'login.html'
                  </script>";
        }else{
            echo "<script>
                    alert ('Erro ao cadastrar usuário!')
                    location.href = 'cadastro_usuario.html'
                  </script>";
        }

        

        
    }





?>