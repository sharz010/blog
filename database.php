<?php
/*Login gegevens voor je database*/
$user = 'root';
$pass = '';
try{
    /*Probeert een verbinding te maken met de database*/
    $conn = new PDO("mysql:host=localhost;dbname=curdy",$user,$pass);
}catch (PDOException $error){
    echo $error;
    /*Als er een fout is, dan laat hij de foutmelding zien*/
}
