<?php
add_theme_support('post-thumbnails');
set_post_thumbnail_size(120,120);

function load_styles(){
    wp_enqueue_style('template',get_template_directory_uri().'/css/template.css',array(),'1.0','all');
}
add_action('wp_enqueue_scripts','load_styles');

function bootstrap_games_reviews_posts(){
    $labels = array(
            'name'=> "Jogos",
            'singular_name' =>"Jogo",
            'add_new'=>"Adicionar novo Jogo",
            'add_new_label'=>"Adicionar Jogo",
            'all_item'=>"Todos Jogos",
            'add_new_item' => "Adicionar Jogo",
            'edit_item'=>"Editar Jogo",
            'new_item'=>"Novo Jogo",
            'view_item'=>"Visualizar Jogo",
            'search_item' =>"Procurar Jogo",
            'not_found' =>"Jogo não foi encontrado",
            'not_found_in_trash' => "Nenhuma Jogo na lixeira"
    );

    $args = array(
        'labels'=> $labels,
        'public'=> true,
        'has_archive'=>true,
        'publicly_queryable'=>true,
        'query_var'=> true,
        'rewrite'=>true,
        'capability_type'=>'post',
        'supports'=>array(
            'title','editor','thumbnail','excerpt'
        ),
        'menu_position'=>6,
        'exclude_from_search'=> false
    );

    register_post_type('games',$args);   
}
    add_action('init','bootstrap_games_reviews_posts');

function bootstrap_games_reviews_taxonomy(){
     //Taxonomia Hierarquica - Gênero
     $labels = array(
        'name'=>"Estilos",
        'singular_name'=>"Estilo",
        'search_items'=>"Procurar Estilo",
        'all_items'=>"Todos os Estilo",
        'parent_item'=>"Estilo Pai",
        'parent_item_color'=>"Estilo Pai",
        'edit_item'=>"Editar Estilo",
        'update_item'=>"Atualizar Estilo",
        'add_new_item'=>"Adicionar Novo Estilo",
        'new_item_name' => "Novo Estilo",
        'menu_name'=>"Estilo"

    );
    $args = array(

        'hierarchical'=>true,
        'labels'=>$labels,
        'show_admin_column'=>true,
        'query_var'=>true,
        'rewrite'=>array("slug"=>"estilos")

    );


    register_taxonomy('estilos','games',$args);

    //Taxonomia não Hierarquica

    $labels = array(
        'name'=>"Tags",
        'singular_name'=>"Tags",
        'search_items'=>"Procurar Tags",
        'all_items'=>"Todos os Tags",
        'parent_item'=>"Tags Pai",
        'parent_item_color'=>"Tags Pai",
        'edit_item'=>"Editar Tags",
        'update_item'=>"Atualizar Tags",
        'add_new_item'=>"Adicionar Novo Tags",
        'new_item_name' => "Novo Tags",
        'menu_name'=>"Tags"

    );
    $args = array(

        'hierarchical'=>false,
        'labels'=>$labels,
        'show_admin_column'=>true,
        'query_var'=>true,
        'rewrite'=>array("slug"=>"tags")

    );

    register_taxonomy('tags','games',$args);

}
add_action('init','bootstrap_games_reviews_taxonomy');