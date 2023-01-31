<?php
function alura_intercambios_registrando_menu(){
    register_nav_menu(
        location: 'menu-navegacao',
        description: 'Menu navegação'
    );
}

add_action('init', 'alura_intercambios_registrando_menu');
?>