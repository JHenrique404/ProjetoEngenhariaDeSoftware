<?php
session_start();
include('conexao.php');

if (empty ($_POST['username']) || empty($_POST['password'])){
    header('Location:LoginCadastro.php');
    exit();
}

$usuario = mysqli_real_escape_string ($conexao, $_POST['username']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$querry = "select id,email from instituicoes where email ='{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $querry);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION ['username'] = $usuario;
    header('Location:PosLogin.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location:LoginCadastro.php');
    exit();
}
