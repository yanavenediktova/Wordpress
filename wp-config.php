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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'word-press' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'word-press' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'word-press' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '`BSDjcB2P%xBL&E7sK`OcN-90qw*06Gp+TH@t]E;DZ(]V{b{A{?P_,5or[DTa4mO' );
define( 'SECURE_AUTH_KEY',  '?1X:GC %ilUyfX!d f?[Y)UtJl2I;.lDC[8]i96%bNw*yrEc3~d1*Q6tj8w]Lw/J' );
define( 'LOGGED_IN_KEY',    'AF^%Lkj^4{sMT~Si%E5hWK*]#r#cQP#L[6|T T/),1n=GQRKWq1d0T0bad 5+c:m' );
define( 'NONCE_KEY',        'PveF]n:q+44A/o3YpTZ;7Lb+^]6|2!cS }$iK)jc+~f4eBo|t2|Qb8`]L|!CUXBN' );
define( 'AUTH_SALT',        '6hv9],uL lZtl%`0e2{atSMa|e<l?W=B, wbs!Y-:C65J>y[NJE}?K39,.{Pcu^|' );
define( 'SECURE_AUTH_SALT', 'q|D[C{:>7CzjeCsT._6jK?Keff`4{Doyv`>{GT.^3/X*(YrS-&p4_{!wqN*JeL4i' );
define( 'LOGGED_IN_SALT',   '=y,_F;_HlJh}5_bF_gwkMQvB/%A;qm:d?%p7~NM^_XA`|5##}Ux$![nBcFkggzoQ' );
define( 'NONCE_SALT',       'Y@f4673a)^xKb-LnJ[eCD!y5E(y[d3gW)F|R7]wB1VbY(XIZy&)/KEwSJ ZtQC`u' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp1_';

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
