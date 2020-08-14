<?php
    /*
    Post Template - Name: Artigos De Jogos
    */
?> 
<?php get_header();?>
    <div class="container">
    <H3 class="name-game"><?php single_post_title()?></H3>
        <div class="row">
            <div class="col-md-9">
                <?php
                  if(have_posts()): the_post();
                        the_post_thumbnail('medium');
                        
                        echo "<br/>";
                        echo '<div class="row col">';
                        $termos = wp_get_post_terms($post->ID,'estilos');
                        
                        echo "<h4>Estilo:</h4>";
                        foreach($termos as $termo){
                            $link = get_term_link($termo);
                            echo '<h4><a class="a-link" href='.$link.'>'.$termo->name.'</a>|</h4>';
                        }
                        
                        echo '</div>';
                        echo "<br/>";

                        echo "<h5>Ano de Lançamento: ";
                            the_field('data_de_lancamento');
                        echo"</h5";
                        echo "<br/> ";
                        echo "<h5>Estudio: ";
                            the_field('estudio');
                        
                        echo"</h5";
                        echo "<br/>";
                        echo "<h5>Nota: ";
                            the_field('nota');
                        ?> <img class="img-star" src='<?php echo get_stylesheet_directory_uri()."/img/star.png";?>'></img>
                        <?php
                        echo"</h5>";
                        echo "<br/>";
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