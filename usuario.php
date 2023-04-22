<?php session_start();
    if(empty($_SESSION["nome"])){
        header("location:login.php");
    }
?>

<html>
    <head>
        <title>Usuario - Painel</title>
    </head>
    <body>
        <h3>Olá, <?php echo $_SESSION["nome"] ?></h3>
        <p>O que gostaria de fazer?</p>
        <a href="logout.php">Desconectar</a>
        <a href="#">Editar</a>
    </body>
</html>