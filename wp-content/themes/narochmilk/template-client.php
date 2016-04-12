<?php
/**
 * Template Name: Template Client (press)
 */
get_header(); ?>
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 about">
                <span class="aboutText" style="font-weight:bold;">Где купить</span>
                <div class="aboutTextFull">
                    <span style="color:orange;font-weight:bold;">Минск</span>
                </div>
                <div class="aboutTextFull">
                   <?php echo ale_get_option('minsk')?>
                </div>
                
                <div class="aboutTextFull">
                    <span style="color:orange;font-weight:bold;">Витебск</span>
                </div>
                <div class="aboutTextFull">
                    <?php echo ale_get_option('vitebsk')?>
                </div>
                
                <div class="aboutTextFull">
                    <span style="color:orange;font-weight:bold;">Гродно</span>
                </div>
                <div class="aboutTextFull">
                    <?php echo ale_get_option('grodno')?>
                </div>
                
                <div class="aboutTextFull">
                    <span style="color:orange;font-weight:bold;">Брест</span>
                </div>
                <div class="aboutTextFull">
                    <?php echo ale_get_option('brest')?>
                </div>
                
                <div class="aboutTextFull">
                    <span style="color:orange;font-weight:bold;">Могилев</span>
                </div>
                <div class="aboutTextFull">
                    <?php echo ale_get_option('mogilev')?>
                </div>
                
                <div class="aboutTextFull">
                    <span style="color:orange;font-weight:bold;">Барановичи</span>
                </div>
                <div class="aboutTextFull">
                    <?php echo ale_get_option('baranovichi')?>
                </div>
                
                <div class="aboutTextFull">
                    <span style="color:orange;font-weight:bold;">Пинск</span>
                </div>
                <div class="aboutTextFull">
                    <?php echo ale_get_option('pinsk')?>
                </div>
                
                <div class="aboutTextFull">
                    <span style="color:orange;font-weight:bold;">Береза</span>
                </div>
                <div class="aboutTextFull">
                    <?php echo ale_get_option('bereza')?>
                </div>
                
                <div class="aboutTextFull">
                    <span style="color:orange;font-weight:bold;">Белоозерск
                </div>
                <div class="aboutTextFull">
                    <?php echo ale_get_option('beloozersk')?>
                </div>
                <div class="aboutTextFull">
                   <span style="color:orange;font-weight:bold;">Гомель</span>
                </div>
                <div class="aboutTextFull">
                    <?php echo ale_get_option('gomel')?>
                </div>
                
            </div>
        </div>
    </div>
       
         
       
        </div>
    </div>
    </div>
<?php get_footer(); ?>