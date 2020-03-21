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
  <img src="Imagens/trapezio.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Area do Trapezio</h5>
        <?php
         $valor1 = $_GET['b'];
         $valor2 = $_GET['B'];
         $valor3 = $_GET['h'];
         $a = ($valor1 + $valor2) *$valor3 / 2 ;
        echo "($valor1 + $valor2) *$valor3 / 2 = $a<br>";
        ?>
        <p class="card-text">Assim você calcula a area de um trapezio, basta você somar a base menor com a base maior, multiplicar o resultado da soma pela altura edividir por 2 !</p>
    <p> </p>
    <a href="primeirapag.html" class="btn btn-primary">Inicio</a>
  </div>
</div>
