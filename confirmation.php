<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        require ('connexion.php');
            $nom = "";
            $datenaissance = " ";
            $matricule = " ";
            $email = " ";
            $sexe = " ";
            $sportif = " ";
            $id = " ";
            $idfiliere = " ";

            if (isset($_POST['filiere'])) {
                $idfiliere = $_POST['filiere'];
            }
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
            }
            if (isset($_POST['nom'])) {
                $nom = $_POST['nom'];
            }
            if (isset($_POST['datenaissance'])) {
                $datenaissance = $_POST['datenaissance'];
            }
            if (isset($_POST['matricule'])) {
                $matricule = $_POST['matricule'];
            }
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            }
            if (isset($_POST['genre'])) {
                $sexe = $_POST['genre'];
            }
            if (isset($_POST['sportif'])) {
                $sportif = 1;
            }else{ 
                $sportif = 0;
            }

           
            

            if (strlen($id) == 0) {
                $sql = "INSERT INTO etudiant(nom, matricule, date_naissance, sportif, email, sexe, idfiliere) 
                VALUES('$nom', '$matricule', '$datenaissance', '$sportif', '$email', '$sexe', '$idfiliere') ";
                echo $sql;
                if (mysqli_query($link, $sql)) {
                    $last_id = mysqli_insert_id($link);
                    echo '<h2> Enregistrement de '.$nom.' effectué avec success </h2><br>';
                    echo '<div class="form_group"> </div>';
                    echo '<a class="btn btn-primary" href="etudiant.php">Nouveau </a>';
                    echo '<a class="btn btn-success" href="etudiant.php?idetudiant='.$last_id.'">Modifier </a>';
                    echo '<a class="btn btn-dark" href="listeEtudiant.php">Voir les etudiants</a>';
                    echo '</div>';
                }else{
                    echo "ERROR could not be able to execute $sql.". mysqli_error($link);
                }
            }else {
                $sql = "UPDATE etudiant SET nom = '$nom', matricule = '$matricule', date_naissance='$datenaissance', sportif='$sportif', 
                        email='$email', sexe='$sexe', idfiliere='$idfiliere' WHERE id ='$id' ";
                if (mysqli_query($link, $sql)) {
                    $last_id = mysqli_insert_id($link);
                    echo '<h2> Modification de '.$nom.' effectuée avec success </h2><br>';
                    echo '<div class="form_group"> </div>';
                    echo '<a class="btn btn-primary" href="etudiant.php">Nouveau </a>';
                    echo '<a class="btn btn-success" href="etudiant.php?idetudiant='.$id.'">Modifier </a>';
                    echo '<a class="btn btn-dark" href="listeEtudiant.php">Voir les etudiants</a>';
                    echo '</div>';
                }else{
                    echo "ERROR could not be able to execute $sql.". mysqli_error($link);
                }
            }

            mysqli_close($link);
        ?>
        
    </div>
</body>
</html>