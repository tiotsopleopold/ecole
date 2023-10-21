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
    <?php
        $nom="";
        $idetudiant="";

        if (isset($_GET['idetudiant']))
            $idetudiant = $_GET['idetudiant'];
        if (isset($_GET['nom']))
            $nom = $_GET['nom'];
        echo '<h2>Voulez-voous supprimer '.$nom.' ?</h2><br>';

        echo '<div class="form-group">';
        echo '<a class="btn btn-danger" href="listeEtudiant.php?idasupprimer='.$idetudiant.'">OUI</a>';
        echo '<a class="btn btn-success" href="listeEtudiant.php">NON</a>';
        echo '</div>';
    
    ?>
    
</body>
</html>