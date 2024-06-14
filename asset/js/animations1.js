document.addEventListener('DOMContentLoaded', () => {

    const accueil = document.getElementById('accueil');
    const symboles = [
        './asset/images/svgcode/css3.svg',
        './asset/images/svgcode/dribbble.svg',
        './asset/images/svgcode/figma.svg',
        './asset/images/svgcode/git.svg',
        './asset/images/svgcode/github.svg',
        './asset/images/svgcode/html5.svg',
        './asset/images/svgcode/js.svg',
        './asset/images/svgcode/notion.svg',
        './asset/images/svgcode/php.svg',
        './asset/images/svgcode/sass.svg',
        './asset/images/svgcode/sql.svg',
        './asset/images/svgcode/vs_code.svg'
    ];

    // Fonction pour déplacer les images de manière aléatoire
    function deplacerImages() {
        symboles.forEach(symbole => {
            //const maxHeight = Math.min(500, accueil.offsetHeight);
            const images = accueil.querySelectorAll('img[src="' + symbole + '"]'); // Sélectionner toutes les images avec le même chemin

            images.forEach(img => {
                // Définir de nouvelles positions aléatoires
                img.style.left = Math.random() * (accueil.offsetWidth - img.offsetWidth) + 'px';
                img.style.top = Math.random() * (accueil.offsetHeight - img.offsetHeight) + 'px';
            });
        });

        // // Appeler la fonction de déplacement périodiquement
        setTimeout(deplacerImages, 1000); // Déplacer les images toutes les 3 secondes
    }


    // Parcourir le tableau de symboles
    symboles.forEach(symbole => {
    
        const img = document.createElement('img');       // Créer un nouvel élément img
        
        img.src = symbole;          // Définir l'attribut src de l'élément img
        img.style.width = '75px';
        img.style.height = '75px';
        img.style.zIndex = '10';
        img.style.border = '1px solid black';
        img.style.borderRadius = '200px';
        img.style.position = 'absolute';
        
       
       


        
        accueil.appendChild(img);       // Ajouter l'image à la div accueil
    });
    // Appeler la fonction de déplacement pour la première fois
    deplacerImages();

});