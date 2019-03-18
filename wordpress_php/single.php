<!-- How posts are shown when clicked -->


<?php get_header(); ?>
<main>
    <section id="postPage">
       <div class="container-fluid ">
        
            <div class="card">
               <?php if(has_post_thumbnail()):?>

                    <img src="<?php the_post_thumbnail_url('largest');?>" class="card-img-top">
                    <div class="card-body">
                    

                    <?php endif;?>
                    <h1 class="card-title"><?php the_title();?></h1>
                    <p class="card-text"><?php if(have_posts()) : while(have_posts()) : the_post();?></p>
                        <?php the_content();?>

                        <?php endwhile; endif;?>
                </div>
            
        </div>
        </div>
    </section>










<?php get_footer(); ?>