<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Document</title>

</head>
<body>
<?php
 
 include("calculadora.php");

 if(isset($_POST['calcular'])){

    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];
    
    calcular ($operacion);

}

?>

<div class="container"> 
    <section class="padre">

    
            <form class="form" action="" method="POST">
                  <div class="form-group">
                    <label >Numero</label>
                    <input type="text" class="form-control" name="num1" id="num1" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label >Numero 2</label>
                    <input type="text" class="form-control" name="num2" id="num2">
                  </div>
                  <div class="form-group">
                      <label>Operacion</label>
                  <select class="form-control" name="operacion" id="operacion">
                  <option>suma</option>
                  <option>resta</option>
                  <option>multiplicacion</option>
                  <option>division</option>
                  <option>modulo</option>
                  <option>incremento</option>
                  <option>decremento</option>
                </select>
         </div>
              <button type="submit" name="calcular" class="btn btn-info">Calcular</button>
           </form>

        
           </section>
</div>


</body>
</html>