<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tonyferlazzocom_ftsz_tolkuydbkvx');

/** MySQL database username */
define('DB_USER', 'rkwtayigahqmgsyq');

/** MySQL database password */
define('DB_PASSWORD', 'dPCkD10Jvij7X2l');

/** MySQL hostname */
define('DB_HOST', 'tonyferlazzocom.ipagemysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'Z7,7T)uA$w.5,Ex!fE?N<v>,k%!cK4*5{mR:zrMH`gb:QztQ)?@,[ptjXI.py>:J');
define('SECURE_AUTH_KEY',  'tpaSWdC@6)a{lXv+<U:fu-B[v<-tqC_8!MQaJ~~(qx=|}ClkgI[Nvs@Y+$Ym{34C');
define('LOGGED_IN_KEY',    '=YFzO-$Zd=-4H|*U6x~Kn?=DK08vVv>Fuwux5+hoU;+=X$TRZ Df>qrc%sD}h7 n');
define('NONCE_KEY',        'Ww{v+*+8m(`lHJF/`z}-hF@(LFZ3XA6b[=2LzL#L2`?5i=wi/3+6hhXl_Gba1%U#');
define('AUTH_SALT',        '^?-])4-CM!crQaN<y#B<:vF!1Uai)l_hArb~t;+Zb]Uyp/h.]y.gcy%xlxc?++/S');
define('SECURE_AUTH_SALT', 'T,h pdfn&k4VycspD<gz(dnG+84Z!aB$h6(ojWuGESLjQ$GmTR#_cq6B.&6?I<1H');
define('LOGGED_IN_SALT',   '(zoK!.}F@AL>d_M;)y^okA(s~){{u|_L8oCTR+Ij}S,oY=>X+6R|j$M&rM:ZZJ2q');
define('NONCE_SALT',       'rwU-.+b-bBB?>.pPRbr),42M-_l`sqB+kx,&0I[CS2&ZU_yfF|:9Pek&j+NinW8-');


$table_prefix = 'ftsz_';

define('WPLANG', '');




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');
