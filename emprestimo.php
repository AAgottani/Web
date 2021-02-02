<php?
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Coisas Emprestadas</title>
        <link rel="stylesheet" href="estilo2.css">
        <style type="text/css">
        

        </style>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body >
        

        
        <form  action="processaemp.php" method="POST">
            
            <legend style="font-size:50px;font-weight:bold;"> Coisas pra emprestar </legend>
              <div>
                
                 
                <input type = "checkbox" id = "Tinta" name = "empresta[]" value= "0" >
                <label for = "Tinta" style="font-size:20px;font-weight:bold;">Tinta invisível </label>
                <?php
                echo "Data para devolução: "
                ?>
                <?php
                $nextweek=time() + (7*24*60*60);
                echo date("d-m-Y", $nextweek); 
                
                ?>
                
                
              </div>
              <div>
                <input type = "checkbox" id = "bola" name = "empresta[]" value = "1">
                <label for = "bola" style="font-size:20px;font-weight:bold;"> Bola quadrada </label>
                <?php
                echo "Data para devolução: "
                ?>
                <?php
                $nextweek=time() + (7*24*60*60);
                echo date("d-m-Y", $nextweek); 
                
                ?>
              </div>
              <div>
                <input type = "checkbox" id = "terra" name = "empresta[]" valor = "2">
                <label for = "terra" style="font-size:20px;font-weight:bold;"> Mapa da terra plana  </label>
                <?php
                echo "Data para devolução: "
                ?>
                <?php
                $nextweek=time() + (7*24*60*60);
                echo date("d-m-Y", $nextweek); 
                
                ?>
              </div>
              <div>
                <input type = "checkbox" id = "gelo" nome = "empresta[]" valor = "3">
                <label for = "gelo" style="font-size:20px;font-weight:bold;"> Secador de gelo </label>
                <?php
                echo "Data para devolução: "
                ?>
                <?php
                $nextweek=time() + (7*24*60*60);
                echo date("d-m-Y", $nextweek); 
                
                ?>
              </div>
              <div>
                <input type = "checkbox" id = "saco" nome = "empresta[]" valor = "4">
                <label for = "saco" style="font-size:20px;font-weight:bold;"> Saco sem fundo </label>
                <?php
                echo "Data para devolução: "
                ?>
                <?php
                $nextweek=time() + (7*24*60*60);
                echo date("d-m-Y", $nextweek); 
                
                ?>
              </div>
              <div>
                <input type = "checkbox" id = "pente" nome = "empresta[]" valor = "5">
                <label for = "pente" style="font-size:20px;font-weight:bold;"> Pente de macaco </label>
                <?php
                echo "Data para devolução: "
                ?>
                <?php
                $nextweek=time() + (7*24*60*60);
                echo date("d-m-Y", $nextweek); 
                
                ?>
            </table>
              </div>
              <div>
                <input type="submit" name="btn-empresta" value="Emprestar" action="processaemp">
                
              </div>
            
          </form>
          
    </body>
