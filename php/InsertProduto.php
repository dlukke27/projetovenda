<?php 
//Incluir a conexão do banco de dados
include 'conexao.php';

//guardar a instrução do mysql na variável
$insert = "INSERT INTO tb_produto VALUE (null, 'Celular', '2000')";

//função query irá executar a instrução sql dentro do banco

$resultado = $conexao->query($insert);

if ($resultado == true) {
    echo "<script>alert('Produto cadastrado com sucesso')</script>";
}





?>