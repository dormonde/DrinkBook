<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>



    
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php esc_html_e( bloginfo( 'name' ), 'themeslug' ); ?></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'best-reloaded' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'top_menu',
                        'depth'          => 2,
                        'container'      => false,
                        'menu_class'     => 'navbar-nav mr-auto',
                        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                        // Process nav menu using our custom nav walker.
                        'walker'         => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                    <a class="navbar-brand" href="#">Back to Top</a>
            </div>
            
        </nav>
        