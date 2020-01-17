<?php
/**
*
* @package phpBB Extension - Reading progressbar
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\progressbar\migrations;

class progressbar_v101 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return ['\dmzx\progressbar\migrations\progressbar_install'];
	}

	public function update_data()
	{
		return [
			['config.update', ['progressbar_version', '1.0.1']],
		];
	}
}
