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
}
            echo ($msg);
        
                ?>