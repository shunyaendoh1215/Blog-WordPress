var hamburgerIcon = document.querySelector(".hamburger-icon");
hamburgerIcon.addEventListener("click", function () {
    hamburgerIcon.classList.toggle('hamburger-icon-active');
    var element = document.querySelector(".side-menu-container-hidden");
    element.classList.toggle('show-side-bar');
});
var arrowIcon = document.querySelector(".arrow-icon");
arrowIcon.addEventListener("click", function () {
    arrowIcon.classList.toggle('arrow-icon-active');
    var element = document.querySelector(".left-side-menu-container");
    element.classList.toggle('show-left-side-bar');
    var main = document.querySelector(".articles-container");
    var toNewer = document.querySelector(".toNewer");
    var toOlder = document.querySelector(".toOlder");
    var mainPage = document.querySelector(".blog-container");
    if (main) {
        main.classList.toggle('filtered');
    }
    if (toNewer) {
        toNewer.classList.toggle('filtered');
    }
    if (toOlder) {
        toOlder.classList.toggle('filtered');
    }
    if (mainPage) {
        mainPage.classList.toggle('filtered');
    }
});
