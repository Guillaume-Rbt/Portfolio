<?php
$envoi = "oui";
$msg ="";
if (empty($_POST["name"]) or empty($_POST["firstname"]) or empty($_POST["email"]) or empty($_POST["mess"]) or empty($_POST['object'])) {
                
                $msg="Veuillez renseigner tous les champs.";
                $envoi = "non";
}
if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $_POST["email"])) {
        $msg .= " Veuillez entrer un email valide.";
        $envoi = "non";
}
if ($envoi=="oui") {
    $msg = "Votre message a été envoyé.";
    $expediteur ="contact@guillaume-robert-webdev.fr";
                $destinataire ="contact@guillaume-robert-webdev.fr";
                $sujet = "Contact Portfolio";
                $entete = 'From: webmaster@example.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
                $entete.= "MIME-version: 1.0\n";

                $entete.= "Content-type: text/html; charset= UTF-8\n"; 
                if(isset($_POST["object"]) and $_POST["object"]!="" ) {
                   
                    $object =$_POST["object"];
                }else {
                    $object = "NAN";
                }
                $mess_contenu = utf8_decode($_POST["mess"]);
                $mail_contenu = utf8_decode("De : ". htmlspecialchars($_POST["email"]))."\r\n\r\n".utf8_decode("Nom : ".htmlspecialchars($_POST["name"]))."\r\n\r\n".utf8_decode("prénom : ". htmlspecialchars($_POST["firstname"]))."\r\n\r\n".utf8_decode("objet : ".htmlspecialchars($object))."\r\n\r\n";
                $mail_contenu = utf8_encode($mail_contenu)."\r\n\r\n".utf8_encode("Message : ".htmlspecialchars($mess_contenu));
                mail($destinataire,$sujet,$mail_contenu,$entete); 
}
            echo ($msg);
        
                ?>