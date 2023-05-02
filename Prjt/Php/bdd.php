<?php 

try{
    $sqldt =  new PDO('mysql:host=localhost;dbname=bdd','root','');


}catch(PDOException $e){
    echo $e->getMessage();
}
?>