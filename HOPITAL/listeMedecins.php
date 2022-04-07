<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Liste des medecins de l'hopital</h1><hr>
    <table>
        <tr>
            <th>Numero</th><th>Nom</th><th>Prénom</th>
            <th>Specialité</th><th>Service</th><th>Modif</th><th>Supp</th>
        </tr>
    <?php
    //Connexion à mysql et choix de la bdd
    $id = mysqli_connect("127.0.0.1","root","","hopital");
    //Execution de la requete et récupération des infos dans $resultat
    $req = "select * from medecins order by nom";
    $resultat = mysqli_query($id, $req);
    //Récupération d'une ligne du resultat et positionnement du
    //curseur en dessous
    while($ligne = mysqli_fetch_assoc($resultat))
    {
    echo "<tr>
            <td>".$ligne["numed"]."</td>
            <td>".$ligne["nom"]."</td>
            <td>".$ligne["prenom"]."</td>
            <td>".$ligne["specialite"]."</td>
            <td>".$ligne["service"]."</td>
            <td><a href='modif.php?numed=".$ligne["numed"]."'><img src='modif.png' width='25'></a></td>
            <td><a href='supp.php?numed=".$ligne["numed"]."'><img src='supp.png' width='25'></a></td>
        </tr>";
    }
    ?>
    </table>
    Il y a <?php echo mysqli_num_rows($resultat);?> medecin(s)
</body>
</html>