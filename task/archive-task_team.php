<?php 
get_header(); 
?>

  <section class="ourTeam mycontainer no-gutters">

    <div class="col-12 ourTeam__pictures no-gutters">

    <?php
    $args = array( 
      'post_type' => 'task_team',
      'posts_per_page' => 20,
      'orderby' => 'date',
      'order' => 'ASC', );

    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="ourTeam__main">
        <div class="col-12 col-lg-4 ourTeam__block">
          <div class="ourTeam__cover">
            <div class="ourTeam__picTeam">
              <?php the_post_thumbnail( 'team-preview', '' ) ?>

              <div class="ourTeam__pictCover"></div>
              <div class="ourTeam__links">
                <a href="#"><img src="<?php bloginfo('template_directory')?>/assets/img/teamsharefrst.png" alt="share1"></a>
                <a href="#"><img src="<?php bloginfo('template_directory')?>/assets/img/teamsharescnd.png" alt="share2"></a>
                <a href="#"><img src="<?php bloginfo('template_directory')?>/assets/img/teamsharethrd.png" alt="share3"></a>
                <a href="#"><img src="<?php bloginfo('template_directory')?>/assets/img/teamsharefrth.png" alt="share4"></a>
              </div>
            </div>
          </div>

          <div class="ourTeam__member">
            <div class="ourTeam__name"><?php the_title(); ?></div>
            <div class="ourTeam__job"><?php the_excerpt(); ?></div>
          </div> 

        </div>
      </div>


    <?php echo '<div class="entry-content">';
    the_content();
    echo '</div>';

    endwhile;
    ?>

    </div>
          
  </section>
  
<?php 
get_footer(); 
?>

