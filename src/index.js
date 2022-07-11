import "./scss/main.scss";
import 'bootstrap';
window.$ = window.jQuery = require('jquery');
import "mmenu-light";
import "mburger-webcomponent";
import Popper from 'popper.js';



document.addEventListener(
    "DOMContentLoaded", () => {
        const menu = new MmenuLight(
            document.querySelector( "#mobile-menu" )
        );

        const navigator = menu.navigation();
        const drawer = menu.offcanvas();

        document.querySelector( 'a[href="#mobile-menu"]' )
            .addEventListener( 'click', ( evnt ) => {
                evnt.preventDefault();
                drawer.open();
            });
    }
);