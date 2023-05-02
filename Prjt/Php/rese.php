<?php
session_start();

if(!isset($_SESSION["CIN"])){
  
  header('location:login.php');
}

include "bdd.php";
 $CIN = $_SESSION["CIN"];
 $response = $sqldt->query("SELECT * FROM client WHERE CIN = '$CIN'");
 $reser = $sqldt->query("SELECT * FROM reservation WHERE CIN = '$CIN'");
 $ligne = $response->fetch();

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/compte.css">
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

<div class="compte">
    <h1 class="T1">Mon Compte</h1>
    <table class="table" >
  <thead>
    <tr>
      <th scope="col">CIN</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Date de Naissance</th>
      <th scope="col">Adresse</th>
      <th scope="col">Téléphone</th>
      <th scope="col">User Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $ligne["CIN"] ?></td>
      <td> <?php echo $ligne["Nom"] ?></td>
      <td> <?php echo $ligne["Prénom"] ?></td>
      <td> <?php echo $ligne["Date_Naissance"] ?></td>
      <td> <?php echo $ligne["Adresse"] ?></td>
      <td> <?php echo $ligne["Télé"] ?></td>
      <td> <?php echo $ligne["username"] ?></td>
    </tr>
  </tbody>
</table>
<tr>
 <div class=" env col-12">
    <br><button class="btn btn-outline-primary"  type="submit" name="env"><a class="aa" href="modification.php"> Modifier</a></button>
  </div>
 </tr>

<h1 class="T2">Mes Résérvations</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Type_Chambre</th>
      <th scope="col">Date de début</th>
      <th scope="col">Date de fin</th>
      
    </tr>
  </thead>
  <?php while( $ligne2 = $reser->fetch())
  {
     ?> 
     <tbody>
    <tr>
      <td><?php echo $ligne2["Type"] ?></td>
      <td> <?php echo $ligne2["date_db"] ?></td>
      <td> <?php echo $ligne2["date_fin"] ?></td>

    </tr>
  </tbody>
     <?php
  } 
  ?>
  
</table>
</div>
</body>
</html>