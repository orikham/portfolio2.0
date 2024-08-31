<?php include './squelette/header.php'; ?>

<section id="contact">
    <div id="titreFormulaire">
        <h1>Contacter moi via le formulaire ou viendez sur mes réseaux sociaux</h1>
    </div>

    <article id="formulaire">
        <div id="boite">
            <div id="infosContact">
                <h2>Formulaire de contact</h2>
                <p>Remplissez le formulaire ci-dessous pour me contacter</p>
            </div>

            <form method="post" action="">
                <div id="identity">
                    <div class="champ">
                        <label for="Nom">Nom : </label><br>
                        <input type="text" id="Nom" name="Nom" placeholder="nom" required>
                    </div>
                    <div class="champ">
                        <label for="prenom">Prénom : </label><br>
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
                    </div>
                </div>
                <div class="champ">
                    <label for="mail">mail : </label><br>
                    <input type="email" id="mail" name="mail" style="width:400px;" placeholder="Monadresse@mail.com" required>
                </div><br>
                <div class="champ">
                    <label for="subject">Objet : </label><br>
                    <input type="text" id="subject" name="subject" placeholder="Objet" required>
                </div>
                <div class="champ">
                    <label for="Message"> Message : </label><br>
                    <textarea id="Message" name="Message" placeholder="Votre message/demande d'information" required></textarea>
                </div>
                <button type="submit" class="formu" name="submit" value="submit">Envoyer</button>
            </form>
        </div>
        <div id="reseauxSociaux">
            
            <div id="logosSocial">
                <a class="mediaLogo" href="http://"><img src="../asset/images/svgreseau/Facebook.svg" alt=""></a>
                <a class="mediaLogo" href="https://www.instagram.com/"><img class="mediaLogo" src="../asset/images/svgreseau/instagram.svg" alt=""></a>
                <a class="mediaLogo" href="http://"><img class="mediaLogo" src="../asset/images/svgreseau/discord.svg" alt=""></a>
                <a class="mediaLogo" href="http://"><img class="mediaLogo" src="../asset/images/svgreseau/linkedin.svg" alt=""></a>
                <a class="mediaLogo" href="http://"><img class="mediaLogo" src="../asset/images/svgreseau/snapchat.svg" alt=""></a>
                <a class="mediaLogo" href="http://"><img class="mediaLogo" src="../asset/images/svgreseau/twitter.svg" alt=""></a>
                <a class="mediaLogo" href="http://"><img class="mediaLogo" src="../asset/images/svgreseau/whatsapp.svg" alt=""></a>
            </div>
        </div>
    </article>
</section>
<?php require_once './squelette/footer.php'; ?>
