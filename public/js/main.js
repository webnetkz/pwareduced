function showMenu() {
    let menu = document.querySelector('menu');

    if(menu.classList.item('show')) {
        menu.classList.remove('show');
    } else {
        menu.classList.add('show');
    }
}