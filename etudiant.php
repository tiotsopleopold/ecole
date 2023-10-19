<?php 
    error_reporting(E_ERROR);
?>
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
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>Enregistrement d'un étudiant</h1>

                <?php
                    if (isset($_GET['idetudiant'])) {
                        $nom = "";
                        $id = $_GET['idetudiant'];
                        $link = mysqli_connect("localhost","root","","schools");
                        if ($link === false) {
                            die("ERROR : could not connect.". mysqli_connect_error());
                        }
                        $requete = "SELECT * FROM etudiant WHERE id=$id";
                        $resultat = mysqli_query($link, $requete);
                        $row = mysqli_fetch_assoc($resultat);
                    }
                ?>

                <form method="post" action="confirmation.php">
                    <input hidden value="<?php echo $row['id'] ?>" type="text" name="id">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-form-label" for="nom">Nom</label>
                            <input value="<?php echo $row['nom'] ?>" type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom ....">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="date naissance">Date naissance</label>
                            <input value="<?php echo $row['date_naissance'] ?>"  type="date" class="form-control" id="date" name="datenaissance">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="matricule">Matricule</label>
                            <input value="<?php echo $row['matricule'] ?>" type="text" class="form-control" id="matricule" name="matricule" placeholder="Votre matricule ....">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="Filière">Filière</label>
                            <select name="filiere" id="filiere" class="form-select">
                                <option value="">Selectionner votre filère.... </option>
                                <?php
                                    $link = mysqli_connect("localhost","root","","schools");
                                    if ($link === false) {
                                        die("ERROR : could not connect.". mysqli_connect_error());
                                    }
                                    $requete = "SELECT * FROM filiere ORDER BY libelle";
                                    $resultat = mysqli_query($link, $requete);
                                    while ($row1 = mysqli_fetch_assoc($resultat)) {
                                        ?>
                                        <option <?php if( $row['idfiliere'] == $row1['idfiliere']){ 
                                            echo 'selected';
                                        }  ?> value="<?php echo $row1['idfiliere'] ?>">
                                        <?php
                                        echo $row1['libelle']
                                        ?>
                                        </option>
                                        <?php
                                    }

                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="Email">Email</label>
                            <input value="<?php echo $row['email'] ?>" type="email" class="form-control" id="email" name="email" placeholder="Adresse email ....">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="genre">Sexe</label>
                            <select name="genre" id="genre" class="form-select">
                                <option value="">Selectionner votre Genre.... </option>
                                <option value="M" <?php if ($row['sexe']=='M') {
                                    echo 'selected';
                                } ?> > Masculin </option>
                                <option value="F" <?php if ($row['sexe']=='F') {
                                    echo 'selected';
                                } ?>  > Feminin </option>
                            </select>
                        </div>
                        <div class="form-check">
                            <label class="col-form-label">
                                <input <?php if ($row['sportif'] == 1) {
                                    echo 'checked';
                                } ?> type="checkbox" name="sportif" class="form-check-input">
                                Sportif
                            </label>                            
                        </div>

                        <br>

                        <div class="form-group">
                            <input class="btn btn-danger" type="reset" value="annuler">
                            <input class="btn btn-success" type="submit"  value="enregistrer">
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
</body>
</html>