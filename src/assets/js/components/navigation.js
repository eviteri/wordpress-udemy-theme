

// document.querySelector('.c-navigation .menu-item-has-children').addEventListener('mouseenter', function(event){
//     event.currentTarget.classList.add('open');
// });

// document.querySelector('.c-navigation .menu-item-has-children').addEventListener('mouseleave', function(event){
//     event.currentTarget.classList.remove('open');
// });


jQuery('.c-navigation').on('mouseenter', '.menu-item-has-children', (e) => {
    if(!jQuery(e.currentTarget).parents('.sub-menu').length){
        $('.menu > .menu-item.open').find('> a > .menu-button').trigger('click');
    }
    jQuery(e.currentTarget).addClass('open');
}).on('mouseleave', '.menu-item-has-children', (e) => {
    jQuery(e.currentTarget).removeClass('open');
});

jQuery('.c-navigation').on('click', '.menu .menu-button', (e) => {
    e.preventDefault();
    e.stopPropagation();
    let menu_button = jQuery(e.currentTarget);
    let menu_link = menu_button.parent();
    let menu_item = menu_link.parent();
    if(menu_item.hasClass('open')){
        menu_item.add(menu_item.find('.menu-item.open')).removeClass('open');
        menu_link.add(menu_item.find('a')).attr('aria-expended', 'false');
        menu_button.find('.menu-button-show').attr('aria-hidden', 'false');
        menu_button.find('.menu-button-hide').attr('aria-hidden', 'true');
    }else{
        menu_item.siblings('.open').find('>a>.menu-button').trigger('click');
        menu_item.addClass('open');
        menu_link.attr('aria-expended', 'true');
        menu_button.find('.menu-button-show').attr('aria-hidden', 'true');
        menu_button.find('.menu-button-hide').attr('aria-hidden', 'false');
    }
})

jQuery(document).click((e) => {
    if(jQuery('.menu-item.open').length) {
        jQuery('.menu > .menu-item.open > a > .menu-button').trigger('click');
    }
})