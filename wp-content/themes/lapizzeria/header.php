<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
    
</head>
<body>

    <header class="encabezado-site">
        <div class="contenedor">
            <div class="logo">
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="logotipo de pizzas" class="logotipo">
                </a>
            </div>
        
            <div class="informacion-encabezado">
                <div class="redes-sociales">
                    <?php
                        $args = array(
                            'theme_location' => 'social-menu',
                            'container' => 'nav',
                            'container_class' => 'sociales',
                            'container_id' => 'sociales',
                            'link_before' => '<span class="sr-text">',
                            'link_after' => '</span>'
                        );
                        wp_nav_menu($args);
                    ?>
                </div>

                <div class="direccion">
                    <p>Una direccion cualquiera casa #3</p>
                    <p>Telefono: 0123456789 </p>
                </div>
            </div>
        
        </div>


    </header>

    <div class="menu-principal">
        
        <div class="mobile-menu">
            <a href="#" class="mobile">Menu</a>
        </div>

        <div class="contenedor navegacion">
            <?php 
                $args = array(
                    'theme_location' => 'header-menu',
                    'container' =>  'nav',
                    'container_class' => 'menu-sitio'
                );

                wp_nav_menu( $args );
            ?>
        </div>
    </div>        