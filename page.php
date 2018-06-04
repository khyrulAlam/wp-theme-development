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


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        else:
                        echo '<p>Sorry, no posts matched your criteria.</p>';
                        endif;
                    ?>     
                </div>
            </div>
        </div>
    </section>


<?php get_footer();?>