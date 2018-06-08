<?php get_header();?>


<?php
    if ( has_post_thumbnail() ) {
        $thumbnail_url = get_the_post_thumbnail_url(); 
?>
    <header class="section-header-dynamic" style="background: url(<?= $thumbnail_url;?>);">
<?php }else{?>
    <header class="section-header">
<?php }?>        
    <div class="page_title">
            <h3><?php echo the_title();?></h3>
        </div>
    </header>


    <section class="sahco_board_of_directory">
        <div class="container">
            <div class="row">

                <?php
                    $args = array( 
                        'post_type' => 'board_of_directors', 
                        'posts_per_page' => -1,
                        'order'  => 'ASC'
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="col-md-3">
                    <a href="<?= get_permalink()?>">
                        <div class="thumbnail">
                            <?php 
                                $designation = get_post_meta( get_the_ID(), 'designation', true );
                                $director_image = get_field( 'director_image' );
                            ?>
                            <img src="<?= $director_image;?>" alt="<?= $director_image;?>">
                            <div class="d_shot_direction">
                                <h4><?= $designation?></h4>
                                <h3><?= the_title();?></h3>
                            </div>
                        </div>
                    </a>
                </div>
                    
                <?php endwhile; ?>
            </div>
        </div>

    </section>


<?php get_footer();?>