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
define( 'DB_NAME', 'wp_clean' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!nd(i.^_l `]K&Ix?Rri]9M9EEojHK-1KJLH2/C9t.D`/+>`YG1UU[Cc)d#cT>ih' );
define( 'SECURE_AUTH_KEY',  'MGjua@9Xq[KTv93]g;VY.0RH+mhl1}$qB&(B1 b4t3;s3Hx_TP~SPs/!yGzaIZtC' );
define( 'LOGGED_IN_KEY',    'C:nU)aPD*WaR{YnR)s4m2mD8X`4t9PscxWatd`|Tuf+|cT}<&=E:82:/>/i~<BUw' );
define( 'NONCE_KEY',        'wyW>yE{=NSUvmMUH7[Lz5x(+Utv){z%1ZM&,-v]vnYcoTG#Hub(y$gau_-Ay5%yb' );
define( 'AUTH_SALT',        '<K+qUyWV!!d;ox<7W(1,z qLX)|rAdrt`1YijbKb.Cm~gWMCMO4Xy*b/I[R0uk%I' );
define( 'SECURE_AUTH_SALT', 'sTJU@16T^mtkpp)P(T3Hv*0Xj(M<ZcrWskAk0dK?_BJ_;0(k&JRAj8%Z~sJmI7~F' );
define( 'LOGGED_IN_SALT',   'd>l`dQeSf/)E3LJIA@PKscMn0535T>t*fgEg$?DBUQnK*;ALbsJ=y:2Y!=eOSvvP' );
define( 'NONCE_SALT',       'O*HtF?={CD5m $-*OQ;R?mY.4E)z~R2*YBeDCnr@iY>Pg+B`BThHW],V$bJ2etIi' );

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
