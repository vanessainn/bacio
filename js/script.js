'use strict';

// Navigation

var myNav = document.querySelector('.nav1');

window.onscroll = function () {
    if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
        myNav.classList.add("scroll");
        myNav.classList.remove("no-shadow");
    } else {
        myNav.classList.remove("scroll");
        myNav.classList.add("no-shadow");
    }
};