<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <title>IMC</title>
      </head>

<body>
 
    <header>
        <h1>ETECIA</h1>
    </header>

  

  

            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    
        
                <label >usuario</label>
                <input type="text" class="form-control"  placeholder="Usuario" name="usuario">
            

            
                <label >Senha</label>
                <input type="text" class="form-control"  placeholder="Senha" name="senha">


                <button type="submit" class="btn btn-primary" name="enviar-formulario">Enviar</button>
                
                </form>


        <br> <br> 

<?php

if(isset($_POST['enviar-formulario'])){
    
if(!empty($erros)){
   echo $erros;
}else{
$email = $_POST['usuario'];
$senha = $_POST ['senha'];

if($email == "etecia" && $senha =="etecia238"){
echo "<section>Autenticação realizada com sucesso</section>";

} else{
    echo "<section>Você não tem permissão de visualizar essa página</section>";
}
}
}


?>