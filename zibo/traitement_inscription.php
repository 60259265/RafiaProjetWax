<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données soumises
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["phone"];
    $adresse = $_POST["adress"];
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    // Traitement des données (par exemple, insertion dans une base de données)
    // Ici, vous devrez écrire le code pour insérer les données dans votre base de données MySQL
    
    // Exemple simple d'affichage des données soumises
    echo "Inscription réussie !<br>";
    echo "Nom : " . $nom . "<br>";
    echo "Prenom : " . $prenom . "<br>";
    echo "Telephone : " . $telephone . "<br>";
    echo "Adresse : " . $adresse. "<br>";
    echo "Email : " . $email . "<br>";
    echo "mot_de_passe : " . $mot_de_passe . "<br>";
    // Notez que vous ne devriez jamais afficher le mot de passe en clair sur votre site
    if ($connexion->connect_error) {
        die("Échec de la connexion : " . $connexion->connect_error);
    }
    
    // Requête SQL pour récupérer des données
    $sql = "SELECT * FROM Inscriptions";
    $resultat = $connexion->query($sql);
    
    // Vérification des résultats
    if ($resultat->num_rows > 0) {
        // Affichage des données
        while($ligne = $resultat->fetch_assoc()) {
            echo "nom: " . $ligne["nom"]. " - prenom: " . $ligne["prenom"]. "<br>";
            // Vous pouvez adapter l'affichage selon vos besoins
        }
    } else {
        echo "Aucun résultat trouvé";
    }
    
    // Fermeture de la connexion
    $connexion->close();
    }

?>
