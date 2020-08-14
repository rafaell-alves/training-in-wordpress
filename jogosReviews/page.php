<?php get_header();?>
    <div class="container">
    
    <H3><?php single_post_title()?></H3>
        <div class="row">
            <div class="col-md-9">
                <?php
                  if(have_posts()): the_post();
                        the_content();
                  endif;
                ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar()?>
            </div>
        </div>
    </div>
<?php get_footer();?>