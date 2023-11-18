const btnToggle = document.querySelector('.toggle-btn')
const navbar = document.querySelector('.navbar')
btnToggle.addEventListener('click', () => {
    navbar.classList.toggle('open')
})


const ratio = 0.25
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio,
}

function handleIntersect(entries, observer) {
    entries.forEach(entry => {
        if(entry.intersectionRatio > ratio) {
            entry.target.classList.add('reveal-visible')
        }
    });
}

const observer = new IntersectionObserver(handleIntersect, options)
document.querySelectorAll('.reveal').forEach( r => {
    observer.observe(r)
})
