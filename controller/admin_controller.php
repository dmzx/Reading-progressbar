<?php
/**
*
* @package phpBB Extension - Reading progressbar
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\progressbar\controller;

use phpbb\config\config;
use phpbb\template\template;
use phpbb\log\log_interface;
use phpbb\user;
use phpbb\request\request_interface;

class admin_controller
{
	/** @var config */
	protected $config;

	/** @var template */
	protected $template;

	/** @var log_interface */
	protected $log;

	/** @var user */
	protected $user;

	/** @var request_interface */
	protected $request;

	/** @var string */
	protected $u_action;

	/**
	* Constructor
	*
	* @param config					$config
	* @param template				$template
	* @param log_interface			$log
	* @param user					$user
	* @param request_interface		$request
	*/
	public function __construct(
		config $config,
		template $template,
		log_interface $log,
		user $user,
		request_interface $request
	)
	{
		$this->config 			= $config;
		$this->template 		= $template;
		$this->log 				= $log;
		$this->user 			= $user;
		$this->request 			= $request;
	}

	public function display_options()
	{
		add_form_key('acp_progressbar_config');

		// Is the form being submitted to us?
		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('acp_progressbar_config'))
			{
				trigger_error('FORM_INVALID');
			}

			// Set the options the user configured
			$this->set_options();

			// Add option settings change action to the admin log
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_PROGRESSBAR_SAVED');

			trigger_error($this->user->lang['ACP_PROGRESSBAR_CONFIG_SAVED'] . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			'ACP_PROGRESSBAR_VERSION'		=> $this->config['progressbar_version'],
			'ACP_PROGRESSBAR_ENABLE'		=> $this->config['progressbar_enable'],
			'PROGRESSBAR_HEIGHT'			=> $this->config['progressbar_height'],
			'PROGRESSBAR_LOCATION'			=> $this->config['progressbar_location'],
			'PROGRESSBAR_COLOUR_1'			=> $this->config['progressbar_colour_1'],
			'PROGRESSBAR_COLOUR_2'			=> $this->config['progressbar_colour_2'],
			'U_ACTION'						=> $this->u_action,
		));
	}

	protected function set_options()
	{
		$this->config->set('progressbar_enable', $this->request->variable('progressbar_enable', 0));
		$this->config->set('progressbar_height', $this->request->variable('progressbar_height', '', true));
		$this->config->set('progressbar_location', $this->request->variable('progressbar_location', 0));
		$this->config->set('progressbar_colour_1', $this->request->variable('progressbar_colour_1', '', true));
		$this->config->set('progressbar_colour_2', $this->request->variable('progressbar_colour_2', '', true));
	}

	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
