<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/clinica.css">
    <link href="https://fonts.googleapis.com/css?family=Handlee|Indie+Flower|Rokkitt|Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>clinica</title>
  </head>
  <body>

<div class="container">
<button type="button"  style='width:500px; height:100px' class="btn btn-primary" onclick="location.href='pasiente.php'">Pacientes</button>
<button type="button" style='width:500px; height:100px' class="btn btn-secondary" onclick="location.href='recetas.php'">recetas</button>
<button type="button" style='width:500px; height:100px'  class="btn btn-success"onclick="location.href='historial.php'">histoial medico</button>
<button type="button" style='width:500px; height:100px' class="btn btn-danger" onclick="location.href='consulta.php'">consulta</button>
</div>
</body>
</html>
<?php
session_start();

 ?>
