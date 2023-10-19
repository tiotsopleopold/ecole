<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>
<?php
include 'connexion.php';
//session_start();

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $mat = $_POST['mat'];
   $mat = filter_var($mat, FILTER_SANITIZE_STRING);
   $filiere = $_POST['filiere'];
   $filiere = filter_var($filiere, FILTER_SANITIZE_STRING);
   $date = $_POST['date'];
   $date = filter_var($date, FILTER_SANITIZE_STRING);
   $sport = $_POST['sport'];
   $sport = filter_var($sport, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $sexe = $_POST['sex'];
   $sexe = filter_var($sexe, FILTER_SANITIZE_STRING);

   $sql = "INSERT into etudiant values('$name','$mat','$filiere','$date','$sport','$email','$sexe')";

    header("location:listeEtudiant.php");
   
}

?>
<section class="form-container">

<form action="listeEtudiant.php" method="post">
  <h3>Register student</h3> 
 <p>Nom <input type="text" name="name" class="box"></p><br>
  <p>Matricule <input type="text" name="mat" class="box"></p><br>
  <p>Filiere <input type="text" name="filiere" class="box"></p><br>
  <p>Date de naissance <input type="date" name="date" class="box"></p><br>
  <p>Sportif  <input type="text" name="sport"></p><br>
           <p>Email <input type="email" name="email" class="box"></p><br>
           <p>Sexe <input type="text" name="sexe" class="box"></p><br>
           <p><input type="submit" value="Submit"><br>

</form>

    </section>

    
</body>
</html>