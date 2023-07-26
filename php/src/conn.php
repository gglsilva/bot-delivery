<?php
$servidor = 'db';
$user = 'BOTPHP';
$senha = 'password123';
$banco = 'BOT';
$conn = mysqli_connect($servidor,$user,$senha,$banco); //conecta com banco de dados

if(!$conn){
    echo "deu ruim";
}else{
    echo "deu tudo certo";
}
?>