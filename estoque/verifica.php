<?php

$nome      = $_POST["nome"];
$email     = $_POST["email"];
$telefone  = $_POST["telefone"];

$erro      = 0;

if (empty($nome) OR strstr($nome, ' ') == FALSE){
    echo "Favor digitar seu nome corretamente"; $erro=1;}

if (strlen($email) <8 || strstr($email, '@') == FALSE){
    echo "Favor digitar seu nome corretamente"; $erro=1;}

if($erro==0){
    echo "Dados cadastrados com sucesso";
    include "inserir.php";
}

 ?>
