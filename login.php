<?php session_start(); ?>

<html>
    <head>
        <title>Usuario - Login</title>
    </head>
    <body>
        <?php 

            if(!empty($_SESSION["erro"])){
                echo $_SESSION["erro"];
                unset($_SESSION["erro"]);
            };
        
        ?>

        <h3>Insira um nome para logar.</h3>
        <form action="validacao.php" method="POST">
            <input type="text" name="nome" id="nome">
            <input type="submit" value="Logar">
        </form>
    </body>
</html>