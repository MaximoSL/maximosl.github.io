'use strict';

let control = document.querySelectorAll('.widget_control'),
    controlPrev = document.querySelector('.widget_control.prev'),
    controlNext = document.querySelector('.widget_control.next'),
    container = document.querySelector('.widget_slide'),
    position = container.clientWidth + container.scrollLeft;

control.forEach(el => {
    el.addEventListener('click', () => {
        if (el.classList.contains('prev')) {
            container.scrollLeft -= container.clientWidth;
        }
        if (el.classList.contains('next')) {
            container.scrollLeft += container.clientWidth;
        }
    });
});

function toggleControls() {
    position = container.offsetWidth + container.scrollLeft;

    if (container.scrollLeft <= 10) {
        controlPrev.classList.add('inactive');
    } else {
        controlPrev.classList.remove('inactive');
    }

    if (position >= (container.scrollWidth - 10)) {
        controlNext.classList.add('inactive');
    } else {
        controlNext.classList.remove('inactive');
    }
}

toggleControls();

let lastCall = false;
container.addEventListener('scroll', () => {
    if (lastCall) clearTimeout(lastCall);
    lastCall = setTimeout(() => {
        toggleControls();
    }, 100);
});
