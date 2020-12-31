<?php

/* Template Name: Home*/
get_header();
?>

<div class="container">
 <h1><?php the_title();?></h1>
 <p>
  <?php the_content();?>
 </p>
  <?php 
        $post_7 = get_post( 79 ); 
        $title = $post_7->post_title;
        $content = $post_7->post_content;
        $link = get_permalink( 79 ); 
        $image = get_the_post_thumbnail(79,'full'); 
        ?> 
        <div class="row">
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" alt="Card image cap" src="<?php echo $image;?>">
  <div class="card-body">
    <h4 class="card-title">

        <?php echo $title;?>
    </h4>
    <p class="card-text"><?php echo $content;?> </p>
    <a href="<?php echo $link;?>" class="btn btn-primary">Read More</a>
  </div>
</div>
        <div class="row">
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" alt="Card image cap" src="<?php echo $image;?>">
  <div class="card-body">
    <h4 class="card-title">
    	<?php 
        $post_9 = get_post( 84 ); 
        $title = $post_9->post_title;
        $content = $post_9->post_content;
        $link = get_permalink( 84 ); 
        $image = get_the_post_thumbnail(84,'full'); 
        ?> 

        <?php echo $title;?>
    </h4>
    <p class="card-text"><?php echo $content;?> </p>
    <a href="<?php echo $link;?>" class="btn btn-primary">Read More</a>
  </div>
</div>
</div>
</div>


<?php
get_footer();
?>