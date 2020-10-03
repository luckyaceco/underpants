<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner"><?php get_header(); ?></header>
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
    <aside id="secondary" class="widget-area" role="complementary"><?php get_sidebar(); ?></aside>
    <footer id="colophon" class="site-footer" role="contentinfo"><?php get_footer(); ?></footer>
</div>
