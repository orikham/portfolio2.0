// script.js
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
  
    // Fonction pour obtenir des positions aléatoires dans le conteneur
    function getRandomPosition() {
      const containerRect = accueil.getBoundingClientRect();
      const x = Math.random() * (containerRect.width - 75); // 75 est la largeur de l'image
      const y = Math.random() * (containerRect.height - 75); // 75 est la hauteur de l'image
      return { x, y };
    }
  
    // Fonction pour déplacer une image à une position aléatoire
    function moveImage(image) {
      const { x, y } = getRandomPosition();
      image.style.transform = `translate(${x}px, ${y}px)`;
    }
  
    // Fonction pour animer les images
    function animateImages() {
      const images = document.querySelectorAll('.moving-image');
      images.forEach(image => {
        moveImage(image);
        setInterval(() => {
          moveImage(image);
        }, 5000); // Changer de position toutes les 5 secondes
      });
    }
  
    // Parcourir le tableau de symboles et créer des éléments img
    symboles.forEach(symbole => {
      const img = document.createElement('img');
      img.src = symbole;
      img.classList.add('moving-image');
      accueil.appendChild(img);
    });
  
    // Appeler la fonction pour animer les images
    animateImages();
  });
  