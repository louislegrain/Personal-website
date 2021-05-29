const revealContainers = document.querySelectorAll('.reveal-container');
const revealSelf = document.querySelectorAll('.reveal-self');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.remove('hidden');
            observer.unobserve(entry.target);
        }
    });
}, {
    rootMargin: '-50% 0px -50% 0px'
});

if ('IntersectionObserver' in window) {
    revealContainers.forEach(container => {
        container.classList.add('hidden');
        const revealChildren = container.querySelectorAll('.reveal');
        for (let i = 0; i < revealChildren.length; i++) {
            revealChildren[i].style.transitionDelay = `${i * 0.2}s`;
        }
        observer.observe(container);
    });
    revealSelf.forEach(element => {
        element.classList.add('hidden');
        observer.observe(element);
    });
}

const anchorLinks = document.querySelectorAll('a[href^="#"]');

anchorLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        let top = document.getElementById(link.getAttribute('href').substr(1)).offsetTop - 78;
        if (link.getAttribute('href') === '#contact') {
            top -= document.querySelector('footer .important-div').offsetHeight / 2 + 30;
        }
        window.scrollTo({
            top: top,
            behavior: 'smooth'
        });
    });
});

let targetedElement = document.getElementById(document.location.hash.substr(1));

if (targetedElement) {
    window.scrollTo({
        top: targetedElement.offsetTop - 78,
        behavior: 'smooth'
    });
}

const carousel = document.querySelector('.carousel');
const slider = carousel.querySelector('.slider');
const carouselPrevBtn = document.querySelector('.carousel-previous-btn');
const carouselNextBtn = document.querySelector('.carousel-next-btn');

let initialSliderTransform = -33.3;
let sliderTransform = initialSliderTransform;
refreshSliderTransform();

let canClick = true;
carouselPrevBtn.addEventListener('click', () => {
    carouselBtnClick(-1);
});
carouselNextBtn.addEventListener('click', () => {
    carouselBtnClick(1);
});

let interval = setInterval(carouselBtnClick, 5000);

window.addEventListener('resize', refreshSliderTransform);

function refreshSliderTransform() {
    if (window.matchMedia('(max-width: 580px)').matches) {
        initialSliderTransform = -100;
    } else if (window.matchMedia('(max-width: 768px)').matches) {
        initialSliderTransform = -50;
    } else {
        initialSliderTransform = -33.3;
    }
    sliderTransform = initialSliderTransform;
    slider.style.transform = `translateX(${sliderTransform}%)`;
}

function carouselBtnClick(direction) {
    if (direction) {
        clearInterval(interval);
        interval = setInterval(carouselBtnClick, 5000);
    }
    direction = direction ? direction * (-1) : -1;
    if (canClick) {
        canClick = false;
        slider.style.transition = 'transform .5s';
        sliderTransform -= initialSliderTransform * direction;
        slider.style.transform = `translateX(${sliderTransform}%)`;
        setTimeout(() => {
            slider.style.transition = 'none';
            direction === -1 ? slider.appendChild(slider.firstElementChild) : slider.prepend(slider.lastElementChild);
            sliderTransform += initialSliderTransform * direction;
            slider.style.transform = `translateX(${sliderTransform}%)`;
            canClick = true;
        }, 500);
    }
}

const sensibility = 20;
let touchStart;
let touching = false;
let offset = 0;

carousel.addEventListener('touchstart', (e) => {
    if (canClick) {
        canClick = false;
        touching = true;
        touchStart = e.targetTouches[0].clientX;
    }
}, { passive: true });

carousel.addEventListener('touchmove', (e) => {
    if (touching) {
        const carouselItemWidth = slider.offsetWidth * (initialSliderTransform / -100);
        offset = Math.abs(e.targetTouches[0].clientX - touchStart) <= carouselItemWidth + 0.021 * slider.offsetWidth ? e.targetTouches[0].clientX - touchStart : e.targetTouches[0].clientX - touchStart > carouselItemWidth + 0.021 * slider.offsetWidth ? carouselItemWidth + 0.021 * slider.offsetWidth : (carouselItemWidth + 0.021 * slider.offsetWidth) * -1;
        slider.style.transform = `translateX(calc(${initialSliderTransform}% + ${offset}px))`;
    }
}, { passive: true });

carousel.addEventListener('touchend', () => {
    if (touching) {
        canClick = true;
        touching = false;
        if (offset > sensibility) {
            carouselBtnClick(-1);
        } else if (offset < (sensibility * -1)) {
            carouselBtnClick(1);
        } else {
            slider.style.transform = `translateX(${initialSliderTransform}%)`;
            clearInterval(interval);
            interval = setInterval(carouselBtnClick, 5000);
        }
    }
});

document.getElementById('start-project-btn').addEventListener('click', () => {
    document.querySelector('form input').focus();
});

const inputs = document.querySelectorAll('footer form input, footer form textarea');
const textarea = document.querySelector('form textarea');

inputs.forEach(input => {
    input.addEventListener('input', () => {
        checkInputValidity(input);
    });
});

document.querySelector('form button[type="submit"]').addEventListener('click', () => {
    inputs.forEach(input => {
        checkInputValidity(input);
    });
});

function checkInputValidity(input) {
    const parent = input.parentNode;
    if (input.value === '') {
        parent.classList.remove('not-empty');
    } else {
        parent.classList.add('not-empty');
    }
    if (input.checkValidity()) {
        parent.classList.remove('invalid');
    } else {
        parent.classList.add('invalid');
    }
}

textarea.addEventListener('input', () => {
    textarea.style.height = 'auto';
    textarea.style.height = `${textarea.scrollHeight}px`;
});

const form = document.querySelector('form');
const formMsg = form.querySelector('.info');
const submitBtn = form.querySelector('button[type="submit"]');

form.addEventListener('submit', e => {
    e.preventDefault();
    formMsg.innerHTML = 'Le message est en cours d\'envoi...';
    formMsg.classList.remove('error');
    formMsg.style.display = 'block';
    fetch('/send-mail/', {
        method: 'POST',
        body: new URLSearchParams(new FormData(form))
    })
    .then(response => response.json())
    .then(data => {
        setTimeout(() => {
            if (data.success === true) {
                formMsg.innerHTML = 'Le message a bien été envoyé.';
                submitBtn.setAttribute('disabled', '');
            } else {
                formMsg.classList.add('error');
                if (data.errors.length < 1) {
                    formMsg.innerHTML = 'Une erreur est survenue.';
                } else {
                    formMsg.innerHTML = '';
                    for (let i = 0; i < data.errors.length; i++) {
                        formMsg.innerHTML += data.errors[i];
                        if (i < data.errors.length - 1) {
                            formMsg.innerHTML += '<br>';
                        }
                    }
                }
            }
        }, 400);
    })
    .catch(() => {
        formMsg.classList.add('error');
        formMsg.innerHTML = 'Une erreur est survenue.';
    });
});