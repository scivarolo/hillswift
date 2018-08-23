<?php get_header(); ?>

<div id="content" class="wrap">
  <h1 class="page-title">Projects</h1>
  
  <?php if (have_posts()) : ?>  
    
    <section class="projects">

    <?php while (have_posts()) : the_post(); ?>
  
    <article class="project">
      <div class="project-thumbnail">
        <?php $thumbnail = get_field('project-thumbnail'); ?>
       <?php if ( $thumbnail ) : ?>
         <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
           <img src="<?php echo $thumbnail['sizes']['project-thumbnail-600']; ?>">
         </a>
       <?php endif; ?>
      </div>
      <div class="project-description">
        <h2 class="project-title">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <?php $date = get_field('project-year'); 
              $location = get_field('project-location'); ?>
            
        <?php if($location) : ?>
          <span class="project-location"><?php echo $location; ?></span>
        <?php endif; if( $date ) : ?>
          <span class="project-year"><?php echo $date; ?></span>
        <?php endif; ?>
        
        
        
      </div>
    </article>

  
  <?php endwhile; ?>
  
  <?php else : ?>
  
  <p> no projects right now.</p>
  
  <?php endif; ?>
  

</div>

<?php get_footer(); ?>
