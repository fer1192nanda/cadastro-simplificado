<?php

include("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senhacriptografada = md5($senha);
 
$consulta = "INSERT INTO usuario (nome, usuario, senha) VALUES ('$nome', '$email', '$senhacriptografada')" ;

echo $consulta;

if($conexao->query($consulta)){
    echo "<br />Dados salvos";
}else{
    echo "<br />Não foi possível salvar";
}

?>