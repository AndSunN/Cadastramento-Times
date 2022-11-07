<?php

include("conexao.php");

$equipe=$_POST['equipe'];
$treinador=$_POST['treinador'];
$goleiro=$_POST['goleiro'];
$laterais=$_POST['laterais'];
$zagueiro=$_POST['zagueiro'];
$volante=$_POST['volante'];
$meia=$_POST['meia'];


$sql="INSERT INTO cadastro(equipe, treinador, goleiro, laterais, zagueiro, volante, meia)
            VALUES ('$equipe', '$treinador', '$goleiro', '$laterais', '$zagueiro', '$volante', '$meia')";
                
    if(mysqli_query($conexao, $sql)){
        echo "Cadastrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao)
