<?php


include "bdd.php";
session_start();

if(!isset($_SESSION["amin"])){
  
  header('location:loginadmin.php');


}
 $reser = $sqldt->query("SELECT * FROM client join reservation WHERE client.CIN = reservation.CIN ");
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/mdf.css">
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

<div class="CC">
    Nos Clients
</div>

<!-- <?php

require("bdd.php");

$reponse = $sqldt->query("SELECT * FROM reservation ");


if(isset($reponse)){
    ?> -->

<table class="table">
  <thead>
    <tr>
    <th scope="col">Num</th>
    <th scope="col">CIN</th>
    <th scope="col">Nom</th>
    <th scope="col">Prénom</th>
    <th scope="col">Date de Naissance</th>
    <th scope="col">Téléphone</th>
    <th scope="col">Genre</th>
      <th scope="col">Type_Chambre</th>
      <th scope="col">Date de début</th>
      <th scope="col">Date de fin</th>
      <th scope="col">Action</th>

      
    </tr>
  </thead>
  <?php while( $ligne = $reser->fetch())
  {
     ?> 
     <tbody>
    <tr>
    <td> <?php echo $ligne["Num_C"] ?></td>
    <td><?php echo $ligne["CIN"] ?></td>
    <td><?php echo $ligne["Nom"] ?></td>
    <td><?php echo $ligne["Prénom"] ?></td>
    <td><?php echo $ligne["Date_Naissance"] ?></td>
    <td><?php echo $ligne["Télé"] ?></td>
    <td><?php echo $ligne["genre"] ?></td>
      <td><?php echo $ligne["Type"] ?></td>
      <td> <?php echo $ligne["date_db"] ?></td>
      <td> <?php echo $ligne["date_fin"] ?></td>
      
      <td><a class="btn btn-danger" href="deleteprocess.php?num_C=<?php echo $ligne['Num_C']; ?>">Delete</a></td>

    </tr>
  </tbody>
  <?php
  }}
  ?>
</body>
</html>