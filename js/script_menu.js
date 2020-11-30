var triger = document.querySelector('.menu-triger');
var close = document.querySelector('.menu-close');
var pop = document.querySelector('.menu-popup');
triger.addEventListener('click', openMenu);
function openMenu(eve) {
    triger.classList.add('hidden');
    pop.classList.remove('hidden');
    pop.classList.add('show');
    pop.style.left = 0;
    close.addEventListener('click', closeMenu);
}
function closeMenu(eve) {
    pop.classList.add('hidden');
    triger.classList.remove('hidden');

}