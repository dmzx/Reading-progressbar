<?php
/**
*
* @package phpBB Extension - Reading progressbar
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	'ACP_PROGRESSBAR_CONFIG_SAVED'				=> 'Reading progressbar settings saved',
	'ACP_PROGRESSBAR_CONFIG_SET'				=> 'Configuration',
	'ACP_PROGRESSBAR_VERSION'					=> 'Version',
	'ACP_PROGRESSBAR_ENABLE'					=> 'Enable Reading progressbar',
	'ACP_PROGRESSBAR_ENABLE_EXPLAIN'			=> 'Enable or disable the Reading progressbar.',
	'ACP_PROGRESSBAR_LOCATION'					=> 'Position to display',
	'ACP_PROGRESSBAR_LOCATION_EXP'				=> '“Top” or “Bottom”.',
	'ACP_PROGRESSBAR_LOCATION_0'				=> 'Top',
	'ACP_PROGRESSBAR_LOCATION_1'				=> 'Bottom',
	'ACP_PROGRESSBAR_HEIGHT'					=> 'Set height',
	'ACP_PROGRESSBAR_HEIGHT_EXPLAIN'			=> 'Set height for Progressbar',
	'ACP_PROGRESSBAR_COLOUR_1'					=> 'Set Colour Progressbar',
	'ACP_PROGRESSBAR_COLOUR_1_EXPLAIN'			=> 'Click to set the colour of Progressbar.',
	'ACP_PROGRESSBAR_COLOUR_2'					=> 'Set background Progressbar colour',
	'ACP_PROGRESSBAR_COLOUR_2_EXPLAIN'			=> 'Click to set the background colour of Progressbar.',
]);
