<?php get_header(); ?>

<main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) :
              while ( have_posts() ) : the_post();
                  the_title();
                  the_category(); the_tags(); the_author(); the_time();
                  the_content();
              endwhile;
          else :
              _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
