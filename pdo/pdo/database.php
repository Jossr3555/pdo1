<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "projetopdo";

try{
    $con = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'conectado! <br> ';

} catch(PDOException $e){
    //echo "Conectado";
    echo 'Erro ao conectar no banco de dados: '.$e->getMessage();
}