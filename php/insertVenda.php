<?php 
//Incluir a conexão do banco de dados
include 'conexao.php';

//guardar a instrução do mysql na variável
$insert = "INSERT INTO tb_venda VALUE (null, '2026/12/06', 3, '10', 1, 1, 1)";

//função query irá executar a instrução sql dentro do banco

$resultado = $conexao->query($insert);

if ($resultado == true) {
    echo "<script>alert('Venda cadastrado com sucesso')</script>";
}





?>