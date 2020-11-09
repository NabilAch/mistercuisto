<?php  

// Les données en provenance du formulaire

$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$mobile = $_POST["mobile"];
$adresse = $_POST["adresse"];
$heure = $_POST["heure"];
$date = $_POST["date"];
$commentaire = $_POST["commentaire"];



// Connexion à la base de données
$conn = new PDO("mysql:host=localhost;dbname=reservation_formulaire;charset=utf8mb4", "Warex","toto", []);

// Requête SQL
$sql = "INSERT INTO reservation(nom,prenom,email,telephone,mobile,adresse,heure,date,commentaire) VALUES (:nom, :prenom, :email, :telephone, :mobile, :adresse, :heure, :date, :commentaire)";

// Envoi de la requête SQL à la base de données

$stmt = $conn->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telephone', $telephone);
$stmt->bindParam(':mobile', $mobile);
$stmt->bindParam(':adresse', $adresse);
$stmt->bindParam(':heure', $heure);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':commentaire', $commentaire);
$stmt->execute();

?>


<!-- Partie HTML retour et rediréction page -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo2.png"/>
    <link rel="stylesheet" href="formulaire.css"/>
</head>

<header>
    
<center>

<a href="../index.html">
  <img src="../img/logo2.png" alt="logo"> 
</a>

</center>
</header>

<body>

<center> 

    <h1> <p class="texte"> Votre réservation a bien été pris en compte </h1> </p>
<div>
    <h3> <a class="retour" href="../index.html"> Page d'accueil </h3> </a>

</div>
</center>    
</body>

</html>