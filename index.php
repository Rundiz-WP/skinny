<?php
/** 
 * Skinny theme.
 * 
 * This file is required by WordPress theme system. ( https://developer.wordpress.org/themes/basics/template-files/ )
 * 
 * @package skinny
 * @since 0.1
 * @license http://opensource.org/licenses/MIT MIT
 */


get_header();
?>
<!-- index.php -->
<div class="container">
    <div class="site-header">
        <h1><a href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
    </div><!-- .site-header -->
    <div class="row">
        <main class="site-main-column">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?> 
            <article id="post-id<?php the_ID(); ?>" <?php post_class('each-post');// required by Theme Check. ?>>
                <header>
                    <h2 class="each-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </header>
                <div class="each-post-contents">
                    <?php 
                    the_content(); 
                    // `wp_link_pages()` is pagination for `<!--nextpage-->` inside a single post.
                    // `wp_link_pages()` is required by Theme Check.
                    wp_link_pages();
                    ?> 
                    
                </div><!-- .each-post-contents -->
            </article><!-- .each-post -->
                    <?php
                }// endwhile; have_posts()
                the_posts_pagination();// `the_posts_pagination()` is recommended by Theme Check.
            } else {
                // require at least one translation 
                // to prevent Theme Check warning "This theme text domain does not match the theme's slug."
                _e('No posts found.', 'skinny');
            }// endif; have_posts()
            ?> 
        </main><!-- .site-main-column -->
        <aside class="site-sidebar">
            <?php get_sidebar();// `get_sidebar()` is not required by WordPress nor Theme Check. ?> 
        </aside><!-- .site-sidebar -->
    </div><!-- .row -->
</div>
<!-- end index.php -->
<?php
get_footer();