<?php

require_once("conexao.php");

$nome = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['password'];
$cnpj = $_POST['cnpj'];
$razao = $_POST['razao'];
$confSenha = $_POST['confirm-password'];

if($senha == $confSenha){

    $sql = "insert into instituicoes values(null, '".$nome."', '".$email."', '".$senha."', '".$razao."', '".$cnpj."')";
    $salvar = mysqli_query($conexao, $sql);

}else{
    header('location: LoginCadastro.html');   
    exit;
    

}

mysqli_close($conexao);