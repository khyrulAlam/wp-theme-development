<?php get_header();?>

    <section class="sahco_director_details">
        <div class="container">
            <div class="row">
                
                <?php
                    if (have_posts()):
                    while (have_posts()) : the_post();
                    $designation = get_post_meta( get_the_ID(), 'designation', true );
                    $director_full_info = get_post_meta( get_the_ID(), 'director_full_info', true );
                    $director_image = get_field( 'director_image' );
                ?>

                <div class="col-md-4">
                    <img src="<?= $director_image?>" alt="<?= $director_image?>" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <div class="full-details-section">
                        <h3><?php the_title();?></h3>
                        <h5><?= esc_html( $designation);?></h5>
                        <div>
                            <?php echo $director_full_info ;?>
                        </div>
                    </div>
                </div>


                <?php
                    endwhile;   
                    else:
                    echo '<p>Sorry, no posts matched your criteria.</p>';
                    endif;
                ?>
            </div>
        </div>
    </section>

<?php get_footer();?>