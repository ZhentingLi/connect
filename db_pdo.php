/*asdfghjkl*/
<?php
/**
 * MySQL connection check
 *
 * Checks the connection to the local install of MySQL
 * 
 * @author Donal Ellis <donal.ellis@rmit.edu.au>
 * @version 1.0
 * @package Connect
 */

/**
 * Hostname and port mysql is running on (can't use localhost)
 */
define('DB_HOST',   'yallara.cs.rmit.edu.au');
/**
 * Name of database to connect to
 */
define('DB_NAME',   'winestore');
/**
 * Username to connect with
 */
define('DB_USER',   'kyle');
/**
 * Password to connect with
 */

define('DB_PW',     '123456');
define('DB_PORT', '52689');
$dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;

function showerror() {
  die("Error " . mysql_errno() . " : " . mysql_error());
}


?>
