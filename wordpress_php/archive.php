<?php get_header(); ?>
<main>
    <section id="archive">

        <div class="card bg-dark text-white">
            <div class="card-body">

                <h1 class="card-title">
                    <?php single_cat_title();?>
                </h1>

                <div class="archPost">
                    <ul class="archList">
                        
                            <?php if(have_posts()) : while(have_posts()) : the_post();?>
                               <li class="card-text">
                               <div class="borderTop"></div>
                                <h3><?php the_title();?></h3>
                                <?php the_excerpt();?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
                                </li>

                                <?php endwhile; endif;?>
                        
                    </ul>
                </div>

            </div>
        </div>

    </section>










    <?php get_footer(); ?>