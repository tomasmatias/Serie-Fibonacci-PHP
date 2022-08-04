<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie Fibonacci</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <style>
        label{
            display:inline-block;
        }
        body{
            background-color: lightblue;
        }
    </style>

</head>
<body>
    <div class="container text-center">
        <h1 class="my-5">Serie de Fibonacci</h1>

        <form action="fibonacci.php" method="post">

    <div class="form-group">
    <label for="numero_fibonacci">Número de Fibonacci (1-99):</label>
    <input type="number" class="form-control" min="1" max="99" id="numero_fibonacci" name="numero_fibonacci">
  </div>

  <br>

    <div class="form-group">

    <button type="submit">Enviar Números</button>

    </div>
         </form>
   </div>    

 <?php

$fibonacci = array(0,1);

if(isset($_POST['numero_fibonacci'])){

    $numero_fibonacci = $_POST['numero_fibonacci'];

    if($numero_fibonacci > 1){

        for($i = 2; $i < $numero_fibonacci; $i++){
                $fibonacci[] = $fibonacci[$i -1] + $fibonacci[$i -2];
        }

    }

}

?>

<h2>Número Fibonacci: <?php echo $numero_fibonacci  ?> </h2>

<div>

<?php 
    foreach($fibonacci as $item ){

        ?>
        <div> <?php echo $item  ?></div>

        <?php
    }


?>


</div>



<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> --> 
</body>
</html>