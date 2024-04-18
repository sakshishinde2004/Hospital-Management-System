let menu=document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick=()=>{
    menu.classList.toogle('fa-times');
    navbar.classList.toogle('active');
}

window.onscroll=()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}