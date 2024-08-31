// script.js
document.addEventListener('DOMContentLoaded', () => {
  const arcadeMenu = document.getElementById('arcade-menu');
  const textParagraph = document.querySelector('#target-description p'); // Sélectionne le <p> où le texte apparaîtra

  const symboles = [
    { src: '../asset/images/svgcode/css3.svg', text: 'Ceci est CSS3' },
    { src: '../asset/images/svgcode/dribbble.svg', text: 'Ceci est Dribbble' },
    { src: '../asset/images/svgcode/figma.svg', text: 'Ceci est Figma' },
    { src: '../asset/images/svgcode/git.svg', text: 'Ceci est Git' },
    { src: '../asset/images/svgcode/github.svg', text: 'Ceci est GitHub' },
    { src: '../asset/images/svgcode/html5.svg', text: 'Ceci est HTML5' },
    { src: '../asset/images/svgcode/js.svg', text: 'Ceci est JavaScript' },
    { src: '../asset/images/svgcode/notion.svg', text: 'Ceci est Notion' },
    { src: '../asset/images/svgcode/php.svg', text: 'Ceci est PHP' },
    { src: '../asset/images/svgcode/sass.svg', text: 'Ceci est Sass' },
    { src: '../asset/images/svgcode/sql.svg', text: 'Ceci est SQL' },
    { src: '../asset/images/svgcode/vs_code.svg', text: 'Ceci est Visual Studio Code' }
  ];

  function getRandomPosition() {
    const containerRect = arcadeMenu.getBoundingClientRect();
    const x = Math.random() * (containerRect.width - 75); // 75 est la largeur de l'image
    const y = Math.random() * (containerRect.height - 75); // 75 est la hauteur de l'image
    return { x, y };
  }

  function moveImage(image) {
    const { x, y } = getRandomPosition();
    image.style.transform = `translate(${x}px, ${y}px)`;
  }

  function animateImages() {
    const images = document.querySelectorAll('.moving-image');
    images.forEach(image => {
      moveImage(image);
      setInterval(() => {
        moveImage(image);
      }, 5000); // Changer de position toutes les 5 secondes
    });
  }

  symboles.forEach(symbole => {
    const img = document.createElement('img');
    img.src = symbole.src;
    img.classList.add('moving-image');
    arcadeMenu.appendChild(img);

    img.addEventListener('click', () => {
      img.classList.add('explode'); // Applique l'animation d'explosion
      setTimeout(() => {
        img.remove(); // Supprime l'image après l'animation
      }, 500); // Durée de l'animation (ajuster selon l'animation CSS)

      textParagraph.innerText = symbole.text; // Met à jour le texte dans le <p>
    });
  });

  animateImages();
});
