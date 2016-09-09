<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp_raymondvoyage');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8H(M[R8D(Ox0_5WYw%Y$j8/D#q>xCxjXIL>9X)8]^/ FABF7[^IBYdnkL4fw|W6t');
define('SECURE_AUTH_KEY',  ',8hxmA(`UI,ac>D>}/pLbdb} U8ra,iWg2|HYe6o6Fw&tUS;o@C*CJ^F,,}, {+G');
define('LOGGED_IN_KEY',    'p@LR:2&>|5~V,GDax)C;WVhWLMG3{RZ.s.nzCkRu~hK@0/+5}CLO[`R,N8)}9(mx');
define('NONCE_KEY',        'r5<<` YfUtJ*ny&Q@bI[/xtBGlJo~oLmSS(q&)|)qM]t;q5r{|3UkDc1?j<Dkmei');
define('AUTH_SALT',        'Ri5_34n/4Leyvm2QJ6>O}Zn%2kEN^:/JXd,^`])y bW-lHpwsHn[VS8T:5o@x7 $');
define('SECURE_AUTH_SALT', 'Hoa<Q<?wz[6}uUWHDdtle.i]Vw{k&Wu~TWf(Dy9;bBn}WL ,[;o@Ol&(Lv9 xJi5');
define('LOGGED_IN_SALT',   ',+BNSCNz]gL%Jro8!Ei~tMRQm!r7E`#u``1NjasDx`a8:+pM)pTP$bM?(C3wZI/P');
define('NONCE_SALT',       'pr-IEQgF0|C}yyzxW 0.K,G}0f2MWMFM%M0!eY&% !6p9>AjXA55k<,kp]v;0]2^');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');