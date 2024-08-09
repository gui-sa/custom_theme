<?php 
function load_scripts(){
    // Carrega uma folha de estilo direto do backend... 
    // Primeiro arg se refere ao nome do arquivo sem extensao... deve ser unico
    // Segundo é o URI esta concatenado
    // Terceiro é um array de dependencias... como esta vazio: false
    // Quarto é a versao
    // Quinto é o tipo de midia.
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', false, '1.0', 'all');
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', false, '5.3.3', 'all');


    //Carrega js... Nesse exemplo o bootstrap sera carregado
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), 5.3, true);

}

add_action( 'wp_enqueue_scripts' , 'load_scripts');

register_nav_menus( 
    array(
        'my_main_menuuu'=>'Main Menu Testeee'
    )
    );