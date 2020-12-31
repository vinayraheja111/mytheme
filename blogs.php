<?php
/* Template Name: Blog */
get_header();
?>


<?php

$wp_qry = new WP_QUERY(array('post_type'=>'post','post_status'=>'publish'));

print_r($wp_qry);

die();
?>

<?php 
if ( $wp_qry->have_post() ) : ?>

	<ul>
		<?php

		while( $wp_qry->have_post() ):
      
         $wp_qry->the_post();


        ?>
       <li>
        <a href="<?php the_permalink();?>">
        	<?php the_title();?>
        </a>
           </li>
       <?php endwhile;?>





<?php
get_footer();
?>