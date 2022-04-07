<?php
    
    $numed =  $_GET["numed"];

    select * from medecins where numed =

    echo "Le medecin numéro : $numed a été supprimé de la base.....";

    $id = mysqli_connect("localhost","root","","hopital");
    $req = "delete from medecins where numed = $numed";
    mysqli_query($id, $req);
    header("refresh:3; url=listeMedecins.php");
?>