<?php
if(isset($_POST['submit'])){  // Vérifie si le formulaire a été soumis
    $destinataire = "dimitridevweb@hotmail.com";
    
    // Vérifie que les clés existent et récupère les données du formulaire
    $sujet = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['Message']) ? $_POST['Message'] : '';
    $nom = isset($_POST['Nom']) ? $_POST['Nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $email = isset($_POST['mail']) ? $_POST['mail'] : '';
    $origine = "en provenance de portfolio";
    
    // Vérifie que tous les champs sont remplis
    if(empty($nom) || empty($prenom) || empty($email) || empty($sujet) || empty($message)){
        echo "Veuillez remplir tous les champs.";
    } else {
        // Formate le contenu de l'e-mail
        $contenu = "origine: $origine\n\n";
        $contenu .= "Nom: $nom\n";
        $contenu .= "Prénom: $prenom\n";
        $contenu .= "E-mail: $email\n\n";
        $contenu .= "Message:\n$message\n";
        
        // Configure les en-têtes de l'e-mail
        $headers = "From: $nom <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Envoie l'e-mail
        if(mail($destinataire, $sujet, $contenu, $headers)){
            // Redirige vers la page d'accueil après l'envoi
            header('Location: ../index.php');
            exit;
        } else {
            echo "L'envoi de l'e-mail a échoué.";
        }
    }
}
?>
