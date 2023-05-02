<?php
include "bdd.php";


if(isset($_POST['sbmt'])){
  $CIN = $_POST["CIN"];
 $Nom = $_POST["Nom"];
 $Prénom = $_POST["Prénom"];
 $Date_Naissance = $_POST["dt"];
 $Adresse = $_POST["Adresse"];
 $Télé = $_POST["Téléphone"];
 $email = $_POST["Email"];
 $genre = $_POST["Genre"];
 $username = $_POST["user"];
 $mdp = $_POST["mdp"];
 $mdp2 = $_POST["mdp2"];
 $msg="";

 if($mdp==$mdp2)
 {
  $reponse = $sqldt->query("INSERT INTO client  VALUES ('$CIN','$Nom','$Prénom','$Date_Naissance','$Adresse',$Télé,'$email','$genre','$mdp','$username')");
  header("location:bienvenue.php?msg=$msg");
}else
 {
   $msg ="La confirmation de mot de passe est incorect";
  
 }

      
}    
 ?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<link href="../style/adm.css" rel="stylesheet">
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
    


<section id="sign">
<?php
if(isset($msg))
{
  echo $msg;
}
?>
<div class="hh">
  <h1 class="I">Inscrivez-Vous</h1>
</div>


    <form class="row g-3" method="POST" action="admin.php">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">CIN</label>
    <input type="text" class="form-control" id="validationDefault01" name="CIN" placeholder="Votre CIN" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nom</label>
    <input type="text" class="form-control" id="validationDefault01" placeholder="Saisir Votre Nom" name="Nom" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="validationDefault02" placeholder="Saisir Votre Prénom" name ="Prénom" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Email</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="email" class="form-control" id="validationDefaultUsername" placeholder="exemple@gmail.com" name="Email" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Date de Naissance</label>
    <input type="date" class="form-control" id="validationDefault01" name="dt" placeholder="Votre CIN" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Téléphone</label>
    <input type="number" min="0" class="form-control" id="validationDefault01" name="Téléphone" placeholder="+*************" required>
  </div>
  <div class=" adr col-md-6">
    <label for="validationDefault03" class="form-label">Adresse</label>
    <input type="text" class="form-control" name="Adresse" id="validationDefault03" required>
  </div>
    </select>
  </div>
  <select class="slct form-select" name="Genre" aria-label="Default select example">
  <option selected>Genre</option>
  <option value="Mr">Mr</option>
  <option value="Mlle">Mlle</option>
  <option value="Mdm">Mdm</option>
</select>
<div class=" col-md-4">
    <label for="validationDefault01" class=" A form-label">User Name</label>
    <input type="text" class="form-control" id="validationDefault01" name="user" placeholder="Nom_Prénom" required>
  </div>
  <div class=" col-md-4">
    <label for="validationDefault01" class=" B form-label">Mot de passe</label>
    <input type="password" class=" B form-control" id="validationDefault01" name="mdp" placeholder="*****Entrer un Mot de passe*****" required>
  </div>
  <div class=" col-md-4">
    <label for="validationDefault01" class="co form-label">Confirmer le Mot de passe</label>
    <input type="password" class="form-control" id="validationDefault01" name="mdp2" placeholder="****Confirmer votre Mot de passe****" required>
  </div>

 

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12 env">
    <button class="btn btn-primary" type="submit" name="sbmt">Inscrire</button>
  </div>
</form>
</section>
</body>
</html> 