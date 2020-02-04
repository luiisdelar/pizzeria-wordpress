
    <footer>
        <?php 
            $args = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'after' => '<span class="separador"> | </span>'
            );
            wp_nav_menu($args); 
        ?>

        <div class="ubicacion">
            <p>Una direccion cualquiera casa #3</p>
            <p>Telefono: 0123456789 </p>
        </div>

        <p class="copyright">Todos los derechos reservados <?php echo date('Y'); ?></p>
    </footer>

    <?php wp_footer(); ?>
    
    </body>
</html>