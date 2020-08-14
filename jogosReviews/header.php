
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo();?></title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="div-logo">
      <img class="img-logo" src='<?php echo get_stylesheet_directory_uri()."/img/cogumelo.png";?>'></img>
      <a class="logo-name" href=<?php bloginfo('url')?>><?php bloginfo('name')?></a>; 
  </div>
  <ul class="navbar-nav">
        <?php 
            $pages = get_pages(['parent' => 0]);
            foreach ($pages as $p):
                $link = get_page_link($p->ID);
                $childPages = get_pages(['child_of' => $p->ID]);
                if(!count($childPages)) {
                $title = $p->post_title;
                printf('<li class="nav-item"><a class="nav-link" href="%s">%s</a></li>',$link,$title);
                } else {
                  echo'<li class="nav-item dropdown">';
                   printf('<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   %s </a>',$p->post_title);
 
                  echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                  foreach ($childPages as $child) {
                    $link = get_page_link($child->ID);
                    $title = $child->post_title;
                    printf('<li><a class="dropdown-item" href="%s">%s</a></li>',$link,$title);
                  }
                  echo "</li></ul>";
                }
            endforeach;    
        ?>
    </ul>
  <?php get_search_form();
  ?>
</nav>
