<?php
/**
*
* @package phpBB Extension - Reading progressbar
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\progressbar\migrations;

class progressbar_install extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return [
			['config.add', ['progressbar_version', '1.0.0']],
			['config.add', ['progressbar_enable', '']],
			['config.add', ['progressbar_height', 5]],
			['config.add', ['progressbar_location', '0', true]],
			['config.add', ['progressbar_colour_1', '2e1fff']],
			['config.add', ['progressbar_colour_2', '']],

			// ACP module
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_PROGRESSBAR'
			]],
			['module.add', [
				'acp', 'ACP_PROGRESSBAR',
				[
					'module_basename'	=> '\dmzx\progressbar\acp\progressbar_module',
					'modes' => ['config'],
				],
			]],
		];
	}
}
