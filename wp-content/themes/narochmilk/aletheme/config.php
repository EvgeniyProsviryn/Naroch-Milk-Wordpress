<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Alethemes Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
		'off' => 'Disable All Comments',
	);

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();

    $options[] = array("name" => "Header",
                        "type" => "heading");

    $options[] = array( "name" => "Название филиала",
                        "desc" => "Название филиала, отображается поцентру изображения",
                        "id" => "ale_filtext",
                        "std" => "Нарочанский филиал",
                        "type" => "text");

    $options[] = array( "name" => "Фоновое изображение",
        "desc" => "",
        "id" => "ale_mainheaderimg",
        "std" => "",
        "type" => "upload");

    $options[] = array("name" => "About",
                        "type" => "heading");

    $options[] = array( "name" => "Фоновое изображение",
        "desc" => "",
        "id" => "ale_aboutheaderimg",
        "std" => "",
        "type" => "upload");

     $options[] = array( "name" => "Миссия компании",
                        "desc" => "Описание миссии компании.",
                        "id" => "ale_mission",
                        "std" => "ОАО «Молодечненский молочный комбинат» одно из немногих предприятий нашей Республики, выпускающее широкий ассортимент цельномолочной продукции, масла животного, сухое молоко, твердые сыры, казеин кислотный технический. Сегодня на комбинате организован выпуск практически всех видов молочной продукции, способных удовлетворить самый изысканный вкус. Продукция предприятия выпускается под торговой маркой «Молодея», Наш комбинат поставляет продукцию по всей Беларуси, а также экспортирует отдельные ее виды в Россию, Украину, Казахстан, Германию, Польшу, Бельгию, Францию, Сингапур, Литву, США. Система мер по контролю качества позволяет выпускать экологически чистую, вкусную и полезную продукцию.
Головное молодечненское предприятие обладает мощным производственным потенциалом. Основное производство включает четыре участка, которые размещаются в одном производственном корпусе. На предприятии имеется также вспомогательное производство, обеспечивающее непрерывный процесс поступления молочного сырья, его переработку и хранение готовой продукции.
К нему относятся:
склад готовой продукции;
система обеспечения;
теплопункт;
аммиачная компрессорная и воздушная компрессорная;
центральный склад и гаражи.
В составе автотранспорта — десять грузовых машин, один грузопассажирский и три легковых служебных автомобиля. Для своевременной доставки цельномолочной продукции по Минской области и за ее пределы ежедневно привлекается наемный специализированный транспорт — это примерно еще 15 автомобилей с грузоподъемностью от 2 до 5 тонн.
Санитарное состояние территории предприятия, производственных цехов, участков, отделений — соответствует требованиям, предъявляемым «Санитарными правилами для предприятий молочной промышленности» и требования Ветеринарного законодательства.",
                        "type" => "editor");

$options[] = array( "name" => "История развития",
                        "desc" => "Описание истории развития.",
                        "id" => "ale_history",
                        "std" => "Нарочанский филиал ОАО «Молодечненский молочный комбинат» начал строиться в 1950 году. В то время он назывался «Кобыльникский завод». Спустя 2 года предприятие приступило к выработке молочной продукции. В состав завода входило несколько сепараторных отделений и два низовых завода. В 1964 году Кобыльникский завод был переименован в Нарочанский. Спустя четыре года была проведена его реконструкция: построено новое административное здание, открыт цех по производству цельномолочной продукции, компрессорный цех и котельная. В 1970 году сепараторные отделения, за исключением Кривичского низового завода, остановили производство продукции. В 1973 году была проведена реконструкция Кривичского производственного участка и налажен выпуск казеина. В 2000 году на предприятии была проведена реконструкция сыродельного цеха. С 1978 года Нарочанский маслосырзавод входит в состав Минского областного производственного унитарного предприятия «Минсельхозпродукт». В 1995 году завод был преобразован в открытое акционерное общество «Нарочанский маслосырзавод». 20 марта 2009 года предприятие было реорганизовано в Нарочанский филиал ОАО «Молодечненский молочный комбинат». К комбинату также были присоединены открытые акционерные общества «Вилейский гормолзавод» и «Воложинский маслосырзавод» в качестве филиалов.",
                        "type" => "editor");

