<?php

session_start();

if(!isset($_SESSION["CIN"])){
  
  header('location:login.php');


}


include "bdd.php";


if(isset($_POST['sbmt'])){
$date_db = $_POST["dd"];
 $date_fin = $_POST["df"];
 $Type = $_POST["chambre"];
 $CIN = $_SESSION['CIN'];


$reponse = $sqldt->query("INSERT INTO reservation  VALUES ('$CIN','$date_db','$date_fin','$Type',NULL)");

}

?>


<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Réservation</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="../style/ajtstyle.css">
      <link rel="icon" href="../img/icon.jpg" type="img/jpeg" />
</head>
<body>
<header>
            <div class="logo">
                <h1>JADA HOTEL</h1>
            </div>
    
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../index.html#about">About</a></li>
                    <li><a href="../index.html#rooms">Rooms</a></li>
                    <li><a href="../index.html#gallery">Gallery</a></li>
                    <li><a href="../index.html#contact">Contact</a></li>
                    <li><a href="#"  onclick="display(); ">Réservation</a></li>
                </ul>
            </nav>
            
</header>

<div id="warning">
  <a href="deconn.php" class="btn btn-primary">Deconnection</a>
</div>

<form action="ajout.php" method="POST">
      <div class="A">
            <h2 class="txt">Résérver Maintenant </h2>
            <div class="B">
            <div class="col-md-4">
    <label for="validationDefault01" class="aa form-label"><span>Check in</span> </label>
    <input type="date" class=" aa form-control" id="validationDefault01" placeholder="Saisir Votre Nom" name="dd" required>
            </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="bb form-label"><span>Check out</span></label>
    <input type="date" class=" bb form-control" id="validationDefault02" placeholder="Saisir Votre Prénom" name ="df" required>
  </div>
  <select class="slct form-select" name="chambre" aria-label="Default select example">
  <option selected>Room</option>
  <option value="Single Room">Single Room</option>
  <option value="Double room (1bed)">Double Room (1 bed)</option>
  <option value="double room (2bed)">Double room (2 single bed)</option>
  <option value="Triple room">Triple Room (3 single bed)</option>
  </select>
            </div>

            <div class="col-12 env">
    <button class="btn btn-primary" type="submit" name="sbmt">Résérver</button>
    <br><button class="btn2 btn-primary" ><a class="aaa" href="rese.php">Mon Compte</a></button>
  </div>     
      </div>
</form>
</body>
</html>