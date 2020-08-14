<?php get_header()?>
<div class="container">
<h1>Busca sobre <?php echo get_search_query()?> </h1>
    <div class="row">
                <div class="col-md-9">
                    <?php
                    if(have_posts()):
                            echo '<ul class="media-list">';
                            while(have_posts()): the_post();
                                printf('<li ><a href=%s>%s</a>%s</li>', get_the_permalink(),get_the_title(),get_the_content());
                            endwhile;
                            echo "</ul>";

                    else:
                        echo "<p> Não tem post ainda</p>";
                    endif;
                    ?>
                </div>

                <div class="col-md-3">
                    <?php get_sidebar()?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>