<?php include './squelette/header.php'; ?>

<section id="contact">
    <div id="titreFormulaire">
                <h1>Contacter moi via le formulaire ou viendez sur mes reseaux sociaux</h>
    </div>

    <article id="formulaire" >
        <div id="boite">
            <div id="infosContact">
                <h2>Formulaire de contact</h2>
                <p>Remplissez le formulaire ci-dessous
                        pour me contacter</p>
            </div>

            <form method="post" action="envoisMail.php">
                <div id="identity">
                    <div class="champ">
                        <label for="Nom">Nom : </label><br>
                        <input type="text" id="Nom" placeholder="nom" required>
                    </div>
                    <div class="champ">
                        <label for="prenom">Prénom : </label><br>
                        <input type="text" id="prenom" placeholder="Prénom" required>
                    </div>
                </div>
                    <div class="champ">
                        <label for="mail">mail : </label><br>
                        <input type="email" id="mail" style="width:400px;" placeholder="Monadresse@mail.com" required>
                    </div><br>
                    <div class="champ">
                        <label for="subject">Objet : </label><br>
                        <input type="text" id="subject" placeholder="Objet" required>

                        
                    </div>
                    <div class="champ">
                        

                        <label for="Message"> Message : </label><br>
                        <textarea type="text" id="Message" placeholder="Votre message/demande d'information" required></textarea>
                    </div>
                    <submit class="formu" name="submit" value="submit">Envoyer</submit>
            </form>
        </div>
        <div id="reseauxSociaux">
            <div id="fondImg"><img class="rezo" src="./IMG/reseauxSociaux.png" alt="social picture" ></div>
            <div id="logosSocial">
                <a class="mediaLogo" href="http://"><img  src="./SVG/Facebook.svg" alt=""></a>
                <a class="mediaLogo" href="https://www.instagram.com/"><img class="mediaLogo" src="./SVG/instagram.svg" alt=""></a>
                <a class="mediaLogo" href="http://"><img class="mediaLogo" src="./SVG/discord.svg" alt=""></a>
                <a class="mediaLogo" href="http://"><img class="mediaLogo" src="./SVG/linkedin.svg" alt=""></a>
                <a class="mediaLogo" href="http://"><img class="mediaLogo" src="./SVG/snapchat.svg" alt=""></a>
                <a class="mediaLogo" href="http://"><img class="mediaLogo" src="./SVG/twitter.svg" alt=""></a>
                <a class="mediaLogo" href="http://"><img class="mediaLogo" src="./SVG/whatsapp.svg" alt=""></a>


            </div>
        </div>
    </article>
</section>
<?php require_once './squelette/footer.php'; ?>