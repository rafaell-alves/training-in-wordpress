<?php get_header()?>    
<div class="container">
        
    <h1>Artigos Recente de Jogos</h1>
        <div class="row">
            <div class="col-md-9 ">
                <hr/>
            <?php
                $args = array(
                    'post_type'=>'games',
                    'ordeby'=>'ID',
                    'post_status'=>'publish',
                    'order'=> 'DESC',
                    'post_per_page' => -1

                );
                $result = new WP_Query( $args );
                
                if ( $result-> have_posts() ):
                    while($result->have_posts()):
                        $result->the_post();
                        
                        $image= sprintf('<div class="media-left col" ><a href="%s">%s</a></div>',get_the_permalink(),get_the_post_thumbnail());
                        $body = sprintf('<div class="media-body"><h3 class="media-heading"><a href="%s">%s</a></h3><p>%s</p></div>',get_the_permalink(),get_the_title(),get_the_content("read more..."));
                        printf('<div class="div-info" >%s%s</div>',$image,$body);
                        
                        echo "<hr/>";
                        
                    endwhile;
            else:
                echo "Nenhum Post Encontrado";
            endif;wp_reset_postdata();
            ?> 
            </div>
            <div class="col-md-3">
                <?php get_sidebar()?>
            </div>
        </div>
    </div>
<?php get_footer();?>