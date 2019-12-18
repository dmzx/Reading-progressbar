<?php
/**
*
* @package phpBB Extension - Reading progressbar
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\progressbar\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\template\template;
use phpbb\config\config;

class listener implements EventSubscriberInterface
{
	/** @var template */
	protected $template;

	/** @var config */
	protected $config;

	/**
	 * Constructor
	 *
	 * @param template			$template
	 * @param config			$config
	 */
	public function __construct(
		template $template,
		config $config
	)
	{
		$this->template = $template;
		$this->config 	= $config;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header_after'	=> 'add_page_header_link',
		);
	}

	public function add_page_header_link($event)
	{
		$location = ($this->config['progressbar_location'] == 1) ? ($this->config['progressbar_location'] == 0) : 'top' ;

		$this->template->assign_vars([
			'PROGRESSBAR_ENABLE'	=> $this->config['progressbar_enable'],
			'PROGRESSBAR'			=> '<progress class="readingProgressbar" data-height="'. $this->config['progressbar_height'] . '"	data-position="' .	$location . '" data-foreground="#'. $this->config['progressbar_colour_1'] . '" data-background="#' . $this->config['progressbar_colour_2'] . '" value="0"></progress>',
		]);
	}
}
