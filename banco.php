<?php
    //echo $_POST;
    //exit();

    $servidor ="localhost";
    $usuario="root";
    $senha="";
    $db="investimento";

    $conexao1= mysqli_connect($servidor,$usuario,$senha,$db);

    if(mysqli_connect_errno()){
        die ("Erro" . mysqli_connect_errno()); 
    }
    
    if(isset($_POST["nome"])){

        $nome      = utf8_decode($_POST["nome"]);
        $cpf       = utf8_decode($_POST["cpf"]);
        $email     = utf8_decode($_POST["email"]);
        $whatszapp = utf8_decode($_POST["whatszapp"]);
        $telegram  = utf8_decode($_POST["telegram"]);
        $usuario   = utf8_decode($_POST["usuario"]);
        $indicacao = utf8_decode($_POST["indicacao"]);
        $banco     = utf8_decode($_POST["banco"]);
        $agencia   = utf8_decode($_POST["agencia"]);
        $conta     = utf8_decode($_POST["conta"]);
        $tipo      = utf8_decode($_POST["tipo"]);
        $bitcoins  = utf8_decode($_POST["bitcoins"]);

    $inserir  =" INSERT INTO dbinvest ";
    $inserir .=" (nome,cpf,email,whatszapp,telegram,usuario,indicacao,banco,agencia,conta,tipo,bitcoins) ";
    $inserir .=" VALUES ";
    $inserir .=" ('$nome','$cpf','$email','$whatszapp','$telegram','$usuario','$indicacao','$banco','$agencia','$conta','$tipo','$bitcoins') ";

    $conexao2 = mysqli_query($conexao1,$inserir);

    if(!$conexao2){
        die ("Erro");
    }else{

    }
}

?>