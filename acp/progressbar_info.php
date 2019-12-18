<?php
/**
*
* @package phpBB Extension - Reading progressbar
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\progressbar\acp;

class progressbar_info
{
	function module()
	{
		return [
			'filename'	=> '\dmzx\progressbar\acp\pmregbar_module',
			'title'		=> 'ACP_PROGRESSBAR',
			'modes'		=> [
			'config'	=> [
				'title' => 'ACP_PROGRESSBAR_CONFIG_SETTINGS',
				'auth' => 'ext_dmzx/progressbar && acl_a_board',
				'cat' => ['ACP_PROGRESSBAR']],
			],
		];
	}
}
