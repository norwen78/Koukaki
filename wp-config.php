<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\MAMP\htdocs\koukaki\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mI#!<h<t)dZ(w`8QW78vC^Z+6 o{5+JB4Sp*7  ^+-nc+Tnoh]48 {nV<ff|l0e9' );
define( 'SECURE_AUTH_KEY',  'O;:Frr!OeaRFP68R=!2=2(^TpQ9U6X5:[#L3[k$0K=c,~+$UVHND.NVF1j6Z/`p;' );
define( 'LOGGED_IN_KEY',    'up +~C]<2Eg(NlDDS/+G?oa)tl:1A^ID5?zI2NGhOesF+8xlE;2ex/^Gr~v+(=#_' );
define( 'NONCE_KEY',        '{w~d*iK}&;|.L^BBlu!E.N:DmcC$<led-}C k/R.I~Y.Rk`eSHzSab}kE{^2_J*Z' );
define( 'AUTH_SALT',        ',mWGV[~)q7N ++b[7L,S*&!IY8zOAr0bZIYTDz_jw6YnZ6J:.3T+/(B>0#6j&c2P' );
define( 'SECURE_AUTH_SALT', 'e1-^[6}8Y!Dv)romalS?3?3|%wS]7OXJ?;bdxJyw90I+1/!Xya9nL4UcNAF*E40p' );
define( 'LOGGED_IN_SALT',   '%/O-1T/[5t+;RVmCK#DN<8;W^g3O}vzHB=EdK8Yaqaj.yb2@-qf|T_23u,xkPF<(' );
define( 'NONCE_SALT',       '|m!TE&3nY2z(a_OZl/GtWTTP1,m}b:vnZb]P;((6Tv)Kk8,`b#s%#3on[wxe1b1@' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
