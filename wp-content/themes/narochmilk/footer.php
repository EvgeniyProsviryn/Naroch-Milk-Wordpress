    <!-- Footer -->
    <div class="container-fluid">
           <div class="row">
               <div class="col-md-12 footer" style="<?php if(is_page_template('page-home.php')){ 
                ?>

                display:none;
                <?php } ?>
                ">
                   <div class="move">
                    <span class="icona footI"></span>
                    <div class="log footL">MILK-NAROCH</div>
                    </div>
                    <span class="footText">Email: <a href=""><?php echo ale_get_option('eml')?></a></span>
                    <span class="copy">Copyright ©2016. Milk-Naroch. Все права защищены</span>
               </div>
           </div>
       </div>   
       
        </div>
    </div>
    </div>
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <?php wp_footer();?>
</body>
</html>