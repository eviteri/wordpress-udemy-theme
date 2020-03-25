<?php

$logo = get_field( 'logo' );
$title = get_field( 'title' );
$description = get_field( 'description' );

//print_r($logo );


echo '<div class="portfolio-item">';
	if( !empty( $logo ) )
        //echo wp_get_attachment_image( $logo['ID'], 'thumbnail', null, array( 'class' => 'portfolio-logo alignleft' ) );
        echo '<img class="portfolio-logo" src="'.$logo.'" />';
	if( !empty( $title ) )
		echo '<h3 class="portfolio-title">' . $title . '</h3>';
	if( !empty( $description ) )
		echo '<div class="portfolio-description">' . $description . '</div>';
echo '</div>';

?>