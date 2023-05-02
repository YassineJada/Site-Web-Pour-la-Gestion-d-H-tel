<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Admins</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<link href="../style/lgn_admn.css" rel="stylesheet">
<link rel="icon" href="../img/icon.jpg" type="img/jpeg" />

</head>
<body>

<header>
            <div class="logo">
                <h1>JADA HOTEL</h1>
            </div>
    
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#rooms">Rooms</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#"  onclick="display(); ">Réservation</a></li>
                </ul>
            </nav>
            
</header>


<section id="login">
   
<h1 class="H">Connexion Pour les Admins</h1>
        
   <form action="validation_admis.php" method="post">

<div class="er">
   
   <?php 
   if(isset($_GET['msg'])){
       if($_GET['msg']!=""){
           echo "<div class=\"erreur\">" .$_GET['msg'] ."</div>";
   }
}

  ?>
</div>
 <tr>
  
 <div class=" A col-md-4">
    <label for="validationDefault01" class="form-label">User Name</label>
    <input type="text" class="form-control" id="validationDefault01" placeholder="User Name" name ="usernm" required>
  </div>
 
 </tr>
 <tr>
 <div class=" B col-md-4">
    <label for="validationDefault01" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationDefault01" name="password" placeholder="*********" required>
  </div>
 </tr>
 <tr>
 <div class=" env col-12">
    <br><button class="btn btn-primary" type="submit" name="env"> Envoyer</button>
  </div>
 </tr>
   </form>

</section>
</body>
</html>