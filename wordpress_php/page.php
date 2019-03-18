<?php get_header(); ?>
<main>
    <section id="singlePage">
        <div class="over-img">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title"><?php the_title();?></h1>
                    <p class="card-text sub-title"><?php if(have_posts()) : while(have_posts()) : the_post();?>
            
                <?php the_content();?>
            
            <?php endwhile; endif;?></p>
                </div>
            </div>
        </div>
    </section>










<?php get_footer(); ?>