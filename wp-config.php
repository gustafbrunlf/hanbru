<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'hannabrunlof');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** INSTÄLLNINGAR LIVE **/
/** ONE **/

// define('DB_NAME', 'hannabrunlof_se');

// define('DB_USER', 'hannabrunlof_se');

// define('DB_PASSWORD', 'NMgfuzZR');

// define('DB_HOST', 'hannabrunlof.se.mysql');


/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qf,W 8)JjS9`HSb?]t+TpX ?&A@6.a5,-2h_W-rAx9I:Qq3+&Vj&RYLmMk{+ifF=');
define('SECURE_AUTH_KEY',  'E1{mKV2eJ)X|SkP:z6*Q5Vz2K|&X6sVtxA{<;26.AZ40AHHvL{}$IJYqD#]rS-8v');
define('LOGGED_IN_KEY',    '6$-OW -A,T`(bw*!Xqx{$0q3ka`no1GgzX?U4`on>y|Fz;@k]^crC<J5m|cOQ=uw');
define('NONCE_KEY',        '3~XU2o<]-b]jr+TMSgBYImE(/p`3L8/=7:&rX,g|%oR)[-Ol:omi6,w?|!-0nyxd');
define('AUTH_SALT',        '9s|na+(3a0cIS+I5}4}I,/NLUgM*Q,&eX>rPk1,~[d*dpEW66%MF)gk|OGhr[^vj');
define('SECURE_AUTH_SALT', 'V%fc+O_GHd!jnIE1rVNm$cR4O^S;lI}JdvKs*nv,F>Z|SgWWq-)-O`hP/[_8:m|r');
define('LOGGED_IN_SALT',   'cC/8seWA^Ge5sOqc1L^+bvgcxoYtpx*+R+qLJeLG4X.k+i;kyUbpi?70|mHJreeC');
define('NONCE_SALT',       'q(NL*,HLk~azCM-D]8c f9>3W1?),>]@EX->LDu}]cZj:QC53+jLK-1jQvX(-K= ');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');