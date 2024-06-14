<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $company = htmlspecialchars($_POST['company']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Configuration de l'e-mail
    $to = "sellam.ali75@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message du formulaire de contact";
    $body = "Nom: $name\n";
    $body = "Entreprise: $company\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";
    
    $headers = "From: $email";
    
    // Envoyer l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Échec de l'envoi du message.";
    }
} else {
    echo "Méthode de requête non supportée.";
}
?>
