'use strict';

AOS.init();

// Bestell Button

function bestellen() {
    var div = document.querySelector('.bestell-bestaetigung');
    div.style.display = 'inline-block';

    setTimeout(function() {
        div.style.display = 'none';
    }, 5000);
}

var buttons = document.querySelectorAll('.bestell-button');

buttons.forEach(function(button) {
    button.addEventListener('click', bestellen);
});


// Mehr lesen Button
/*
function toggleText() {
    var additionalText = document.querySelector(".additional-text");
    var buttonText = document.querySelector(".more-text");
    var buttonIcon = document.querySelector(".more-icon");

    if (additionalText.style.display === "none") {
        additionalText.style.display = "block";
        buttonText.textContent = "leggi meno";
        buttonIcon.classList.remove("fa-plus");
        buttonIcon.classList.add("fa-minus");
    } else {
        additionalText.style.display = "none";
        buttonText.textContent = "leggi di più";
        buttonIcon.classList.remove("fa-minus");
        buttonIcon.classList.add("fa-plus");
    }
}

*/

const moreElements = document.querySelectorAll('.more-btn');

moreElements.forEach((elm) => {
    elm.addEventListener('click', () => {
        
    const parent = elm.parentNode;
    const additionalText = parent.querySelector(".additional-text");
    const buttonText = parent.querySelector(".more-text");
    const buttonIcon = parent.querySelector(".more-icon");

    if (additionalText.style.display === "none") {
        additionalText.style.display = "block";
        buttonText.textContent = "leggi meno";
        buttonIcon.classList.remove("fa-plus");
        buttonIcon.classList.add("fa-minus");
    } else {
        additionalText.style.display = "none";
        buttonText.textContent = "leggi di più";
        buttonIcon.classList.remove("fa-minus");
        buttonIcon.classList.add("fa-plus");
    }
    
  });
});