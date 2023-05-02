<?php

session_start();

if(!isset($_SESSION["CIN"])){
  
    header('location:login.php');
  
  
  }

if(!isset($_SESSION["amin"])){
  
    header('location:loginadmin.php');
  
  
  }
include "bdd.php";

if(isset($_GET["num_C"])){
    $num = $_GET["num_C"];
    $response = $sqldt->query("DELETE FROM reservation WHERE Num_C = $num");
    
    header("location:Affichage.php");

}

?>