<?php
/**
 * Default Page Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row">
    <div class="col-lg-8">
    <article <?php post_class( 'group' ); ?> role="article">
        <h1><?php the_title(); ?></h1>
        
        <?php the_content(); ?>
    </article>

    <?php endwhile; endif; ?>
        </div>
        <div class="col">
        <div class="right">
<?php  get_sidebar(); ?>
        </div>
        </div>
</div>
</div><!-- end content -->


<?php get_footer(); ?>
