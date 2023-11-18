const btnToggle = document.querySelector('.toggle-btn')
const navbar = document.querySelector('.navbar')

btnToggle.addEventListener('click', () => {
    navbar.classList.toggle('open')
})
