<?php
session_start();
if(!$_SESSION['username']){
    header('Location:LoginCadastro.php');
    exit();
}