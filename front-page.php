<?php get_header(); ?>

  <div id="carousel" class="owl-carousel">

  
    
    <?php if( have_rows( 'slideshow', 'option' ) ) :
      while ( have_rows( 'slideshow', 'option' ) ) : the_row();
          
        $image = get_sub_field('image');
         
        if ( get_sub_field('image_link_toggle') ) {
            
          $page_link = get_sub_field('image_link');
            
        } else {
            
          $page_link = "#";
           
        } ?>
          
        <a href="<?php echo $page_link; ?>" style="background-image: url('<?php echo $image['sizes']['large']; ?>');"></a>
          
       <?php 
       endwhile;
        
        else : 
        
        endif; 
        ?> 
    
   </div>

<?php get_footer(); ?>