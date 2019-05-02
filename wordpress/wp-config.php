<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'franyblog' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '3J|wD.tEo89B@F_Wftus,Azsy4ZZ/Y3.#$I)^>Ji,O=FEW>,M22uQWA3ga^e=f&[' );
define( 'SECURE_AUTH_KEY', 'Zgh6A@[<Jqr%4YfKtPkjbmgneXsB:BrGmJPt5j[m^mJ>t9zUI!hem^ #qDXaj+,7' );
define( 'LOGGED_IN_KEY', 'qX-.p`#kKq6G3um_%}2=f%*P8ZN{7hZ,cf!X~er]LjM`NiUE{b`{[H>C{mD1$9W6' );
define( 'NONCE_KEY', '4W!t~oj/*1$J&1D&0Fy,d<52IiZtBh[(C&Xda>(pX=oMtlu$F9Twy9k]SL3<A5*#' );
define( 'AUTH_SALT', 'j-}+pu/OPO9,=0cyJ;O184)6P:CM8eQ@t-n!xzU`/!^!nps:nIK;_]HWDIRu|49p' );
define( 'SECURE_AUTH_SALT', '{}yT5d#Xz:`yoCn4{Z6c+3Mk^A_$?whPE0m/wSc7r_Fo7[H24a-b0|AS22zJj9M?' );
define( 'LOGGED_IN_SALT', '$X[g`L.`MdJFKUt:#=o=$sYEW$k)4~^HdNy=#cv#MN1-s^5]($N*X`Y{sX]3M@R$' );
define( 'NONCE_SALT', 'TtrHHTXWRJ?##5MRqy5}C]z&s`{7B,Al=0j~A|go1-y.BzIFi8U/|I 5g L]m^z@' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

