<?php
    require_once("./banco.php");

    session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2? família=Ranchers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styledash.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  </head>
  <body>

  <div class="d-flex">
  <div id="sidebar-container">
  <div class="logo">
        <h4 class="text-light font-weight-bold" style="font-family: 'Ranchers', cursivo;">Grow Up <span>Gold</span></h4>
  </div>
    <div class="menu">
            <a href="#home" style="text-decoration:none;" class="d-block text-light p-3"><i class="icon ion-md-apps mr-2 lead"></i>Inicio</a>
            <a href="#" style="text-decoration:none;" class="d-block text-light p-3"><i class="icon ion-md-person mr-2 lead"></i>Perfil</a>
            <a href="#" style="text-decoration:none;" class="d-block text-light p-3"><i class="icon ion-md-stats mr-2 lead"></i>Investimento</a>  
            <a href="#" style="text-decoration:none;" class="d-block text-light p-3"><i class="icon ion-md-settings mr-2 lead"></i>Configuração</a>
        </div>
   </div>

<div class="w-100">
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<form class="form-inline position-relative my-2 d-inline-block">
      <input class="form-control mr-sm-2" type="search" id="botaobuscar" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
</form>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrador
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Meu Perfil</a>
          <a class="dropdown-item" href="#">Inscrições</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Encerrar Sessão</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>

  <div id="content">
  <section class="py-3">
  <div class="container">
  <div class="row">
  <div class="col-lg-9">
  <h1 class="font-weight-bold mb-0 " id="home" style="font-size:30px;">Bem vindo</h1>
  <p class="lead text-muted">Veja as ultimas Atualizações</p>
  </div>
  <div class="col-lg-3 d-flex">
  <button class="btn btn-primary w-100 align-self-center">Exportar</button>
  </div>
  </div>
  </div>
  </section>

  <section class="bg-mix">
  <div class="container">
  <div class="card rounded-0">
  <div class="card-body">
  <div class="row">
  <div class="col-lg-4 d-flex stat">
  <div class="mx-auto">
  <h6 class="text-muted">Lucro Mensal</h6>
  <h3 class="font-weight-bold">R$1.750,00</h3>
  <h6 class="text-success"><i class="icon ion-md-trending-up"></i>75,00%</h6>
  </div>
  </div>

  <div class="col-lg-4 d-flex stat">
  <div class="mx-auto">
  <h6 class="text-muted">Lucro Semanal</h6>
  <h3 class="font-weight-bold">R$187,50</h3>
  <h6 class="text-success"><i class="icon ion-md-trending-up"></i>18,75%</h6>
  </div>
  </div>

  <div class="col-lg-4 d-flex">
  <div class="mx-auto">
  <h6 class="text-muted">Lucro 2 Semanas</h6>
  <h3 class="font-weight-bold">R$375,00</h3>
  <h6 class="text-success"><i class="icon ion-md-trending-up"></i>37,5%</h6>
  </div>
  </div>
  
  </div>
  </div>
  </div>
  </div>
  </section>

  <section calss="bg-grey">
  <div class="container">
  <div class="row">
  <div class="col-lg-8 my-3">
  <div class="card rounded-0">
  <div class="card-header bg-light">
  <h6 class="font-weight-bold mb-0" style="font-size:17px;">Investimento</h6>
  </div>

  <div class="card-body">
  <canvas id="myChart"></canvas>

  <script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Fevereiro/2021','Março/2021', 'Abril/2021', 'Maio/2021', 'Junho/2021', 'Julho/2021', 'Agosto/2021', 'Setembro/2021'],
        datasets: [{
            label: 'Investido',
            backgroundColor: 'rgb(0,127,255)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 1000, 2000, 3000, 4000, 5000, 6000, 7000]
        }]
    },

    // Configuration options go here
    options: {}
});
  </script>
  </div>
  </div>
  </div>
  <div class="col-lg-4 my-3">
  <div class="card rounded-8">
  <div class="card-header bg-light">
  <h6 class="font-weight-bold mb-0" style="font-size:17px;">Valor</h6>
  </div>
  <div class="card-body">
    <div class="d-flex border-bottom py-2">
      <div class="d-flex mr-3"><h2 class=" align-self-center mb-0"><i class="icon ion-md-trending-up"></i></h2></div>
      <div class="align-self-center">
        <h6 class="d-inline-block mb-0">R$1.000,00</h6><mark class="badge badge-success ml-2">75% Aumento</mark>
        <small class="d-block text-muted">Grow Up Gold</small>
      </div>
    </div>

    <div class="d-flex border-bottom py-2">
      <div class="d-flex mr-3"><h2 class=" align-self-center mb-0"><i class="icon ion-md-trending-up"></i></h2></div>
      <div class="align-self-center">
        <h6 class="d-inline-block mb-0">R$2.000,00</h6><mark class="badge badge-success ml-2">75% Aumento</mark>
        <small class="d-block text-muted">Grow Up Gold</small>
      </div>
    </div>

    <div class="d-flex border-bottom py-2">
      <div class="d-flex mr-3"><h2 class=" align-self-center mb-0"><i class="icon ion-md-trending-up"></i></h2></div>
      <div class="align-self-center">
        <h6 class="d-inline-block mb-0">R$3.000,00</h6><mark class="badge badge-success ml-2">75% Aumento</mark>
        <small class="d-block text-muted">Grow Up Gold</small>
      </div>
    </div>

    <div class="d-flex border-bottom py-2">
      <div class="d-flex mr-3"><h2 class=" align-self-center mb-0"><i class="icon ion-md-trending-up"></i></h2></div>
      <div class="align-self-center">
        <h6 class="d-inline-block mb-0">R$4.000,00</h6><mark class="badge badge-success ml-2">75% Aumento</mark>
        <small class="d-block text-muted">Grow Up Gold</small>
      </div>
    </div>

    <div class="d-flex border-bottom py-2">
      <div class="d-flex mr-3"><h2 class=" align-self-center mb-0"><i class="icon ion-md-trending-up"></i></h2></div>
      <div class="align-self-center">
        <h6 class="d-inline-block mb-0">R$5.000,00</h6><mark class="badge badge-success ml-2">75% Aumento</mark>
        <small class="d-block text-muted">Grow Up Gold</small>
      </div>
    </div>

    <div class="d-flex border-bottom py-2">
      <div class="d-flex mr-3"><h2 class=" align-self-center mb-0"><i class="icon ion-md-trending-up"></i></h2></div>
      <div class="align-self-center">
        <h6 class="d-inline-block mb-0">R$6.000,00</h6><mark class="badge badge-success ml-2">75% Aumento</mark>
        <small class="d-block text-muted">Grow Up Gold</small>
      </div>
    </div>
    
    <div class="d-flex border-bottom py-2">
      <div class="d-flex mr-3"><h2 class=" align-self-center mb-0"><i class="icon ion-md-trending-up"></i></h2></div>
      <div class="align-self-center">
        <h6 class="d-inline-block mb-0">R$7.000,00</h6><mark class="badge badge-success ml-2">75% Aumento</mark>
        <small class="d-block text-muted">Grow Up Gold</small>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>


  </div>
</div>
</div>

  </body>
</html>
