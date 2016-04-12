<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>

    <!-- Header -->
    <div class="loader">
      <div class="loader-icon "><i class="fa fa-refresh animated flipInY"></i></div>
  <span class="Load-text animated pulse">Загрузка</span>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 wrapper">
                <div class="col-md-12 image parallax-window" data-parallax="scroll" data-image-src="
                <?php if(is_page_template('page-home.php')){
                ?>

                <?php if(ale_get_option('mainheaderimg')){?>
        <?php echo ale_get_option('mainheaderimg') ?>"
    <?php } else {?>
    <?php echo get_template_directory_uri();?>/images/mlechnyy-put-krany-derevya.jpg"
        <?php }}?>
                <?php if(is_page_template('template-about.php')){
                ?>

                <?php if(ale_get_option('aboutheaderimg')){?>
        <?php echo ale_get_option('aboutheaderimg') ?>"
    <?php } else {?>
    <?php echo get_template_directory_uri();?>/images/mlechnyy-put-krany-derevya.jpg"
        <?php }}?>
        <?php if(is_page_template('template-client.php')){
                ?>

                <?php if(ale_get_option('clientsheaderimg')){?>
        <?php echo ale_get_option('clientsheaderimg') ?>"
    <?php } else {?>
    <?php echo get_template_directory_uri();?>/images/mlechnyy-put-krany-derevya.jpg"
        <?php }}?>

        <?php if(is_page_template('template-product.php')){
                ?>

                <?php if(ale_get_option('productsheaderimg')){?>
        <?php echo ale_get_option('productsheaderimg') ?>"
    <?php } else {?>
    <?php echo get_template_directory_uri();?>/images/mlechnyy-put-krany-derevya.jpg"
        <?php }}?>

         <?php if(is_page_template('template-aboutM.php')){
                ?>

                <?php if(ale_get_option('aboutmheaderimg')){?>
        <?php echo ale_get_option('aboutmheaderimg') ?>"
    <?php } else {?>
    <?php echo get_template_directory_uri();?>/images/mlechnyy-put-krany-derevya.jpg"
        <?php }}?>

         <?php if(is_page_template('template-contact.php')){
                ?>

                <?php if(ale_get_option('contactheaderimg')){?>
        <?php echo ale_get_option('contactheaderimg') ?>"
    <?php } else {?>
    <?php echo get_template_directory_uri();?>/images/mlechnyy-put-krany-derevya.jpg"
        <?php }}?>

        ">




                   <div class="col-md-12 filter"></div>
                    <div class="textImg"><?php echo ale_get_option('filtext')?></div>
                    <span class="icona"></span>
                    <div class="log">MILK-NAROCH</div>
                    <span class="icon2"></span>
                    <div class="menu">
                    <div class="top-line"></div>
                    <div class="middle-line"></div>
                    <div class="bottom-line"></div>
                    </div>
                   
            </div>

        </div>
        <div class="col-md-12 menu-list">
                        

                        <?php /*<ul>
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Продукция</a></li>
                            <li><a href="#">Клиентам</a></li>
                            <li><a href="#">О торговой марке</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
            */?>

                         <?php
            if ( has_nav_menu( 'header_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'header_right_menu',
                    'menu'          => 'Header Menu',
                    'menu_class'    => '',
                    'walker'        => new Aletheme_Nav_Walker(),
                    'container'     => '',
                ));
            }
            ?> 
            
                    </div>
    </div>
    </div>