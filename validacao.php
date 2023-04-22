<?php
    session_start();

    $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($nome)){
        $_SESSION["erro"] = "Por favor, insira um nome no campo abaixo para logar.";
    }else{
        $_SESSION["nome"] = $nome;
    };

    header("location:usuario.php");
