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
define('DB_NAME', 'wordpress');

/** Nome utente del database MySQL */
define('DB_USER', 'wordpress');

/** Password del database MySQL */
define('DB_PASSWORD', 'wordpress');

/** Hostname MySQL  */
define('DB_HOST', 'mysql.magnolia.svc');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Lz*j(mn.&GAxn<u0RL<UT9SR5k9cy0:YR=_64|FN*Lx-9Cx./&_m4.Kba;4a#M$0');
define('SECURE_AUTH_KEY',  '3a4dYzvkE C:&`2=;[G*drdAn[tR #s{|<%KZh4+}pA+z$7U-]0xV$5XV&@9[4f_');
define('LOGGED_IN_KEY',    'uTwzVL%uSBfnj;uTIxnGht{9cZEWKk%,mI5hO!-nNO(t+_Js<,;[Zg`Dqk:C[4%=');
define('NONCE_KEY',        'kV23 #KqqG.W,4Vo^!,-g84+h-G}?:^ZQ*qZG::JR:H^PH`<9j+%q<,T)56X@-R$');
define('AUTH_SALT',        '7?_8P4A`3+Ae$`C()mw>xER;`m`ln--s@i7{<-M25]1q[R7Ajw`mi@VaV[N4rE1J');
define('SECURE_AUTH_SALT', 'AR#le(08mb5YQ[b+#}6WLFPEm4ghCKK<l~dL4N+F])d#;wg LFI_h_kf2=gq[c[a');
define('LOGGED_IN_SALT',   '$ye0?^)zzA|w+C(I;A:Vdx1Y++ARO?3:8j!RG`%L-WmCT5e4e[c*Q+hB:AMX1vE|');
define('NONCE_SALT',       'Lf$&WOPSnM7]l+N,En!]9_weo7f&vi9nE&+w0S66ru-jfD>*!<4RhJxAx0O]sS[B');

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