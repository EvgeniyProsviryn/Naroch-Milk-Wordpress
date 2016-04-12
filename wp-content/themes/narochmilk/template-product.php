<?php
/**
 * Template Name: Template product (awards)
 */
get_header(); ?>
    <!-- Content -->
    
    <div class="container">
                <div class="row">
                    <div class="col-md-12 Products" >
                        <span class="col-md-12 prod aboutText">Масло</span>
                        

                        <?php
                    $my_posts1 = get_posts('numberposts=20&category_name=Масло');
                    foreach ($my_posts1 as $post) :
                        setup_postdata($post);
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
      
               
                   <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 prod photo-img">
                    <a href="<?php echo $url; ?>" data-title="" data-lightbox="Vacation"><img src="<?php echo $url; ?>" alt=""  class="prod img-thumbnail"></a>
                    </div>
                    <div class="prZgl"><?php echo get_the_title();?></div>
                    <div class="prTxt"><?php echo get_the_excerpt();?></div>
             
          
                       
                        </div>

                    <?php endforeach; ?>

                        
                    </div>
                    
                    <div class="col-md-12 Products" >
                        <span class="col-md-12 prod aboutText">Творог</span>
                        
                        <?php
                    $my_posts1 = get_posts('numberposts=20&category_name=Творог');
                    foreach ($my_posts1 as $post) :
                        setup_postdata($post);
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
      
               
                   <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 prod photo-img">
                    <a href="<?php echo $url; ?>" data-title="" data-lightbox="Vacation"><img src="<?php echo $url; ?>" alt=""  class="prod img-thumbnail"></a>
                    </div>
                    <div class="prZgl"><?php echo get_the_title();?></div>
                    <div class="prTxt"><?php echo get_the_excerpt();?></div>
             
          
                       
                        </div>

                    <?php endforeach; ?>
                        
                    </div>
                    <div class="col-md-12 Products" >
                        <span class="col-md-12 prod aboutText">Творог фасованный</span>
                        
                        <?php
                    $my_posts1 = get_posts('numberposts=20&category_name=Творог фасованный');
                    foreach ($my_posts1 as $post) :
                        setup_postdata($post);
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
      
               
                   <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 prod photo-img">
                    <a href="<?php echo $url; ?>" data-title="" data-lightbox="Vacation"><img src="<?php echo $url; ?>" alt=""  class="prod img-thumbnail"></a>
                    </div>
                    <div class="prZgl"><?php echo get_the_title();?></div>
                    <div class="prTxt"><?php echo get_the_excerpt();?></div>
             
          
                       
                        </div>

                    <?php endforeach; ?>
                        
                    </div>
                    <div class="col-md-12 Products" >
                        <span class="col-md-12 prod aboutText">Сыры</span>
                        
                        <?php
                    $my_posts1 = get_posts('numberposts=20&category_name=Сыры');
                    foreach ($my_posts1 as $post) :
                        setup_postdata($post);
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
      
               
                   <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 prod photo-img">
                    <a href="<?php echo $url; ?>" data-title="" data-lightbox="Vacation"><img src="<?php echo $url; ?>" alt=""  class="prod img-thumbnail"></a>
                    </div>
                    <div class="prZgl"><?php echo get_the_title();?></div>
                    <div class="prTxt"><?php echo get_the_excerpt();?></div>
             
          
                       
                        </div>

                    <?php endforeach; ?>

                    </div>
                    <div class="col-md-12 Products" >
                        <span class="col-md-12 prod aboutText">Казеин</span>
                        
                        <?php
                    $my_posts1 = get_posts('numberposts=20&category_name=Казеин');
                    foreach ($my_posts1 as $post) :
                        setup_postdata($post);
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
      
               
                   <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 prod photo-img">
                    <a href="<?php echo $url; ?>" data-title="" data-lightbox="Vacation"><img src="<?php echo $url; ?>" alt=""  class="prod img-thumbnail"></a>
                    </div>
                    <div class="prZgl"><?php echo get_the_title();?></div>
                    <div class="prTxt"><?php echo get_the_excerpt();?></div>
             
          
                       
                        </div>

                    <?php endforeach; ?>
                       
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
            
     
       
        </div>
    </div>
    </div>
<?php get_footer(); ?>