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
define('DB_NAME', 'LeturfdOscar');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'LeturfdOscar');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '/-9*9a+Q~$66NGqO5Q+=cwUB5-w3+tr21MeQ!F9ThO3-cik5b#huGF=#+Ga9,[%f');
define('SECURE_AUTH_KEY',  'q|ajHq m2L1Gjcs4M,Pc=z}.:p:2b,9C^!RltYC=V,1Wh]^<vz+tcLbX9qIBWY8w');
define('LOGGED_IN_KEY',    'YWC(RJAbF*@>9I=8z_SWN8}mG$PxkF>>F.=DL+eJa5E-(d6~rh[{$ ^T>9fO+@<D');
define('NONCE_KEY',        '?ziN;XuVSq@Yy=PeyiuPX_x>qrHHiUJ46lY/6VtnL me(hw&= 9F6;K3ui-1q-t)');
define('AUTH_SALT',        '-c`(,%qJW%HHP-x-f1A?+Lil#x_]VKcww3/,ck3 6hpplL_RXsDK*8o(WmLOrOM1');
define('SECURE_AUTH_SALT', '1UnzIwLbn!O<%7K-U!(Q^,}pIDyB<c#Hr5|xr]~G}:}<uwUL)TI?TB~-JDUn-9qp');
define('LOGGED_IN_SALT',   '3I&X_([LF6<^j3;JGHg-G N!Va+,a,g>[</,q>h`ctm|cR.iES*pWCZ2CM`=:L!N');
define('NONCE_SALT',       'uoxliO]Xm$wlGC-U`+<8+Ed0TBYZ{E)MHNY7HMQu|qv}5y&6=@H|Em(c3d|$hb,m');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'Cavalerie_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');