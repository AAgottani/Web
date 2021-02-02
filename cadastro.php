<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" href="estilo.css">
        
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    
    <body>
        <div style="position: fixed; right: 520px;top:50px">
            <fieldset  style= width:300px;height:200px;background-color:rgb(255,255,206);
            ><legend style=font-size:30px;font-weight:bold; >Dados Pessoais</legend>
    
                <form name="signup" action="processa.php" method="POST" style=font-weight:bold;font-size:20px; >
                 Escolha um nome de usuário:<br>  <input type="text" name="Nome" placeholder="Nome de usuário" > <br/>
                 Senha:<br> <input type="password" name="Senha" placeholder="Digite sua senha"> <br>
                 Email:<br><input type="email" name="Email" placeholder="Digite seu email"> <br>
                 <input type="submit"  value="Cadastrar">
                 
                </form>
            
            </fieldset>
        </div>

    </body>

