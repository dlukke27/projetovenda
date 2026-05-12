<?php 
//Incluir a conexão do banco de dados
include 'conexao.php';

//guardar a instrução do mysql na variável
$insert = "INSERT INTO tb_cliente VALUE (null, 'Ecoflow', '11958545875', 'Lucas')";

//função query irá executar a instrução sql dentro do banco

$resultado = $conexao->query($insert);

if ($resultado == true) {
    echo "<script>alert('Cliente cadastrado com sucesso')</script>";
}





?>