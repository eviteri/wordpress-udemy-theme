<?php 

//Reference: https://torquemag.io/2020/01/create-gutenberg-block-with-acf/

function acf_portfolio_item_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
            // name — This is the name of the block you’ll be creating. It will be used to make the whole thing work and can only contain alphanumeric characters and dashes.
            'name'				=> 'portfolio-item',
            
            // title — This is the title of the block as it will appear in the Gutenberg editor
            'title'				=> __('Portfolio Item'),
            
            // description — A description of what your block does. This shows up in the sidebar of the editor.
            'description'		=> __('A custom block for portfolio items.'),
            
            //render_template — This refers to the file used to render the block
            'render_template'	=> 'template-parts/blocks/portfolio-item/block-portfolio-item.php',
            
            //category — Means the block category your block will appear under
            'category'			=> 'layout',
            
            // The icon associated with your block. You can choose from the Dashicons (post the name without the dashicons- in front). Optionally, use a custom SVG file
            'icon'				=> 'excerpt-view',
            
            //What users can type in to find your block. You can use up to three terms here
			'keywords'			=> array( 'portfolio' ),
		));
	}
}

add_action('acf/init', 'acf_portfolio_item_block');