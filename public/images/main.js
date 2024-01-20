/*Barre animé */
document.addEventListener('scroll', function() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrollPercentage = (scrollTop / scrollHeight) * 100;

    updateProgressBar(scrollPercentage);
});

function updateProgressBar(percentage) {
    const progressBar = document.getElementById('progress-bar');
    progressBar.style.width = percentage + '%';
}

function afficherPopup() {
    // Récupérer l'élément de la pop-up
    var popup = document.getElementById("popup");
    // Afficher la pop-up
    popup.style.display = "block";
}

function fermerPopup() {
    // Récupérer l'élément de la pop-up
    var popup = document.getElementById("popup");
    // Cacher la pop-up
    popup.style.display = "none";
}

function envoyerDevis() {
    var nom = document.getElementById("nom").value;
    var telephone = document.getElementById("telephone").value;
    var mail = document.getElementById("mail").value;
    var description = document.getElementById("description").value;

    // Ajoutez ici votre logique pour envoyer les données, par exemple via AJAX

    // Fermer la pop-up après l'envoi
    fermerPopup();
}

