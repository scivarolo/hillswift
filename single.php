<?php get_header(); ?>

<div id="content" class="wrap">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  

   
    <div id="project-description" class="sticky-description">
      <header class="project-header">
        <?php if(get_field('subtitle')) : ?>
          <h1 class="project-title has-subtitle"><?php the_title(); ?></h1>
          <span class="subtitle"><?php the_field('subtitle'); ?>
        <?php else : ?>
          <h1 class="project-title no-subtitle"><?php the_title(); ?></h1>
        <?php endif; ?>
        
        <p class="project-details">
          <?php $date = get_field('project-year'); 
            $location = get_field('project-location');
          
            if($date) : ?>
            <span class="project-date"><?php echo $date; ?></span>
            <?php endif; 
            if($location) : ?>
            <span class="project-location"><?php echo $location; ?></span>
            <?php endif; ?>
        </p>
      </header>
      <section class="project-content">
        <?php the_content(); ?>
      </section>
    </div>
    <div id="project-gallery">
      <?php $images = get_field('project-gallery'); ?>
      
      <?php if( $images ) : ?>
      
        <ul class="project-images">
      
        <?php foreach( $images as $image ) : ?>
          
          <li>
            <img src="<?php echo $image['sizes']['project-gallery']; ?>">
          </li>
      
        <?php endforeach; ?>
      
      </ul>
      
      <?php endif; ?>
   
    </div>


  <?php endwhile; ?>

	<?php else : ?>

		<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
						<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
				</footer>
		</article>

	<?php endif; ?>

</div>


<?php get_footer(); ?>
