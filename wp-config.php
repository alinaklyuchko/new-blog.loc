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
define( 'DB_NAME', 'word_press' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'FWDna1en%5n9$~,wp/8dWAmD)+! #wH5+f]q[D+[_<>iVFz;tz`Q!`*=nQ9a9ehI' );
define( 'SECURE_AUTH_KEY',  '3F@(tZ;/!*QlsoS72!7jSMzCJ_LK1<tyCnj*>$R^GR ;!2f.LQb>HGi$g](kL+^x' );
define( 'LOGGED_IN_KEY',    '5|}%N{o<e,uob&S$8z.9 h|L_7CCa(^nK3BmleY$)(5VXTY$p$i`^tWBL8-8H f6' );
define( 'NONCE_KEY',        'lTh%)XfFL~zM][fg*&de zw?O9AxQ?*4SFVSKoR;5*OSq`4a-u5iq%T#3w4U/E #' );
define( 'AUTH_SALT',        '-Y)T:6?0vH7=Iz2<T,q06BK~z)J.sBM3zVl=zwe-K]rMPX&;O.!I^EhQo~p/q^tW' );
define( 'SECURE_AUTH_SALT', 'qKhUkEy6#+29X {>4>nFc08*Tk,9?ALOzjNfu/Kn{wp*XxfsS 0`$Sza;k5,Ck!O' );
define( 'LOGGED_IN_SALT',   '6q0IRn,;={CNfq2~fyDiH}|qd{0@o80!^3;%k)!%oiN];H$PTz9Gf|pCKu={?JsW' );
define( 'NONCE_SALT',       'R`i_cd6Yeyv*{q{}p~` @zh!el}H<,Z|~p<&i}n)TJhh@(VOvC5qQ6asE<lF[4,9' );

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
