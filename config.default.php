<?php
/**
 * Default configure file
 *
 * Usage:
 * 	Create a new file named 'config.php',
 * 	do your setting in it using SetCfg(),
 * 	the syntax is silimar with SetCfgDefault() below,
 *	they will be auto included by this file.
 *	DO NOT MODIFY THIS FILE DIRECTLY.
 *
 * @package		bbsmarker
 * @copyright	Copyright © 2013, Fwolf
 * @author		Fwolf <fwolf.aide+bbsmarker@gmail.com>
 * @license		http://www.gnu.org/licenses/lgpl.html LGPL v3
 * @since		2013-02-05
 */


// Define location of Fwolflib
if (!defined('FWOLFLIB'))
	define('FWOLFLIB', 'fwolflib/');
require_once(FWOLFLIB . 'func/config.php');

// Init global config data array and include user config file
if ('config.default.php' == basename(__FILE__)) {
	$config = array();

	if (file_exists(__DIR__ . '/config.php'))
		require(__DIR__ . '/config.php');
}



//
// __Global settings
//

// Server id, used when generate UUID or identify server
// Below 0 to 999 is reserved for test, product server start from 1000
SetCfgDefault('server.id', 0);
// Output format
SetCfgDefault('system.format.time', 'Y-m-d H:i:s');
// List size
SetCfgDefault('system.pagesize', 20);
// Timezone
SetCfgDefault('system.timezone', 'Asia/Shanghai');



?>
