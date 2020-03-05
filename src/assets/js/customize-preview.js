
// import strip_tags from './helpers/strip-tags';

// wp.customize('blogname', (value) => {
//     value.bind( (to) => {
//         jQuery('.c-header_blogname').html(to);
//     })
// });

// wp.customize('_themename_site_info', (value) => {
//     value.bind( (to) => {
//         jQuery('.c-site-info__text').html(strip_tags(to, '<a>'));
//     })
// });


wp.customize( '_themename_accent_colour', (value) => {
    value.bind( (to) => {
        let inline_css = ``;
        let inline_css_obj = _themename['inline-css'];
        for(let selector in inline_css_obj) {
            inline_css += `${selector} {`;
                for(let prop in inline_css_obj[selector]) {
                    let val = inline_css_obj[selector][prop];
                    inline_css += `${prop}: ${wp.customize(val).get()}`;
                }
            inline_css += `}`;
        }
        jQuery('#_themename-stylesheet-inline-css').html(inline_css);
    } )
})