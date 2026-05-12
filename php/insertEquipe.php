<?php 
//Incluir a conexão do banco de dados
include 'conexao.php';

//guardar a instrução do mysql na variável
$insert = "INSERT INTO tb_equipe VALUE (null, 'EcoFlux', 'São Paulo')";

//função query irá executar a instrução sql dentro do banco

$resultado = $conexao->query($insert);

if ($resultado == true) {
    echo "<script>alert('Equipe cadastrado com sucesso')</script>";
}





?>