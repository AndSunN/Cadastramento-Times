<?php

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/
IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">
<title>FIFA 2022</title>
</head>

<body>
    <main>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logocopa" src="https://upload.wikimedia.org/wikipedia/pt/thumb/e/e3/2022_FIFA_World_Cup.svg/1200px-2022_FIFA_World_Cup.svg.png" alt="copinha"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/projeto1/?#%22%3EInÃ­cio </a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio.php">INICIO</a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="formulario.php">JOGADORES</a>
                  
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pesquisar.php">PESQUISAR</a>
                  </li>


            </ul>
        
          </div>
        </div>
      </nav>


      <div class="textocentrocontainer">
          <h2 class="titulo">Campeonato Mundial de Futebol FIFA de 2022 </h2>
      </div>


  <div class="containerrato">
    <div class="titulo2"> CRIANDO TIME FIFA 2022 <br>
    </div>
      
 
<div class="lista">


<form action="cadastro.php" method="POST">

   
              <fieldset>
            <P> <label for="">Equipe: </label>
            <input type="text" name="equipe">
            <P> <label for="">Treinador: </label>
            <input type="text" name="treinador">
            </fieldset>

            <fieldset class="jogadores">
            <P> <label for="">Goleiro: </label>
            <input type="text" name="goleiro">

            <P> <label for="">Laterais: </label>
            <input type="text" name="laterais">

            <P> <label for="">Zagueiro: </label>
            <input type="text" name="zagueiro">
