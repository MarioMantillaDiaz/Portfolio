<?php 
/*
*
* Template Name: Nature Page
*
*/
get_header('nature');

while ( have_posts() ) : the_post();

get_template_part( 'template-parts/page/content', 'nature' );

endwhile;

get_footer('nature');
