<?php

include_once("conexao.php");

$vnome=filter_input(INPUT_POST,'Nome', FILTER_SANITIZE_STRING);
$vemail=filter_input(INPUT_POST,'Email', FILTER_SANITIZE_EMAIL);
$vsenha=$_POST['Senha'];

echo "$vnome,$vsenha";
$insere_usuario ="INSERT INTO usuarios (nome, email,senha) VALUES ('$vnome','$vemail','$vsenha')";
$resultado_usuario = mysqli_query($conexao, $insere_usuario);

if (mysqli_insert_id($conexao)){
    header ("Location: atpweb.html");
}else {
    echo "Fu";
}
?>
