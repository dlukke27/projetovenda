<?php 
//Incluir a conexão do banco de dados
include 'conexao.php';

//guardar a instrução do mysql na variável
$insert = "INSERT INTO tb_vendedor VALUE (null, 'Lucas Henrique', '13988194554', 1)";

//função query irá executar a instrução sql dentro do banco

$resultado = $conexao->query($insert);

if ($resultado == true) {
    echo "<script>alert('Vendedor cadastrado com sucesso')</script>";
}





?>