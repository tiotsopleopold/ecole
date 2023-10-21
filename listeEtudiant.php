<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <?php
    require("connexion.php");
        if (isset($_GET['idasupprimer'])) {
            $idasupprimer = $_GET['idasupprimer'];
            $requete = "DELETE FROM etudiant WHERE id = '$idasupprimer' ";
            mysqli_query($link, $requete);
        }
    ?>
    <div class="container">
        <h1> Tous les etudiants</h1>
        <br>
        <a href="etudiant.php"> Ajouter un etudiant</a>
        <table class="table table-strped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Matricule</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Filière</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Sportif</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $requete = " SELECT etudiant.*, filiere.* 
                                FROM etudiant LEFT OUTER JOIN filiere ON etudiant.idfiliere = filiere.idfiliere
                                ORDER BY nom DESC ";
                    $resultat = mysqli_query($link, $requete);
                    while ($row = mysqli_fetch_assoc($resultat)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td><?php echo $row['matricule'] ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['libelle'] ?></td>
                            <td><?php echo $row['date_naissance'] ?></td>
                            <td>
                                <?php 
                                    if ($row['sportif'] == 1) {
                                        echo 'Oui';
                                    }else {
                                        echo 'Non';
                                    }
                                ?>  
                            </td>
                            <td><?php echo $row['sexe'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><a href="<?php echo 'etudiant.php?idetudiant='.$row['id']?>">Modifier</a>
                            <a href="<?php echo 'suppresion.php?idetudiant='.$row['id'].'&nom='.$row['nom']?>">Supprimer</a></td>

                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>