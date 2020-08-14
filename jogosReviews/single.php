<?php
get_header();
?> 
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php

                    if(have_posts()):
                        the_post_thumbnail('medium');
                        printf('<h3>%s</h3><br/><p>%s</p>',get_the_title(),get_the_content());
                    endif;

                ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar()?>
            </div>
        </div>
    </div>
<?php
get_footer();
?>