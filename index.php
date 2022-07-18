<?php require "header.php" ?>

    <section class="accueil" id="accueil">
        <div class="accueil_wrapper">
            <p>Je m'appelle Guillaume Robert</p>
            <p class="accueil-primary">Je suis Développeur front-end et web designer</p>
        </div>
        <div class="accueil-part"></div>
        <div class="accueil-part2"></div>
    </section>

    <section class="profile">
        <h2 id="profile">A propos de moi</h2>
        <div class="profil_wrapper">
            <div class="img_content">
                <img src="Images/portfolio.jpg" alt="ma photo">
            </div>
            <div class="profile_text">
                <p>
                    Je m'appelle Guillaume, j'ai <span id="age"></span> ans. Après l’obtention d’une licence en Musicologie, j’ai travaillé
                    comme ingénieur du son et professeur de musique freelance, en parallèle de mon activité
                    professionnelle principale.
                </p>
                <p>
                    Attiré par les nouvelles technologies, j’ai intégré la formation Acces Code School
                    “Concepteur/Designer UI” en 2021, qui me permet de travailler comme Web Designer/Intégrateur.
                </p>
            </div>
        </div>
    </section>

    <section class="skills">
        <h2 id="skills">Mes compétences<span class="skills_dec"></span></h2>
        <div class="skills_wrapper">
            <a href="DOC/Guillaume Robert.pdf" target="_blank"><img src="Images/Guillaume Robert.png"
                    alt="curriculum vitae"></a>
            <div class="skills_content">
                <ul class="skills_icons_wrapper">
                    <li title="PHP"><span class="iconify" data-icon="file-icons:php"></span></li>
                    <li title="HTML"><span class="iconify" data-icon="akar-icons:html-fill"></span></li>
                    <li title="CSS"><span class="iconify" data-icon="akar-icons:css-fill"></span></li>
                    <li title="JavaScript"><span class="iconify" data-icon="cib:js"></span></li>
                    <li title="Git"><span class="iconify" data-icon="akar-icons:github-fill"></span></li>
                    <li title="VS Code"><span class="iconify" data-icon="akar-icons:vscode-fill"></li>
                    <li title="Adobe Illustrator"><span class="iconify" data-icon="file-icons:adobe-illustrator"></li>
                    <li title="Figma"><span class="iconify" data-icon="icon-park-outline:figma"></span></li>
                    <li title="Wordpress"><span class="iconify" data-icon="brandico:wordpress"></span></li>
                    <li title="Bootstrap"><span class="iconify" data-icon="simple-icons:bootstrap"></span></li>
                    <li title="Photoshop"><span class="iconify" data-icon="file-icons:adobe-photoshop"></span></li>
                    <li title="Premiere"><span class="iconify" data-icon="file-icons:adobe-premiere"></span></li>
                    <li title="SASS"><span class="iconify" data-icon="cib:sass-alt"></span></li>
                    <li title="VueJS"><span class="iconify" data-icon="cib:vue-js"></span></li>
                    <li title="Joomla"><span class="iconify" data-icon="cib:joomla"></span></li>
                </ul>



                <p>Je suis capable de créer et d'intégrer les maquettes de sites web en assurant le responsive design
                    afin
                    que l'interface soit adaptée à tous les supports de navigation internet en utilisant les
                    technologies et
                    les outils adéquats.
                </p>
                <p>
                    J'assure également l'adaptation et la création des éléments visuels qui composent le site (logos,
                    vidéos,
                    images, illustrations) afin qu'ils s'insètrent au mieux dans le style graphique général. J'ai
                    également
                    la
                    possibilité d'effectuer le traitement sonore des vidéos et autres médias audio en cas de besoin
                    grâce à
                    mon
                    savoir faire acquis avec mon activité musicale.
                </p>
            </div>
        </div>
    </section>
    <section class="portfolio">
        <h2 id="portfolio">Portfolio</h2>
        <p class="portfolio_txt">Retrouvez ici quelques projets que j'ai réalisé</p>

        <div class="project-wrapper">

            <div class="project">
                <label for="inf_contactus"><img src="Images/contactUs.png" alt=""></label>
                <input type="checkbox" id="inf_contactus">
                <label for="inf_contactus" class="infos_project">
                    <div class="infos_content">
                        <h3>Sprint</h3>
                        <p>Intégration d'une maquette en assurant le responsive.</p>
                        <p>HTML, SCSS, JavaScript</p>
                        <a class="linkGit" href="https://github.com/Guillaume-Rbt/Sprint" target="_blank"
                            title="Voir le projet sur Github"><span class="iconify Img_resmod"
                                data-icon="akar-icons:github-fill"></a>
                    </div>
                </label>
            </div>

            <div class="project">
                <label for="inf_lcf"> <img src="Images/lesciseauxdeflorine.png" alt=""></label>
                <input type="checkbox" id="inf_lcf">
                <label for="inf_lcf" class="infos_project">
                    <div class="infos_content">
                        <h3>les ciseaux de Florine</h3>
                        <p>Maquettage et intégration sur Wordpress (thème enfant) d'un site de coiffure.</p>
                        <p>HTML, SCSS, JavaScript, PHP, Wordpress</p>
                        <a class="linkGit" href="https://github.com/Guillaume-Rbt/lcf"
                            target="_blank" title="Voir le projet sur Github"><span class="iconify Img_resmod"
                                data-icon="akar-icons:github-fill"></a>
                                <a class="linkGit" href="https://lesciseauxdeflorine.fr/" target="_blank"
                        title="Voir le site"><span class="iconify" data-icon="iconoir:internet" style="color: white;"></span></a>
                    </div>
                </label>
            </div>

            <div class="project">
                <label for="inf_blog"><img src="Images/blog_promo.png" alt=""></label>
                <input type="checkbox" id="inf_blog">
                <label for="inf_blog" class="infos_project">
                <div class="infos_content">
                    <h3>Blog de la promotion</h3>
                    <p>Maquettage et intégration sur Wordpress (thème enfant) du blog de la promotion de la formation
                        ACS.</p>
                    <p>HTML, SCSS, JavaScript, PHP, Wordpress</p>
                    <a class="linkGit" href="https://github.com/Guillaume-Rbt/blogpromo" target="_blank"
                        title="Voir le projet sur Github"><span class="iconify Img_resmod"
                            data-icon="akar-icons:github-fill"></a>
                </div>
            </label>
            </div>

            <div class="project">
                <label for="inf_flappy"><img src="Images/flapybird.png" alt=""></label>
                <input type="checkbox" id="inf_flappy">
                <label for="inf_flappy" class="infos_project">
                <div class="infos_content">
                    <h3>Jeu Flappybird</h3>
                    <p>Programmation en javascript du jeu Flappybird</p>
                    <p></p>
                    <a class="linkGit" href="https://github.com/Guillaume-Rbt/flappybird" target="_blank"
                        title="Voir le projet sur Github"><span class="iconify Img_resmod"
                            data-icon="akar-icons:github-fill"></a>
                </div>
            </label>
            </div>

            <div class="project">
                <label for="inf_3l"><img src="Images/3lamengement.png" alt=""></label>
                <input type="checkbox" id="inf_3l">
                <label for="inf_3l" class="infos_project">
                <div class="infos_content">
                    <h3>3L aménagement</h3>
                    <p>Création d'un site pour une entreprise d'aménagement, réalisé lors de mon stage au sein de Netizis.</p>
                    <p>PHP, HTML, CSS, JavaScript</p>
                    <a class="linkGit" href="https://github.com/Guillaume-Rbt/3lamenagement-v2" target="_blank"
                        title="Voir le projet sur Github"><span class="iconify Img_resmod"
                            data-icon="akar-icons:github-fill"></a>
                            <a class="linkGit" href="https://3lamenagement.fr/" target="_blank"
                        title="Voir le site"><span class="iconify" data-icon="iconoir:internet" style="color: white;"></span></a>
                </div>
            </label>
            </div>

          

        </div>
    </section>


    <section class="contact">
        <h2 id="contact">Me contacter</h2>
        <p class="infoForm">Tous les champs doivent etre renseignés</p>
        <?php

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;

            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';
            $mail = new PHPMailer(false);
            $mail->CharSet = 'UTF-8';

            $secret = "6Ld8DfMfAAAAAD7HqCzRkAJ0CBNwZMvJncYBbYR1";
            $response = $_POST['g-recaptcha-response'];
            $remoteip = $_SERVER['REMOTE_ADDR'];
            $api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
                . $secret
                . "&response=" . $response
                . "&remoteip=" . $remoteip;

            $decode = json_decode(file_get_contents($api_url), true);

            if (isset($_POST['name']) and isset($_POST['email'])) {
                $mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
                $mail->Host = 'smtp.ionos.fr '; // Spécifier le serveur SMTP
                $mail->SMTPAuth = true; // Activer authentication SMTP
                $mail->Username = 'contact@guillaume-robert-webdev.fr'; // Votre adresse email d'envoi
                $mail->Password = 'YB8CGJhKK5ZL9dz'; // Le mot de passe de cette adresse email
                $mail->SMTPSecure = 'tls'; // Accepter SSL
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                $mail->Port = 465;
                $mail->setFrom('contact@guillaume-robert-webdev.fr', 'Guillaume Robert'); // Personnaliser l'envoyeur
                $mail->addAddress($_POST['email'], $_POST['name']); // Ajouter le destinataire
                $mail->addReplyTo('contact@guillaume-robert-webdev.fr', 'Guillaume Robert'); // L'adresse de réponse
                $mail->addCC('contact@guillaume-robert-webdev.fr');
                $mail->isHTML(true); // Paramétrer le format des emails en HTML ou non
                $mail->Subject = '[contact@guillaume-robert-webdev.fr] Formulaire de contact';
                $mail->Body = "Nous avons bien reçu votre demande. Nous allons reprendre contact avec vous très rapidement. A très bientôt ! <br/><br/><hr/><br/><strong>Nom : </strong>" . $_POST['name'] . "Prénom :" . $_POST["firstname"] . " Objet :  " . $_POST['object'] . " Email : " . $_POST['email'] . "Message : " . $_POST['mess'];
                $mail->AltBody = "Nous avons bien reçu votre demande. Nous allons reprendre contact avec vous très rapidement. A très bientôt ! Nom : " . $_POST['name'] . "Prénom :" . $_POST["firstname"] . " Objet :  " . $_POST['object'] . " Email : " . $_POST['email'] . "Message : " . $_POST['mess'];

                if (!$mail->send()) {
                    echo '<p class="valid" id="valid"> Le message n\'a pas été evoyé</p>';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo '<p class="valid" id="valid"> Le message a été envoyé</p>';
                }
            } else {
            }
            ?>
        <form id="form" action="index.php/#contact" method="post" enctype="multipart/form-data">
            <p class="valid" id="valid"></p>
            
            <div class="lineField">
                <div class="field-group"><label for="name">NOM</label>
                    <input type="text" id="name" name="name" class="field" placeholder="DUPONT" maxlength="50"
                        autocomplete="off" />
                </div>
                <div class="field-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="firstname" class="field" placeholder="Jean" maxlength="50"
                        autocomplete="off" />
                </div>
            </div>
            <div class="lineField">
                <div class="field-group">
                    <label for="société">Objet</label>
                    <input type="text" name="object" id="object" class="field" placeholder="Demande d'informations"
                        maxlength="50" autocomplete="off" />
                </div>
                <div class="field-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="field" placeholder="jean.dupont@gmail.com"
                        maxlength="100" autocomplete="off" />
                </div>
            </div>
            <label for="mess">Message</label>
            <textarea class="field mess" id="mess" name="mess" placeholder="Votre message..."></textarea>
            <div class="g-recaptcha" data-sitekey="6Ld8DfMfAAAAAGR6XpzGhb056E1yOYiiXiTuGhN-"></div>
            <div> <input type="submit" value="Envoyer" class="submit" /></div>
          
        </form>
    </section>
    <footer>

        <div class="reseaux">
        
            <div>

           <a href="https://www.linkedin.com/in/guillaume-robert-258507158/" target="_blank"><span class="iconify" data-icon="akar-icons:linkedin-box-fill"></span></a> 
            <a href="https://github.com/Guillaume-Rbt" target="_blank"><span class="iconify" data-icon="akar-icons:github-fill"></span></a>
            </div>
            
        </div>
        
        <div class="copyright"><p>© Guillaume Robert 2022 - Tous droits réservés </p></div>

        <?php require "footer.php" ?>