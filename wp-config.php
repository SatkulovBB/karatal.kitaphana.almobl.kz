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
define( 'DB_NAME', 'karatal_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o{X;_TWrnC6l|Rv$m3e^wbgg7]4w[JfYH{x+_:X|_^)s+(=,c#W~}A7VBnfv]ASn' );
define( 'SECURE_AUTH_KEY',  'a{7oWZZ,=q%f Xdv5HG-`93}W<7!O#pg[&,oO&esNqSKE]|JoX`Obp8#d2u;47k?' );
define( 'LOGGED_IN_KEY',    'lAd5uoE_9!Sj9J`|`o~Gw$oN(r@`P4OROJ_*qOu.r}}kj?h?eFV-?o<KYPMjb,y8' );
define( 'NONCE_KEY',        '->U4R[B3dB@FyGP})LRQ5#X>3[I,<St6G0kW4].lO<);g<LQ2~![qrUlfS=Tl4+_' );
define( 'AUTH_SALT',        '7|R9aG1c1?35:.~CVHLg/I/^;)dP]Wx-5vctMKJv>6@O;edJL=d+P_#P+z3wFn3x' );
define( 'SECURE_AUTH_SALT', 'PD=t2obCdkkA(q2GkW-K8;)zp~Gp-1S?9Mn|OH0`6fN: 7m%oXD)jwP2<1fpU7:4' );
define( 'LOGGED_IN_SALT',   't5{4j1E5iy6S~O*$ehZfgAqeNII/};wmWt[yiq.++IB/QknPz(w*O:kz&c,gq0)%' );
define( 'NONCE_SALT',       ']E&ud,Dy<{#p*Jw?x)BtwB3{yE@6F;EiyjqSfN9Jd[l`#*;_.lKDD@<*@`mR#C{H' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
