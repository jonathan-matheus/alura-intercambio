
<?php
$estiloPagina = 'destinos.css';
require_once('header.php');

$args = array('post_type' => 'destino');
$query = new WP_Query($args);

if($query->have_posts()){
    echo '<main class="page-destinos">';
    echo '<ul class="lista-destinos container-alura">';
    while($query->have_posts()){
        $query->the_post();
        echo '<li class="col-md-3 destinos">';
        the_post_thumbnail();
        the_title('<p class="title-destino">','</p>');
        the_content();
        echo '</li>';
    }
    echo '</ul>';
    echo '</main>';
}

require_once('footer.php');
?>