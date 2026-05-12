<?php 
//Informações necessarios para conexão com o banco
$servidor = 'localhost';
$usuario = 'root';
$senha = 'root';
$nm_banco = 'bd_vendas';

//função mysqli para conexão com o banco de dados

$conexao = new mysqli($servidor, $usuario, $senha, $nm_banco);

if($conexao->connect_error){
   echo "Erro na Conexão";
}



?>