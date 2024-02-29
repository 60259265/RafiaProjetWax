<?php 

// informations de connexion à la base de données
$serveur = "localhost"; // Le nom du serveur MySQL
$utilisateur = "root"; // Votre nom d'utilisateur MySQL
$mot_de_passe = ""; // Votre mot de passe MySQL
$nom_base_de_donnees = "ProjetWaxangari"; // Nom de votre base de données

// Connexion à MySQL
$result = mysqli_connect($serveur, $utilisateur, "", $nom_base_de_donnees);

// Vérification de la connexion

if (!$result) {
    die("La connexion a échoué : " . mysqli_connect_error());
}   
else{
}
$email = $_POST["email"];
$mot_de_passe = $_POST["mot_de_passe"];
$auth = $result -> query("SELECT * FROM Inscriptions WHERE email='$email' AND  mot_de_passe='".$mot_de_passe."'");
 
if($user = $auth->fetch_assoc()){
    $session_start();
    $_SESSION['id']=$user['id'];
    echo"ookkk";
}
else{
    echo "information incorrectes";
}
?>