<!--SoliDeoGloria-->

<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "sou_do_litoral";


    try{
        $pdo = new PDO("mysql:host=$servidor;dbname=$banco", "$usuario", "$senha");
    } catch(PDOException $e) {
        die($e -> getMessage());
    }
    
?>