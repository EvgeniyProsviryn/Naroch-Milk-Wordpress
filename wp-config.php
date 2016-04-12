<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'naroch');

/** Имя пользователя MySQL */
define('DB_USER', 'vroot');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'vroot');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mD.$w;}ANxQ&doqqM-PDEvEy;iiL,x0;r-}A#c}a^pvlNa,ne?.9HT%+g4.@s5+C');
define('SECURE_AUTH_KEY',  '9.PZT6>_fh?R47HsiqyE=S+ssFqPP8B<p}!~lnJ.FR34V+Wg1xtqd|6~,Fi-bfjr');
define('LOGGED_IN_KEY',    'GB G6[mJ#/LeOo`_h-lK%,K1q]+O#aFQ_v}l;LVWW0S7vhzz38;)<aj[+AX1_+_4');
define('NONCE_KEY',        'd!Ui~R3!y|*>DXLfuO5&_n7-)n5JX{lVb)4/)/ fhpX$9Hyar+Cq8<EoC{d{-_Ua');
define('AUTH_SALT',        '7;>}V3|}qOd:`4i-H`Yk^_lem_Ll$#?LXi`p&^E$f6b_Vx;Lwm8U|_3A&mQ=T,d3');
define('SECURE_AUTH_SALT', '0XTUj+*cFn_X+kdmCwBxPi_|dmJ-7h2;ZX n51DZ:^>-0o.XO<LxTp+z~F0$pB#X');
define('LOGGED_IN_SALT',   '+ yPje_QkP)y+XFu S.e4c]j7=Z uJ(2]|!Zgu6TDr(!}UV*&sAO -lu~8(ZX`XE');
define('NONCE_SALT',       '}Hw~nde#<TH3d[<hR $Rz!j|a_G|?zHr% -|8`{//q!d4{>k~jpA.?,&aT-DO)W?');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
