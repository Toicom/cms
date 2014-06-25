<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
 * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
 * E' possibile trovare ultetriori informazioni visitando la pagina: del
 * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. E' possibile ottenere le impostazioni per
 * MySQL dal proprio fornitore di hosting.
 *
 * Questo file viene utilizzato, durante l'installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web,è anche possibile copiare questo file in "wp-config.php" e
 * rimepire i valori corretti.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'cms');

/** Nome utente del database MySQL */
define('DB_USER', 'cms');

/** Password del database MySQL */
define('DB_PASSWORD', 'cms');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * E' possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=~%]TBJ-$nZRkN(btCGI<G8qDQk,6EB|b?7J^)+]8#:Gr}&ufs+_$$LN6O:#JHz9');
define('SECURE_AUTH_KEY',  'r62HA[$YJ7NH.f&.a(>>I_~^mCY/pB<QYS+=d>+<l|/y2Ert>e=|`rG+b^2sEPH>');
define('LOGGED_IN_KEY',    'MS+D;(heAadGgcjE]C4T<fbpLR6;<8,iO)5+VNofDn3B,qGf4R39I2]/@zp[pB||');
define('NONCE_KEY',        'fK wr;aK+(;qvCTv7-IV~Wf*?^bQ^h<xyv|LB0C.WFkM%D{Q0h 1l$;K^6d+e+|~');
define('AUTH_SALT',        'd/AJ1jOI&F>SoM(d_[Osw~p`ZLJ+N`lpeR>a=[|,m8Hwk7B(+ei`/s$I[o*wL*1<');
define('SECURE_AUTH_SALT', ',hiX;B >}8Dq/8AyJ?P8-WD%<gi<6+OZc,gptrgKl(`-PgWJ|9QD&(ou2>,Ylr-h');
define('LOGGED_IN_SALT',   '4vcW3E+/*F(+EN2&!+m8#b6rU8EF:r61w$pX4q[;@|$d*J`[lIV#,F1Mv,TYLy)B');
define('NONCE_SALT',       'X-g-pQ|Bu,qhg!,mUW+Jrm,Lre4*!m^c+0s4z!5w/!RV=k[#%Jq5L-9>77Z_VQ] ');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress .
 *
 * E' possibile avere installazioni multiple su di un unico database if you give each a unique
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Lingua di Localizzazione di WordPress, di base Inglese.
 *
 * Modificare questa voce per localizzare WordPress. Occorre che nella cartella
 * wp-content/languages sia installato un file MO corrispondente alla lingua
 * selezionata. Ad esempio, installare de_DE.mo in to wp-content/languages ed
 * impostare WPLANG a 'de_DE' per abilitare il supporto alla lingua tedesca.
 *
 * Tale valore è già impostato per la lingua italiana
 */
define('WPLANG', 'it_IT');

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all'interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
