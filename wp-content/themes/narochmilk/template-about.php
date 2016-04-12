<?php
/**
 * Template Name: Template About (team)
 */
get_header(); ?>
    <!-- Content -->
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 about">
                <span class="aboutText">Миссия Компании</span>
                <div class="aboutTextFull">
                    <?php echo ale_get_option('mission') ?>
                </div>
            </div>
        </div>
    </div>
       <div class="container">
           <div class="row">
               <div class="col-md-12 fanc">
                   <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 photo-img">
                    <a href="<?php echo get_template_directory_uri();?>/images/img_1.jpg" data-title="" data-lightbox="Vacation"><img src="<?php echo get_template_directory_uri();?>/images/img_1.jpg" alt=""  class="img-thumbnail"></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 photo-img">
                    <a href="<?php echo get_template_directory_uri();?>/images/img_2.jpg" data-title="" data-lightbox="Vacation"><img src="<?php echo get_template_directory_uri();?>/images/img_2.jpg" alt=""  class="img-thumbnail"></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 photo-img">
                    <a href="<?php echo get_template_directory_uri();?>/images/img_3.jpg" data-title="" data-lightbox="Vacation"><img src="<?php echo get_template_directory_uri();?>/images/img_3.jpg" alt=""  class="img-thumbnail"></a>
                    </div>
               </div>
           </div>
       </div>
       
       <div class="container">
        <div class="row">
            <div class="col-md-12 about">
                <span class="aboutText ani" >История развития</span>
                <div class="aboutTextFull ani">
                <?php echo ale_get_option('history') ?>
                </div>
            </div>
        </div>
    </div>
    
       <div class="container">
        <div class="row">
            <div class="col-md-12 about">
                <span class="aboutText ani2">Качество продукции</span>
                <div class="aboutTextFull ani2">
                    <?php echo ale_get_option('kch') ?>
                </div>
            </div>
        </div>
    </div>   
       <div class="container">
           <div class="row">
               <div class="col-md-12 fanc">
                   <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 photo-img">
                    <a href="<?php echo get_template_directory_uri();?>/images/img_4.jpg" data-title="" data-lightbox="Vacation"><img src="<?php echo get_template_directory_uri();?>/images/img_4.jpg" alt=""  class="img-thumbnail"></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 photo-img">
                    <a href="<?php echo get_template_directory_uri();?>/images/img_5.jpg" data-title="" data-lightbox="Vacation"><img src="<?php echo get_template_directory_uri();?>/images/img_5.jpg" alt=""  class="img-thumbnail"></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 photo-img">
                    <a href="<?php echo get_template_directory_uri();?>/images/img_6.jpg" data-title="" data-lightbox="Vacation"><img src="<?php echo get_template_directory_uri();?>/images/img_6.jpg" alt=""  class="img-thumbnail"></a>
                    </div>
               </div>
           </div>
       </div>
       
       <div class="container">
        <div class="row">
            <div class="col-md-12 about">
                <span class="aboutText">Награды и дипломы</span>

            </div>
        </div>
        </div>
         <div class="container">
           <div class="row">
               <div class="col-md-12 fanc">
                   

                    <?php
                    $my_posts1 = get_posts('numberposts=20&category_name=Награды и Дипломы');
                    foreach ($my_posts1 as $post) :
                        setup_postdata($post);
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 photo-img">
                    <a href="<?php echo $url; ?>" data-title="" data-lightbox="Vacation"><img src="<?php echo $url; ?>" alt=""  class="img-thumbnail"></a>
                    </div>

                    <?php endforeach; ?>
                   
                    
               </div>
           </div>
       </div>
        
       
        </div>
    </div>
    </div>


<?php get_footer(); ?>

