<?php

include "conexao.php";


$nome      = $_POST["nome"];
$email     = $_POST["email"];
$telefone  = $_POST["telefone"];

$sql = "INSERT INTO clientes VALUES (NULL,'".$nome."','".$email."','".$tel."')";
$resultado = mysql_query($sql);

    echo "Cliente cadastrado com sucesso";

mysql_close($conexao);
 ?>