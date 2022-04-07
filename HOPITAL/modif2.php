<?php
    // $numed = $_POST["numed"];
    // $nom = $_POST["nom"];
    // $prenom = $_POST["prenom"];
    // $specialite = $_POST["specialite"];
    // $service = $_POST["service"];
    extract($_POST);

    $id = mysqli_connect("localhost","root","","hopital");
    $req = "UPDATE medecins SET
                nom = '$nom',
                prenom = '$prenom',
                specialite = '$specialite',
                service = '$service'
            WHERE numed = $numed";
    mysqli_query($id, $req);
    echo "Les infos du Dr $nom ont bien été mises à jour.....";
    header("refresh:3; url=listeMedecins.php");

?>