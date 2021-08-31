<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_bd' );

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5To=6R%D8Gjg5zlwr={[GKEy~$RCKu[U*.^YnMo],R]Btoj}$O&lk|7<ULqS*%=B' );
define( 'SECURE_AUTH_KEY',  'x2^e!z6CzImW,;e puqQKAwQvarR,9441r`gK)/*Sy:7?6{7p3eY=eeg zRNou[p' );
define( 'LOGGED_IN_KEY',    'MeTNt5BEV,pOwD^wQc@KeAcP. }Mc49%;if{Qme5{8>N$.b(*i(3UhMsZM|00%pG' );
define( 'NONCE_KEY',        'x!<NRYZg9x]_TVYQ5i/ UsGdms1FMvGp/.ruPIWSh=)@x_HB=Dt[Z817g)zaHr%R' );
define( 'AUTH_SALT',        '.w)5+cSU|R`|88^Lic.V@|Ig~^RCG6}k<o</DqK BUQDqSBq]*|SD,36H wYrf`(' );
define( 'SECURE_AUTH_SALT', 'c?21lQ0O>*e8,q:IXt?stC-LS|>ObS_=rXz $XYI0]&/ cq^sH]N-TjC%(Idb&gE' );
define( 'LOGGED_IN_SALT',   '|s!%4tS=xD_TP]>wLQ,n$uYx=a+r@v$WN#fKzG0Ns[O<lT!AWC*{uDlb6YRnUo_@' );
define( 'NONCE_SALT',       '$CCK&VJpIy(zy2XiR8ffh-VDs=k&*Ds=q7.6>9_%=-UWTZI;2xJ?~V-Ib=Or3X%F' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
