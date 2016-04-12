<?php 
/**
 * Template Name: Template Contact
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>
    <!-- Content -->
    
     <div class="container">
        <div class="row">
            <div class="col-md-12 about">
                <span class="aboutText" style="font-weight:bold;">Контактная информация</span>
                <div class="aboutTextFull">
                    <b>Адрес:</b> <?php echo ale_get_option('adress')?> <br>
<b>Телефон:</b> <?php echo ale_get_option('telephone')?><br>
<b>Банковские реквизиты:</b>
<?php echo ale_get_option('req')?>
                </div>
                
                
                
            </div>
            <div class="col-md-12 about">
                <span class="aboutText" style="font-weight:bold;">Телефоны структурных подразделений:</span>
                <div class="aboutTextFull">
<span style="font-weight:bold;">Директор</span><br>
<span><?php echo ale_get_option('dir')?></span><br>
<span><?php echo ale_get_option('dirt')?></span><br>
<span style="font-weight:bold;">Заместитель директора по производству</span><br>
<span><?php echo ale_get_option('zdir')?></span><br>
<span><?php echo ale_get_option('zdirt')?></span><br>
<span style="font-weight:bold;">Начальник производственной лаборатории</span><br>
<span><?php echo ale_get_option('lab')?></span><br>
<span><?php echo ale_get_option('labt')?></span><br>
<span style="font-weight:bold;">Вед. инженер-технолог</span><br>
<span><?php echo ale_get_option('inj')?></span><br>
<span><?php echo ale_get_option('injt')?></span><br>
<span style="font-weight:bold;">Начальник отдела бухг. учета и отчетности</span><br>
<span><?php echo ale_get_option('nach')?></span><br>
<span><?php echo ale_get_option('nacht')?></span><br>
<span style="font-weight:bold;">Приемная, юрисконсульт</span><br>
<span><?php echo ale_get_option('jurt')?></span><br>
<span style="font-weight:bold;">Отдел сбыта</span><br>
<span><?php echo ale_get_option('sbt')?></span><br>
<span style="font-weight:bold;">Бухгалтерия</span><br>
<span><?php echo ale_get_option('bux')?></span><br>
                </div>
                
                <div class="col-md-12 about">
                <span class="aboutText" style="font-weight:bold;">Карта</span>
                <div class="aboutTextFull">
                    
                </div>
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d10715.121760929875!2d26.680704310225785!3d54.937124314407065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x46dcef4c416f12cd%3A0x7d342bcdcbd56108!2z0J3QsNGA0L7Rh9GMLCDQkdC10LvQsNGA0YPRgdGM!3m2!1d54.9377761!2d26.6910444!4m5!1s0x46dcef4c416f12cd%3A0x7d342bcdcbd56108!2z0J3QsNGA0L7Rh9GM!3m2!1d54.9377761!2d26.6910444!5e1!3m2!1sru!2sru!4v1460398024370" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
            </div>
                
                
            </div>
        </div>
    </div>
    
          
      
       
        </div>
    </div>
    </div>
<?php get_footer(); ?>