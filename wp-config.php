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
define('DB_NAME', 'forAmira');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '9x.k>DjiQ6c#pH`j0PPRVN:9)NC=(y:S@tmcjQ^.soV.DA?mI#rV(y:fU#:q2/gZ');
define('SECURE_AUTH_KEY',  '^5k}$~ltD$xbm2/bRYc,DH^2*e+4*i/g&r2y*_66{;HC!j#c @v}6(C76O7`%sY&');
define('LOGGED_IN_KEY',    '_+Kko`aC)R>[Lit8E`5Xx[oYwqoj/dkB(Ld79D-@4Av1~~>h&oOW@?sSeFcp7$oQ');
define('NONCE_KEY',        'CSA-H>SYjru!?n4w3<I?Dk]<Op2=pE.X&,yJNX1?<YAj+^;TLsN-J#F{,!.nzD1D');
define('AUTH_SALT',        'i`Ped73J!L*W(UM[y|a$-_$)2U/1%yAt>B#zY*%iIxb*np+I?zKKTTqwz`kn?CW7');
define('SECURE_AUTH_SALT', 'I|MCJr^{diP==L;GmZQVO|0a1YC$-]?$Ey13GaR@zptC cyB}d~p&Kz8E6ePR_&D');
define('LOGGED_IN_SALT',   ',f#SX$aCJ%5Ia^^CpMdfRFAqIuLhrRYq,5r58aTY@}MiS!qf[!-<m{iqpFsYOQs,');
define('NONCE_SALT',       ' cf&J6=om31fwvz#D0du-AKw)[Zf.Onnx3/e#Y5b,c^U_m|zo{*G[*cjq*j+w%bO');

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