$options[] = array( "name" => "История развития",
                        "desc" => "Описание истории развития.",
                        "id" => "ale_kch",
                        "std" => "В 2006 году на заводе была внедрена система менеджмента качества ИСО 9001-2001. В настоящее время заканчивается разработка систем: управления качеством и безопасностью продукции HACCP; управления окружающей средой в соответствии с требованиями СТБ ИСО 14001-2005; управления охраной труда в соответствии с СТБ ИСО 18000. Высокое качество продукции Нарочанского филиала ОАО «Молодечненский молочный комбинат» достигается посредством четкого соблюдения стандартов производства молочной продукции и сырьевой базы, закупаемой в одном из самых экологически чистых уголков Беларуси.",
                        "type" => "editor");

    $options[] = array("name" => "Clients",
                        "type" => "heading");

    $options[] = array( "name" => "Фоновое изображение",
        "desc" => "",
        "id" => "ale_clientsheaderimg",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Минск",
                        "desc" => "Описание Минск.",
                        "id" => "ale_minsk",
                        "std" => "«Новый Век» ул. К.Цеткин, 7 тел. (8-017) 200-8-269 «Глобал» ул. Независимости, 56 тел. (8-029) 805-5-550 (8-029) 677-3-392",
                        "type" => "editor");

    $options[] = array( "name" => "Витебск",
                        "desc" => "Описание Витебск.",
                        "id" => "ale_vitebsk",
                        "std" => "«Спринт-тайм» ул.Людникова, 16 тел.(8-0212) 249-2-11",
                        "type" => "editor");

    $options[] = array( "name" => "Гродно",
                        "desc" => "Описание Гродно.",
                        "id" => "ale_grodno",
                        "std" => "«Батория» ул.Ожешко, 26 тел. (8-0152) 741-0-02",
                        "type" => "editor");

     $options[] = array( "name" => "Брест",
                        "desc" => "Описание Брест.",
                        "id" => "ale_brest",
                        "std" => "«Западный Буг» ул.Пушкинская, 1 тел.(8-0162) 215-6-18 ул.Ожешко, 26 тел. (8-0152) 741-0-02",
                        "type" => "editor");

      $options[] = array( "name" => "Могилев",
                        "desc" => "Описание Могилев.",
                        "id" => "ale_mogilev",
                        "std" => "«Буревестник» ул.Столина, 6 тел.(8-012) 149-2-11",
                        "type" => "editor");

       $options[] = array( "name" => "Барановичи",
                        "desc" => "Описание Барановичи.",
                        "id" => "ale_baranovichi",
                        "std" => "«Млын» ул.Баранова, 55 тел. (8-0163) 452-3-82",
                        "type" => "editor");

       $options[] = array( "name" => "Пинск",
                        "desc" => "Описание Пинск.",
                        "id" => "ale_pinsk",
                        "std" => "№20 ул.Первомайская, 24 тел. (8-0165) 323-2-53",
                        "type" => "editor");

       $options[] = array( "name" => "Береза",
                        "desc" => "Описание Береза.",
                        "id" => "ale_bereza",
                        "std" => "«Гомель» ул.Ленина, 91 тел. (8-01643) 23-6-49",
                        "type" => "editor");

       $options[] = array( "name" => "Белоозерск",
                        "desc" => "Описание Белоозерск.",
                        "id" => "ale_beloozersk",
                        "std" => "«Белхлебпром» 225215 ул.Шоссейная, 5 тел. (8-01643) 28-9-43",
                        "type" => "editor");

       $options[] = array( "name" => "Гомель",
                        "desc" => "Описание Гомель.",
                        "id" => "ale_gomel",
                        "std" => "«Диамант» ул. Карла Маркса, 23 тел. (8-0121) 98-18-91 «ХлебПром» ул. Декабристов, 12 тел. (8-029) 15-15-50",
                        "type" => "editor");


    $options[] = array("name" => "Products",
                        "type" => "heading");

    $options[] = array( "name" => "Фоновое изображение",
        "desc" => "",
        "id" => "ale_productsheaderimg",
        "std" => "",
        "type" => "upload");

    $options[] = array("name" => "About Marks",
                        "type" => "heading");

    $options[] = array( "name" => "О торговой марке",
                        "desc" => "Описание марки.",
                        "id" => "ale_mark",
                        "std" => "Нарочанские угощения — торговая марка, говорящая о истинной чистоте и природной натуральности высококачественной продукции Нарочанского филиала ОАО «Молодечненский молочный комбинат». Торговая марка была разработана в 2005 году под личным руководством директора предприятия — Корбут Тамары Николаевны. Так как более 70% продукции предприятия идет на экспорт в страны СНГ, Евросоюза и Америки, «Норачанские угощения» — это не только высококачественная и вкусная продукция, но и символ. Наша продукция символизирует прозрачность белорусских озер, красоту пущ, и конечно истинно белорусское гостеприимство.",
                        "type" => "editor");

    $options[] = array( "name" => "Фоновое изображение",
        "desc" => "",
        "id" => "ale_aboutmheaderimg",
        "std" => "",
        "type" => "upload");

    $options[] = array("name" => "Contact",
                        "type" => "heading");

    $options[] = array( "name" => "Фоновое изображение",
        "desc" => "",
        "id" => "ale_contactheaderimg",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Адрес",
                        "desc" => "Введите адрес",
                        "id" => "ale_adress",
                        "std" => "РБ Минская обл., Мядельский р-н, д. Нарочь, ул. Заводская, д.1",
                        "type" => "text");

    $options[] = array( "name" => "Телефон",
                        "desc" => "Введите телефон",
                        "id" => "ale_telephone",
                        "std" => "+375 (1797) 46-2-40 (приемная), +375 (1797) 46-2-96 , 46-5-87 (отдел снабжения и маркетинга) ",
                        "type" => "text");

    $options[] = array( "name" => "Банковские реквизиты",
                        "desc" => "Введите реквизиты",
                        "id" => "ale_req",
                        "std" => 'р\с 3012215170011 в от. ОАО "Белагропромбанк" г. Молодечно, РКЦ №10 в г. Мядель, ул. Советская д.6 МФО 153001914, УНН 600077963',
                        "type" => "text");


    $options[] = array( "name" => "ФИО Директора",
                        "desc" => "Введите ФИО",
                        "id" => "ale_dir",
                        "std" => 'Круглик Сергей Евгеньевич',
                        "type" => "text");

    $options[] = array( "name" => "Телефон Директора",
                        "desc" => "Введите телефон",
                        "id" => "ale_dirt",
                        "std" => '8 (029) 14-46-240',
                        "type" => "text");

    $options[] = array( "name" => "ФИО Зам директора по производству",
                        "desc" => "Введите ФИО",
                        "id" => "ale_zdir",
                        "std" => 'Боуфал Виктор Владимирович',
                        "type" => "text");

    $options[] = array( "name" => "Телефон заместителя директора",
                        "desc" => "Введите телефон",
                        "id" => "ale_zdirt",
                        "std" => '8 (029) 162-98-67',
                        "type" => "text");


    $options[] = array( "name" => "ФИО вед. инженер-технолог",
                        "desc" => "Введите ФИО",
                        "id" => "ale_inj",
                        "std" => 'Янковская Ирина Ивановна',
                        "type" => "text");

    $options[] = array( "name" => "Телефон вед. инженер-технолог",
                        "desc" => "Введите телефон",
                        "id" => "ale_injt",
                        "std" => '8 (029) 164-45-49',
                        "type" => "text");

    $options[] = array( "name" => "ФИО нач. производственной лаборатории",
                        "desc" => "Введите ФИО",
                        "id" => "ale_lab",
                        "std" => 'Зеленина Светлана Михайловна',
                        "type" => "text");

    $options[] = array( "name" => "Телефон нач. производственной лаборатории",
                        "desc" => "Введите телефон",
                        "id" => "ale_labt",
                        "std" => '8 (044) 759-06-32',
                        "type" => "text");

    $options[] = array( "name" => "ФИО нач. отдела отчетности",
                        "desc" => "Введите ФИО",
                        "id" => "ale_nach",
                        "std" => 'Иодко Анна Александровна',
                        "type" => "text");

    $options[] = array( "name" => "Телефон нач. отдела отчетности",
                        "desc" => "Введите телефон",
                        "id" => "ale_nacht",
                        "std" => '8 (029) 389-31-55',
                        "type" => "text");

    $options[] = array( "name" => "Телефон юрисконсульт",
                        "desc" => "Введите телефон",
                        "id" => "ale_jurt",
                        "std" => '8 (01797) 46-2-40 (тел./факс)',
                        "type" => "text");

    $options[] = array( "name" => "Телефон отдела сбыта",
                        "desc" => "Введите телефон",
                        "id" => "ale_sbt",
                        "std" => '8 (01797) 46-2-96 (тел./факс)',
                        "type" => "text");

     $options[] = array( "name" => "Телефон бухгалтерии",
                        "desc" => "Введите телефон",
                        "id" => "ale_bux",
                        "std" => '8 (01797) 46-2-59',
                        "type" => "text");



    $options[] = array("name" => "Footer",
                        "type" => "heading");

    $options[] = array( "name" => "Email",
                        "desc" => "Введите Email",
                        "id" => "ale_eml",
                        "std" => 'naroch_msz@tut.by',
                        "type" => "text");

		
	$options[] = array("name" => "Theme",
						"type" => "heading");

    $options[] = array( "name" => "Site Logo",
                        "desc" => "Upload or put the site logo link (Default logo size: 133-52px)",
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( 'name' => "Manage Background",
                        'desc' => "Select the background color, or upload a custom background image. Default background is the #f5f5f5 color",
                        'id' => 'ale_background',
                        'std' => $background_defaults,
                        'type' => 'background');

    $options[] = array( "name" => "Background Size Cover",
                        "desc" => "Check if you want to select cover background size",
                        "id" => "ale_backcover",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Uplaod a favicon icon",
                        "desc" => "Upload or put the link of your favicon icon",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

	$options[] = array( "name" => "Comments Style",
						"desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
						"id" => "ale_comments_style",
						"std" => "wp",
						"type" => "select",
						"options" => $comments_style);

	$options[] = array( "name" => "AJAX Comments",
						"desc" => "Use AJAX on comments posting (works only with Alethemes Comments selected).",
						"id" => "ale_ajax_comments",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Social Sharing",
						"desc" => "Enable social sharing for posts.",
						"id" => "ale_social_sharing",
						"std" => "1",
						"type" => "checkbox");

    $options[] = array( "name" => "Copyrights",
                        "desc" => "Your copyright message.",
                        "id" => "ale_copyrights",
                        "std" => "",
                        "type" => "editor");

    $options[] = array( "name" => "Home Page Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_homeslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Blog Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_blogslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Typography",
                        "type" => "heading");

    $options[] = array( "name" => "Select the body Font from Google Library",
                        "desc" => "The default Font is - Raleway",
                        "id" => "ale_headerfont",
                        "std" => "Raleway",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the body Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - 600",
                        "id" => "ale_headerfontex",
                        "std" => "600",
                        "type" => "text",
                        );

    $options[] = array( "name" => "Select the Headers Font from Google Library",
                        "desc" => "The default Font is - Libre Baskerville",
                        "id" => "ale_mainfont",
                        "std" => "Libre+Baskerville",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the Headers Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - 400,400italic",
                        "id" => "ale_mainfontex",
                        "std" => "400,400italic",
                        "type" => "text",
                        );

    $options[] = array( 'name' => "H1 Style",
                        'desc' => "Change the h1 style",
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '22px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H2 Style",
                        'desc' => "Change the h2 style",
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '20px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H3 Style",
                        'desc' => "Change the h3 style",
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '18px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H4 Style",
                        'desc' => "Change the h4 style",
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '16px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H5 Style",
                        'desc' => "Change the h5 style",
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '14px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H6 Style",
                        'desc' => "Change the h6 style",
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '12px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "Body Style",
                        'desc' => "Change the body font style",
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '11px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

	$options[] = array( "name" => "Social",
						"type" => "heading");

    $options[] = array( "name" => "Twitter",
                        "desc" => "Your twitter profile URL.",
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");
	$options[] = array( "name" => "Facebook",
						"desc" => "Your facebook profile URL.",
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");
    $options[] = array( "name" => "Google+",
                        "desc" => "Your google+ profile URL.",
                        "id" => "ale_gog",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Pinterest",
                        "desc" => "Your pinteres profile URL.",
                        "id" => "ale_pint",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Flickr",
                        "desc" => "Your flickr profile URL.",
                        "id" => "ale_flickr",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Linkedin",
                        "desc" => "Your linked profile URL.",
                        "id" => "ale_linked",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Instagram",
                        "desc" => "Your instagram profile URL.",
                        "id" => "ale_insta",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Email",
                        "desc" => "Your email",
                        "id" => "ale_emailcont",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Show RSS",
                        "desc" => "Check if you want to show the RSS icon on your site",
                        "id" => "ale_rssicon",
                        "std" => "1",
                        "type" => "checkbox");

	
	$options[] = array( "name" => "Facebook Application ID",
						"desc" => "If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.",
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Enable Open Graph",
						"desc" => "The <a href=\"http://www.ogp.me/\">Open Graph</a> protocol enables any web page to become a rich object in a social graph.",
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");


	
	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");

	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Footer menu title",
                        "desc" => "Insert the footer menu title",
                        "id" => "ale_footermenutitle",
                        "std" => "Select a category",
                        "type" => "text");
	
	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";


    $meta_boxes[] = array(
        'id'         => 'contact_page_metabox',
        'title'      => 'Contact Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr1',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Second Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr2',
                'type' => 'textarea',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'press_page_metabox',
        'title'      => 'Press Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Press title #1',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit1',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #1',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb1',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #1',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage1',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #1',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo1',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #2',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit2',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #2',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb2',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #2',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage2',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #2',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo2',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #3',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit3',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #3',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb3',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #3',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage3',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #3',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo3',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #4',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit4',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #4',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb4',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #4',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage4',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #4',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo4',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #5',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit5',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #5',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb5',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #5',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage5',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #5',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo5',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #6',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit6',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #6',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb6',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #6',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage6',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #6',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo6',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #7',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit7',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #7',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb7',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #7',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage7',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #7',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo7',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #8',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit8',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #8',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb8',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #8',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage8',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #8',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo8',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #9',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit9',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #9',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb9',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #9',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage9',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #9',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo9',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #10',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit10',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #10',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb10',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #10',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage10',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #10',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo10',
                'type' => 'text',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'aboutslider_page_metabox',
        'title'      => 'About Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb3',
                'type'    => 'text',
            ),
            array(
                'name' => 'fourth member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc1',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Second member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc2',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Third member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc3',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Fourth member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc4',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'First member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava1',
                'type'    => 'file',
            ),
            array(
                'name' => 'Second member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava2',
                'type'    => 'file',
            ),
            array(
                'name' => 'Third member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava3',
                'type'    => 'file',
            ),
            array(
                'name' => 'Fourth member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava4',
                'type'    => 'file',
            ),
        )
    );

	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-thumba',
                'width'     => 430,
                'height'    => 267,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-mini',
                'width'     => 100,
                'height'    => 67,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-big',
                'width'     => 680,
                'height'    => 9999,
                'crop'      => false,
            ),
        ),
        'post' => array(
            array(
                'name'      => 'post-thumba',
                'width'     => 475,
                'height'    => 295,
                'crop'      => true,
            ),
        ),

    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array();
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}