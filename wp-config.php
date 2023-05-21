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
define( 'DB_NAME', 'bicycle' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'j:d*IA@WP3B[b3q^$oBr!dLd~_tb I3jQ<]$0 s5^$r5Val;>u=hsVtD><:$LB&3' );
define( 'SECURE_AUTH_KEY',  'sOq9U]s9>w~cXax.YobjgAz{kHIbyjPulRZg- 1s+5F:z:K-^vZYM:!j#_SO:!&]' );
define( 'LOGGED_IN_KEY',    'V8+YZk*Tp?9L[S//##<0KsRxLWg+h%B>UZQ6~i-mGr>mLIDCFM1QQI)$6BD{iXV.' );
define( 'NONCE_KEY',        '>mWp%XEn U/pU,`&N8WtZN1>(62W0D]m)cN%:W^}92qQ4v(eOd%lr0x,yg}UH[Hg' );
define( 'AUTH_SALT',        'mBmh`F?@%ZIO<5_YazW22?n`)MOMljscW3)CYYuI$1a(mdeB<U@d8G1._Traq~{^' );
define( 'SECURE_AUTH_SALT', '#j@13`he]3Or*?!;c6k#R|E`E^L7ku8[9]^,1?AdzFca%:7^GD?}!+XS!kC*@1.;' );
define( 'LOGGED_IN_SALT',   '?66t*509X+HxCb,;4BY=|!GuVK(DmAhmZ#PPg]{&zC3kiD%m8sY_ukdx1=o#C#k=' );
define( 'NONCE_SALT',       'Fy 2P*?k#oYk/OMMGA}b-=0.}%yS!<i/HP8>Thebr9&^cz(2q7Eu@bx)wxmkf0MZ' );

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
