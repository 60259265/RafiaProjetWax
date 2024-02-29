<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styleInscription.css">
    <title>Inscription</title>
</head>

<body>
    <div class="inscription">
        <h2>Inscription</h2>
        <form action="traitement_inscription.php" method="post">
            <label style="margin-right: 600px;" for="nom">Nom :</label><br>
            <input type="text" id="nom" name="nom" required><br><br>

            <label style="margin-right: 500px;" for="firstName">Prénom :</label><br>
            <input type="text" id="firstName" name="firstName" required><br><br>

            <label style="margin-right: 600px;" for="firstName">Téléphone:</label><br>
            <input type="number" id="phone" name="phone" required><br><br>

            <label style="margin-right: 600px;" for="adresse">Adresse :</label><br>
            <input type="text" id="adresse" name="adress" required><br><br>


            <label style="margin-right: 600px;" for="email">Email :</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label style="margin-right: 600px;" for="mot_de_passe">Mot de passe :</label><br>
            <input  type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>

            <input type="submit" value="S'inscrire">
        </form>
    </div>

    <?php
    // informations de connexion à la base de données
    $serveur = "localhost"; // Le nom du serveur MySQL
    $utilisateur = "root"; // Votre nom d'utilisateur MySQL
    $mot_de_passe = ""; // Votre mot de passe MySQL
    $nom_base_de_donnees = "ProjetWaxangari"; // Nom de votre base de données

    // Connexion à MySQL
    $connexion = mysqli_connect($localhost, $root, "", $ProjetWaxangari,);

    // Vérification de la connexion

    if (!$connexion) {
        die("La connexion a échoué : " . mysqli_connect_error());
    } 
    ?>
</body>

</html>