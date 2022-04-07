<?php
    $numed =  $_GET["numed"];
    $id = mysqli_connect("localhost","root","","hopital");
    $req = "select * from medecins where numed = $numed";
    $res = mysqli_query($id, $req);
    $ligne = mysqli_fetch_assoc($res);
    $nom = $ligne["nom"];
    $prenom = $ligne["prenom"];
    $specialite = $ligne["specialite"];
    $service = $ligne["service"];
    //print_r($ligne);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modification des infos du Dr <?=$nom?></h1><hr>
    <form action="modif2.php" method="post">
        <input type="hidden" name="numed" value="<?=$numed?>">
        <input type="text" name="nom" value="<?=$nom?>"><br><br>
        <input type="text" name="prenom" value="<?=$prenom?>"><br><br>
        <select name="specialite">
            <?php
                $req2 = "SELECT DISTINCT specialite FROM medecins order by specialite";
                $res2 = mysqli_query($id, $req2);
                while($ligne2 = mysqli_fetch_assoc($res2))
                {
                    if($ligne2["specialite"] == $specialite){
                        echo "<option selected>".$ligne2["specialite"]."</option>";
                    }else{
                        echo "<option>".$ligne2["specialite"]."</option>";
                    }
                }
            ?>
        </select><br><br>
        <input type="text" name="service" value="<?=$service?>"><br><br>
        <input type="submit" value="MODIFIER">
    </form><hr>
</body>
</html>
