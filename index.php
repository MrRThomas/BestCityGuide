<?php get_header(); ?>

<div class="container">	
			
			<div class="primary">

            <!-- Start the Loop. -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    
                <?php endwhile; else : ?>
                
                    <p><?php _e( 'Sorry, no posts matched your critera.' ); ?></p>
                    
                <?php endif; ?>

			</div><!--/.primary-->


<?php get_footer(); ?>
