document.addEventListener('DOMContentLoaded', () => {
    var menu = false;
    document.querySelector('#menubutton')?.addEventListener('click', () => {
        if (!menu) {
            document.querySelector('header').classList.remove("menuopen");
            document.querySelector('header').classList.add("menuhidden");
            document.querySelector('#menubutton').classList.remove("button-on-menuopen");
            document.querySelector('#menubutton').classList.add("button-on-menuhidden");
            menu = true;
        } else {
            document.querySelector('header').classList.remove("menuhidden");
            document.querySelector('header').classList.add("menuopen");
            document.querySelector('#menubutton').classList.add("button-on-menuopen");
            document.querySelector('#menubutton').classList.remove("button-on-menuhidden");
            menu = false;
        }
    });
});
