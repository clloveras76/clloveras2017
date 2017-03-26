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
define('DB_NAME', 'clloveras2017');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'mz)XS,mAt0wPvqYPDH:5}E+EJ-~WpO8sdqNQ?gne_&#~PTJ; P1c-z8q[:lHir (');
define('SECURE_AUTH_KEY', 'nO|.uM8>p~R%% HASgS.p83l`}w,)dxE&>>ke/[XjYxi*+<ERPvE_m%;yeso8 8L');
define('LOGGED_IN_KEY', 'U~*3<:&50Bv|7_i+[Pw&]pOr`RG1JY;b|<t<7udW,:6=*fJ8=i{*g.]mC.Z|{VMb');
define('NONCE_KEY', '@9o4G;<$r88e(PHqa4A_p2Ek?{>LY4d[K^yyaA eAm0VV!ia0GpsNQ0/~nid&)p3');
define('AUTH_SALT', 'Uobz{oow4fo2Twet%p^)]h7^FKNiiaugdmUXm[f;QSk$l/Nb}IzO2-i:+i<yLJ.9');
define('SECURE_AUTH_SALT', '/S7~|6o}tI+0d|[m>3s7L1iEG?*WNryKV.#h?w3)rj)B|`sXN7K5AVuh;h$-ZVM5');
define('LOGGED_IN_SALT', '(jA[k%vE]H$F2%Tg+Z*mP(ms|[<0COCGz7 1Q9ABkNH7MEY=#MbV~l$w^/X(O} X');
define('NONCE_SALT', 'eNxdJC{@VJxMtk-[=K-bm.|vE.?QRfok6y$Z/9IFEo/I.YJ>Hx|IL[~FYDJh96JL');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

