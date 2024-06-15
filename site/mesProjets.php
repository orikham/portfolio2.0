<?php require_once './squelette/header.php'; ?>

<section id="mesProjets">
    
<article>
        <div class="containerCards">
            <?php if (!empty($projects)) { ?>
                <?php foreach ($projects as $project) { ?>
                    <div class="card">
                        <h1><?= htmlspecialchars($project['title']) ?></h1>
                        <img src="<?= htmlspecialchars($project['thumbnail']) ?>" alt="<?= htmlspecialchars($project['title']) ?>">
                        <h2>Langages utilisés :</h2>
                        <div class="languages">
                            <?php 
                            $languages = explode(', ', $project['languages']);
                            foreach ($languages as $language) { ?>
                                <img src="<?= htmlspecialchars($language) ?>" alt="">
                            <?php } ?>
                        </div>
                        <p><?= htmlspecialchars($project['resume']) ?></p>
                        <a href="<?= htmlspecialchars($project['link']) ?>" target="_blank">Voir le site</a>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p>Aucun projet trouvé.</p>
            <?php } ?>
        </div>
    </article>


</section>
</main>
<?php require_once './squelette/footer.php'; ?>