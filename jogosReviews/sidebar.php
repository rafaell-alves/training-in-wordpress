<h3>Estilos de Jogos</h3>
<ul class="list-group">
    <?php
        $estilos = get_terms('estilos');
        foreach($estilos as $estilo):
            
            $link = get_term_link($estilo);
            printf('<li class="list-group-item"><a href="%s" title="%s"> %s </a></li>',$link,sprintf("Ver Post de %s",$estilo->name),$estilo->name);
        endforeach;
    ?> 
</ul>

<h3>Tags de Jogos</h3>
<ul class="list-group">
    <?php
        $tags = get_terms('tags');
        foreach($tags as $tag):
            printf('<li class="list-group-item"><a href="%s" title="%s">%s</a></li>',get_tag_link($tag->term_id),sprintf("Ver Post sobre %s",$tag->name),$tag->name);
        endforeach;
    ?>
</ul>