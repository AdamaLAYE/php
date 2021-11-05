<?php

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=adamlayes;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST['btn_Ajout']))
       {

      //echo "ok";

      $nom = $_POST['nom'];
     $prenom= $_POST['prenom'];
     $jour = $_POST['jour'];
    $mois = $_POST['mois'];
    $annee = $_POST['annee'];
    $age =  $_POST['age'];
    $ville = $_POST['ville'];

      $email = $_POST['email'];


      $mondate = $jour.''.$mois.''.$annee;

      $req = $bdd->prepare('INSERT INTO Apprenants(nom, prenom, mondate, age, ville, email) VALUES(:nom, :prenom, :mondate, :age, :ville, :email)');
      $req->execute(array(
          'nom' => $nom,
          'prenom' => $prenom,
          'mondate' => $mondate,
          'age' => $age,
          'ville' => $ville,
          'email' => $email
          ));
          echo 'Le jeu a bien été ajouté !';

        }  
 
?>