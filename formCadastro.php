<?php

require_once("conexao.php");



$nome = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['password'];
$confSenha = $_POST['confirm-password'];
$cnpj = $_POST['cnpj'];
$rua = $_POST['rua'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$razao = $_POST['razao'];


if($senha == $confSenha){


    $sql = "insert into instituicoes values(null, '".$nome."', '".$email."', '".$senha."', ".$cnpj.", '".$rua."', ".$cep.", '".$cidade."', '".$estado."', '".$telefone."','".$razao. "')";
    
    $salvar = mysqli_query($conexao, $sql);
    header('location: LoginCadastro.php?cadastrado=true');   
    exit;

}else{
    header('location: LoginCadastro.php');   
    exit;
}

mysqli_close($conexao);