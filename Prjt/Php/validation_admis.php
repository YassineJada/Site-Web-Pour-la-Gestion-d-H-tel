<?php

session_start();



if(!isset($_SESSION["CIN"])){
  
  header('location:login.php');


}

if(isset($_POST["env"])){

    $login = $_POST["usernm"];
    $password = $_POST["password"];

    include "bdd.php";
 
    $log = $sqldt->query("SELECT * FROM admins WHERE username = '$login'");
    $admin = $log->fetch();

    if($log->rowCount() > 0){
 
       if($admin["username"] == $login && $admin["password"] == $password){

       $_SESSION["amin"]=$admin["username"];

       header("location:Affichage.php");


       }else{
        $msg ="User Name Or password n'est pas validé ";
        header("location:loginadmin.php?msg=$msg");
       }


    }else{
        $msg ="User Name Or password n'est pas validé ";
        header("location:loginadmin.php?msg=$msg");
    }
}


?>