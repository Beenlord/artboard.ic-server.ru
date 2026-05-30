// Scroll
function Scroll(e) {
    event.preventDefault()
    $('html,body').stop().animate({
        scrollTop: $(e).offset().top
    }, 1000);
}

// Sort
function SortBy(id) {
    const cnt = document.querySelector('#cnt_art').querySelectorAll('li')
    cnt.forEach(elem => {
        elem.style.display = 'inline-block'
    })
    cnt.forEach(elem => {
        if (elem.dataset.ctg != id) {
            elem.style.display = 'none'
        }
        if (id === '0.5') {
            elem.style.display = 'inline-block'
        }
    })
}