<?php 
/*
Template Name: Blog
*/ 
?>

<?php 
get_header(); 
?>

  <section class="blog">

    <div class="mycontainer">
      <div class="row col-xl-12 blog__pictures no-gutters p-0">

        <?php

          $args = array(
            'numberposts' => 0,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, 
          );

          $posts = get_posts( $args );

          foreach( $posts as $post ){
            setup_postdata( $post );
          ?>
            
            <article class="col-12 col-md-6 col-xl-4 blog__pict">
              <div class="blog__picBlog">

                <?php the_post_thumbnail( 'blog-preview', '' ) ?>

                <div class="blog__date">
                  <div class="blog__dateNumber"><?php the_field('blog_dateNumber') ?></div>
                  <div class="blog__dateMonth"><?php the_field('blog_dateMonth') ?></div>
                </div>

              </div>  

              <div class="blog__description">
                <div class="blog__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div class="blog__info"><?php the_excerpt(); ?></div>
                <div class="row blog__visitors no-gutters">
                  <div class="blog__views"><?php the_field('blog_view_count') ?></div>
                  <div class="blog__comments"><?php the_field('blog_count_comments') ?></div>
                </div>
              </div>

            </article>

          <?php 
          } 
          wp_reset_postdata(); // reset
          ?>

      </div> 

    </div>

  </section>    
        

<?php 
get_footer(); 
?>

