<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'magnolia');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CdQWr4<wU;.OHdcM.sZ`awu]Yb~,K2,{CgpDi:<t-ivX5~_o$Z[A}gSG:MCiHB~;');
define('SECURE_AUTH_KEY',  '%9AB~3oFlxhLfLtjG3i)cAT?:6{t3H STnTJdDO2xo8=}pP@)YFih Kn-.v!Dj#A');
define('LOGGED_IN_KEY',    'sAc&BqZwiiTmGSN9StH#D[Z$ew:do+P_^oG&B835KK5Qr?#MQ-#lT`Wc&;!>42`|');
define('NONCE_KEY',        'g_:^=JJGOu0L+2?,*KM~*8o=f}X$qex=>+dPnx{FP~r:xA]yUSb #s:jP6d!*WP9');
define('AUTH_SALT',        'CHt832R|H)2Y`By,YtcI8I`z8=;EFkqY[aQFmVOdtI{yy,<UBkKj#>;k6t&SXv9+');
define('SECURE_AUTH_SALT', 'OKD>D?O]#N)?jli2<hmVR=>AMt|pZ7kaDdWt8&`}ZHpRnv:Ab*D^af0a&4n>_~Ea');
define('LOGGED_IN_SALT',   '?3T,UUWCk%lh<+wf(XD?oKZI{!0`KYE 4fv&XT_Z?[qA1u/%96~Ka6gC)Z@=lJ0!');
define('NONCE_SALT',       'q+]+XOaSH3pxj:B(vKc-%T-7lWfJ4pJ%4nf#7{kO}Bi9w//j2O(^@]n~cKm^[u2u');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');