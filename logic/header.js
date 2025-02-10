document.getElementById('menu-icon').addEventListener('click', ()=>{
    let menuMobile = document.getElementById('mobile_nav');
    menuMobile.style.right = '0'
})

document.getElementById('btn-closeMenu').addEventListener('click', ()=>{
    let menuMobile = document.getElementById('mobile_nav');
    menuMobile.style.right = '-400px'
})