let headerMenu = document.getElementsByTagName('header');
let ul = document.getElementById('header-links');
let menuOpen = false;

let openMenu = function () {
    if (!menuOpen) {
        headerMenu[0].style.height = '200px';
        headerMenu[0].style.borderBottom = '2px solid black';
        ul.style.display = "flex";
        menuOpen = true;
    } else {
        headerMenu[0].style.height = '60px';
        headerMenu[0].style.borderBottom = 'none';
        ul.style.display = "none";
        menuOpen = false;
    }
}

let resizeWindow = function () {
    if (window.innerWidth > 850) {
        headerMenu[0].style.height = '60px';
        headerMenu[0].style.borderBottom = 'none';
        menuOpen = false;
        ul.style.display = "flex";
    } else if (!menuOpen) {
        ul.style.display = "none";
    }
}

resizeWindow();

window.addEventListener('resize', function () {
    resizeWindow();
});
