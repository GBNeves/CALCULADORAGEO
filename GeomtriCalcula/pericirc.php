<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   
    </head>
  <body>
  <body background="Imagens/fundo.jpg">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
      <img src="imagens/logo_centro3.png" width="218" height="50" alt=""></a> 

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="primeirapag.html">Home <span class="sr-only">(current)</span></a>
          </li>
          </ul>
          
        <form class="form-inline my-2 my-lg-0">
          <button class="btn btn-danger my-2 my-sm-0" type="submit">Sair</button>
        </form>
      </div>
     
    </nav>
    <div class="card" style="width: 18rem;">
  <img src="Imagens/circulo.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Perimetro do Circulo</h5>
        <?php
         $valor1 = $_GET['valor1'];
         $a = 2 * 3.14 * $valor1 ;
        echo " 2 * 3,14 * $valor1 = $a<br>";
        ?>
        <p class="card-text">Para calcular o perimetro de um circulo você deve multiplicar o valor de PI vezes dois vezes o raio (metade do diametro)</p>
    <p> </p>
    <a href="primeirapag.html" class="btn btn-primary">Inicio</a>
  </div>
</div>