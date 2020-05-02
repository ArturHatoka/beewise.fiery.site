document.addEventListener('DOMContentLoaded', function () {
    Script.start()
});

const Script = {
    start: function () {
        paddingHeader.init();
        mobileMenu.init();
    }
};

window.Script = Script;

const paddingHeader = {
    init: function () {
        if (document.getElementById('header')){
            paddingHeader.start()
        }
    },
    start: function () {
        const headerOffsetHeight = document.getElementById('header').offsetHeight;
        document.querySelector('#first>.wrapper').style.paddingTop = headerOffsetHeight + 'px';
    }
};

const mobileMenu = {
    get_mob_btn: function (){
        return document.getElementById('mobile_menu')
    },
    get_menu: function (){
        return document.getElementById('menu')
    },
    init: function () {
        if (document.getElementById('mobile_menu')){
            mobileMenu.start()
        }
    },
    start: function () {
        const mob_btn = mobileMenu.get_mob_btn();
        const menu = mobileMenu.get_menu();
        const menu_items = menu.querySelectorAll('.menu_item');

        mob_btn.addEventListener('click', function () {
            if (mob_btn.classList.contains('opened')){
                mobileMenu.close();
                modal.close_bg();
            } else {
                mobileMenu.open(menu_items);
                modal.open_bg();
            }
        });
    },
    open: function (menu_items) {
        mobileMenu.get_mob_btn().classList.add('opened');
        mobileMenu.get_menu().classList.add('open');

        for (let menu_item of menu_items){
            menu_item.addEventListener('click', function () {
                mobileMenu.close();
                modal.close_bg();
            })
        }
    },
    close: function () {
        mobileMenu.get_mob_btn().classList.remove('opened');
        mobileMenu.get_menu().classList.remove('open');
    }
};

const modal = {
    bg: document.getElementById('bg_wrapper'),
    open_bg: function (){
        modal.bg.classList.add('active');
        modal.bg.addEventListener('click', function () {
            this.classList.remove('active');
            mobileMenu.close();
        });
    },
    close_bg: function (){
        modal.bg.classList.remove('active');
    }
};