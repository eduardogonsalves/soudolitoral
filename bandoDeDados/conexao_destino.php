<!--SoliDeoGloria-->

<?php
    $servidor = "localhost";
    $usuario = "prepress_gruposoudolitoral";
    $senha = "@SouDoLitoral#!";
    $banco = "prepress_sou_do_litoral";

    try {
        $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        die("Erro ao conectar com o banco de dados: " . $e->getMessage());
    }
?>
