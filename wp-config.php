<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet_poo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'struts' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3308' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<b2zgy-Zb{*[RSHO`(Untcc=f#yn$3>iHJ5Tj3/i89 3$pU2,}2-isfl)#g(P:xq' );
define( 'SECURE_AUTH_KEY',  'mDW#}Db?ou1P~%kmMfq;-~NkfH<YKJ_4dhK*Jq.U15@;6w;B&I6!jbGREqo.{w+@' );
define( 'LOGGED_IN_KEY',    'x@x&Q;$@EshPhFw3ZDzOT?lLh2)(?>]MS4ud}jfYlZ>-f1Jw, q,PKkz0w_H{6SF' );
define( 'NONCE_KEY',        'MO95!sIxW~:(fIE;l/O6$DZ~/?aGj?hd%ijzwg.~;LhHz!8,ky*K*DZ`@zGfwHrF' );
define( 'AUTH_SALT',        '&q.v>z9[j>(#]:r$gI,u9Q!xl]T4I|%y0N^$,7nI@#4[{9k,I2-N>{-YE2NjlKk)' );
define( 'SECURE_AUTH_SALT', 'Hj==7xX?9y^=~el-1M1]g(lM7[^^j9{Vk^F2]*hM4HqevurCV/(}o^oW:M*5B0r{' );
define( 'LOGGED_IN_SALT',   '!t^f,$`B4}z^qZcf|.?B**=sV;U4;&o$W[}C&4x{ZTTsr8:pfuvzH^q*-$)NQsd<' );
define( 'NONCE_SALT',       'N= ^Wma ]KXc=lm~Sq7,6o++`6R`:3ppu;pgVW:2D?QW>MIZ7$WQo->Dih74I!N0' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
