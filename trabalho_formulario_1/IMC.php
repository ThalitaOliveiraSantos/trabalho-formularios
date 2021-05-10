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
        <h1>Cálculo IMC</h1>
    </header>

  

  

            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    
        
                <label >Peso</label>
                <input type="text" class="form-control"  placeholder="Peso" name="peso">
            

            
                <label >Altura</label>
                <input type="text" class="form-control"  placeholder="Altura" name="altura">


                <button type="submit" class="btn btn-primary" name="enviar-formulario">Enviar</button>
                
                </form>


        <br> <br> 
       
<?php

if(isset($_POST['enviar-formulario'])){
    $erros = "";
    
    if( !$altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT)){
        $erros = "Digite apenas números!"; 
    }
    if( !$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
        $erros = "Digite apenas números!"; 
    }
    
if(!empty($erros)){
   echo $erros;
}else{
$altura = $_POST['altura'];
$peso = $_POST ['peso'];


$imc = $peso / ($altura*$altura);

echo "O seu IMC é $imc";
if ($imc >25){
    $mensagem = 'Você está acima do peso';
} else{
    $mensagem = "Você está saudável!";

}
echo "<br>$mensagem";
}
}


?>

</body>
</html>
