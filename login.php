<?php
require_once 'conexao.php';
session_start();

if(isset($_POST['btn-login'])):
   
    $vlogin= $_POST['Nome'];
    $vsenha= $_POST['Senha'];

    echo "Clicou \n";
    
    echo "$vlogin";
    echo "$vsenha";
   
    

    if (empty($vlogin)):
        
        echo "Login vazio";
        elseif(empty($vsenha)):
            echo "Senha vazia";
        else:        
    echo "Acessando";
    
    $result_usuario = "SELECT * FROM usuarios WHERE 
    Nome = '$vlogin' && senha = '$vsenha'";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    echo "procurando";
        if(isset($resultado)):
            echo "encontrado";
            $dados=mysqli_fetch_array($resultado);
            $_SESSION['Logado']=true;
            $_SESSION['id_usuario']=$dados['id'];
            
            
            header('Location:emprestimo.php');
       
            
        else:    
            $erro[]="<li> Senha incorreta </li> ";

        endif;
    endif;


endif;
?>    