<?php
    include("conn.php");

    $name       =   $_POST['nome'];
    $sobrenome  =   $_POST['sobrenome'];
    $senha      =   $_POST['senha'];
    $email      =   md5($_POST['email']);

        $sql    =   "INSERT INTO 
                        cadastro (nome, sobrenome, senha, email) 
                    VALUE  
                        ('".$name."', '".$sobrenome."', '".$senha."', '".$email."')";

    if(mysqli_query($conn, $sql)){
        echo "Usuário Cadastrado com sucesso";
    }
    else{
        echo "ERRO".mysqli_connect_error($con);
    }
    mysqli_close($conn);
?>