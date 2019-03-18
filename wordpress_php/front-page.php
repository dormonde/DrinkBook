<?php get_header(); ?>
<main>
    <div class="container-fluid ">
        <section id="home">
            <div class="over-img">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h1 class="card-title"><?php bloginfo('name');?></h1>
                        <p class="card-text sub-title"><?php bloginfo('description');?></p>

                        <div class="btn-box">
                            <a href="#featured" class="btn btn-light">
                                Featured Drinks
                            </a>
                            <a href="#findMore" class="btn btn-light">
                                Drinks by Spirit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div>
                <h1 class="page-title"><?php the_title();?></h1>
                <?php if(have_posts()) : while(have_posts()) : the_post();?>


                <?php the_content();?>

                <?php endwhile; endif;?>
            </div>
        </section>
        <section id="featured">
            <h2>Featured Recipes</h2>
            <div class="card-deck">
                <!--php for "Featured" post loop starts HERE -->
                <?php
            query_posts('posts_per_page=3&cat=4'); /*1, 2*/
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <!-- Loop Starts above : Display Starts Below -->
                <div class="card">
                    <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
                    <div class="card-body">
                        <!-- Card Title = Blog Post Title php -->
                        <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
                        <!-- How much of the post is shown -->
                        <p><?php the_excerpt(5); ?></p>
                        <p><a href="<?php the_permalink(); ?>">continue reading</a></p>
                    </div>
                    <!-- End of Display -->
                </div>
                <!-- Below php must be in same layer as IF php for "Featured" -->
                <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
                <!-- End Featured PHP -->
            </div>
        </section>
        <section class="placeholder">

        </section>
        <section id="findMore">
            <h1>Find More Recipes</h1>
            <ul class="nav nav-tabs bg-dark" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="Brandy-tab" data-toggle="tab" href="#Brandy" role="tab" aria-controls="Brandy" aria-selected="true">Brandy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="gin-tab" data-toggle="tab" href="#gin" role="tab" aria-controls="gin" aria-selected="false">Gin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="rum-tab" data-toggle="tab" href="#Rum" role="tab" aria-controls="Rum" aria-selected="false">Rum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="Tequilia-tab" data-toggle="tab" href="#tequila" role="tab" aria-controls="tequila">Tequila</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="whiskey-tab" data-toggle="tab" href="#whiskey" role="tab" aia-controls="whiskey">Whiskey</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="Vodka-tab" data-toggle="tab" href="#vodka" role="tab" aia-controls="vodka">Vodka</a>
                </li>
            </ul>
            <div class="tab-content bg-dark" id="myTabContent">
                <div class="tab-pane fade show active" id="Brandy" role="tabpanel" aria-labelledby="brandy-tab">
                    <div class="card-columns">
                        <!--php for "Brandy" post loop starts HERE -->
                        <?php
            query_posts('posts_per_page=3&cat=5'); /*1, 2*/
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <!-- Loop Starts above : Display Starts Below -->
                        <div class="card">
                            <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
                            <div class="card-body">
                                <!-- Card Title = Blog Post Title php -->
                                <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
                                <!-- How much of the post is shown -->
                                <p><?php the_excerpt(5); ?></p>
                                <p><a href="<?php the_permalink(); ?>">continue reading</a></p>
                            </div>
                            <!-- End of Display -->
                        </div>
                        <!-- Below php must be in same layer as IF php for "Featured" -->
                        <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
                        <!-- End Featured PHP -->




                    </div>
                </div>
                <div class="tab-pane fade" id="gin" role="tabpanel" aria-labelledby="gin-tab">
                    <div class="card-columns">
                        <!--php for "Gin" post loop starts HERE -->
                        <?php
            query_posts('posts_per_page=3&cat=6'); /*1, 2*/
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <!-- Loop Starts above : Display Starts Below -->
                        <div class="card">
                            <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
                            <div class="card-body">

                                <!-- Card Title = Blog Post Title php -->
                                <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
                                <!-- How much of the post is shown -->
                                <p><?php the_excerpt(5); ?></p>
                                <p><a href="<?php the_permalink(); ?>">continue reading</a></p>
                            </div>
                            <!-- End of Display -->
                        </div>
                        <!-- Below php must be in same layer as IF php for "Featured" -->
                        <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
                        <!-- End Featured PHP -->

                    </div>
                </div>
                <div class="tab-pane fade" id="rum" role="tabpanel" aria-labelledby="rum-tab">
                    <div class="card-columns">
                        <!--php for "Rum" post loop starts HERE -->
                        <?php
            query_posts('posts_per_page=3&cat=7'); /*1, 2*/
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <!-- Loop Starts above : Display Starts Below -->
                        <div class="card">
                            <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
                            <div class="card-body">

                                <!-- Card Title = Blog Post Title php -->
                                <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
                                <!-- How much of the post is shown -->
                                <p><?php the_excerpt(5); ?></p>
                                <p><a href="<?php the_permalink(); ?>">continue reading</a></p>
                            </div>
                            <!-- End of Display -->
                        </div>
                        <!-- Below php must be in same layer as IF php for "Featured" -->
                        <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
                        <!-- End Featured PHP -->
                    </div>
                </div>
                <div class="tab-pane fade" id="tequila" role="tabpanel" aria-labelledby="tequila-tab">
                    <div class="card-columns">
                        <!--php for "tequila" post loop starts HERE -->
                        <?php
            query_posts('posts_per_page=3&cat=8'); /*1, 2*/
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <!-- Loop Starts above : Display Starts Below -->
                        <div class="card">
                            <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
                            <div class="card-body">

                                <!-- Card Title = Blog Post Title php -->
                                <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
                                <!-- How much of the post is shown -->
                                <p><?php the_excerpt(5); ?></p>
                                <p><a href="<?php the_permalink(); ?>">continue reading</a></p>
                            </div>
                            <!-- End of Display -->
                        </div>
                        <!-- Below php must be in same layer as IF php for "Featured" -->
                        <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
                        <!-- End Featured PHP -->
                    </div>
                </div>
                <div class="tab-pane fade" id="whiskey" role="tabpanel" aria-labelledby="whiskey-tab">
                    <div class="card-columns">
                        <!--php for "Whiskey" post loop starts HERE -->
                        <?php
            query_posts('posts_per_page=3&cat=9'); /*1, 2*/
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <!-- Loop Starts above : Display Starts Below -->
                        <div class="card">
                            <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
                            <div class="card-body">
                                <!-- Card Title = Blog Post Title php -->
                                <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
                                <!-- How much of the post is shown -->
                                <p><?php the_excerpt(5); ?></p>
                                <p><a href="<?php the_permalink(); ?>">continue reading</a></p>
                            </div>
                            <!-- End of Display -->
                        </div>
                        <!-- Below php must be in same layer as IF php for "Featured" -->
                        <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
                        <!-- End Featured PHP -->
                    </div>
                </div>
                <div class="tab-pane fade" id="vodka" role="tabpanel" aria-labelledby="vodka-tab">
                    <div class="card-columns">
                        <!--php for "Vodka" post loop starts HERE -->
                        <?php
            query_posts('posts_per_page=3&cat=10'); /*1, 2*/
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <!-- Loop Starts above : Display Starts Below -->
                        <div class="card">
                            <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
                            <div class="card-body">

                                <!-- Card Title = Blog Post Title php -->
                                <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h2>
                                <!-- How much of the post is shown -->
                                <p><?php the_excerpt(5); ?></p>
                                <p><a href="<?php the_permalink(); ?>">continue reading</a></p>
                            </div>
                            <!-- End of Display -->
                        </div>
                        <!-- Below php must be in same layer as IF php for "Featured" -->
                        <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
                        <!-- End Featured PHP -->
                    </div>
                </div>
            </div>
        </section>










        <?php get_footer(); ?>