document.addEventListener('DOMContentLoaded', function() {
    var burgerIcon = document.getElementById('burger-icon');
    var closeIcon = document.getElementById('close-icon');
    var fullscreenMenu = document.getElementById('fullscreen-menu');
    var closeIconStory = document.getElementById('close-icon-story');
    var closeIconCharacter = document.getElementById('close-icon-character');
    var closeIconPlace = document.getElementById('close-icon-place');
    var closeIconStudio = document.getElementById('close-icon-studio');
    burgerIcon.addEventListener('click', function() {
        fullscreenMenu.style.display = 'block';
    });

    closeIcon.addEventListener('click', function() {
        fullscreenMenu.style.display = 'none';
    });
    closeIconStory.addEventListener('click', function() {
        fullscreenMenu.style.display = 'none';
    });
    closeIconCharacter.addEventListener('click', function() {
        fullscreenMenu.style.display = 'none';
    });
    closeIconPlace.addEventListener('click', function() {
        fullscreenMenu.style.display = 'none';
    });
    closeIconStudio.addEventListener('click', function() {
        fullscreenMenu.style.display = 'none';
    });
});
