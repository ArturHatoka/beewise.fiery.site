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
define( 'DB_NAME', 'u0679512_beewise' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'u0679512_beewise' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345qwerty' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'server135.hosting.reg.ru' );

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
define( 'AUTH_KEY',         'Oz>8h5!p*$/DU>QcoNr<^ ##1>R~04y-g{;StBYJ+_zP].)#BB2iS0P+0drr)uu=' );
define( 'SECURE_AUTH_KEY',  ',K7)+-g2#j$m!MDt,dn)vF^u)IB+71aq[|zI;KS^!q[M ],^ @XUo--+v2.A=ovE' );
define( 'LOGGED_IN_KEY',    ')|5 4%Lt,PL=Q2rO/}fBBuV`]3x|%d@8j0%e INX,Ni(c7e%_?JZU{k[=?df?6Ra' );
define( 'NONCE_KEY',        '<hEH?L#Lm#t3Bp[].VR9/K?9&WP&>fE3a-*C_GUH@(V%lu@)h mz(blm%&~Mg3+Q' );
define( 'AUTH_SALT',        ',I5zWl!T#*5<6H!I/6Ej#K2P~eokPzoOgvWR|0CLENI+N#07~j[W%#3a|`qxzPHy' );
define( 'SECURE_AUTH_SALT', 'X>o>!Bay!K^9Bc8@^lG0H}aKk+i#Rw+dzGC<M;9+.X_miwc=d#MP,)n#/Vuo8h`W' );
define( 'LOGGED_IN_SALT',   '9/x7#~C;4zAZ!q3cj>!;w.0n&r]+-3Jz1{ZY;RBXZ*gF+J.U};[I!=ni5]O[>i{>' );
define( 'NONCE_SALT',       '<$=gxKwc%kI 9k4=[e-Op!AK2Qi`BR~8l+5)!4BYL/gY!5+Z;X8oT+iEfqX=vAyX' );

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
