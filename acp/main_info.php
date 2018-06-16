<?php
/**
* phpBB Extension - marttiphpbb showforumsubscribers
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showforumsubscribers\acp;

use marttiphpbb\showforumsubscribers\util\cnst;

class main_info
{
	function module()
	{
		return [
			'filename'	=> '\marttiphpbb\showforumsubscribers\acp\main_module',
			'title'		=> cnst::L_ACP,
			'modes'		=> [
				'settings'	=> [
					'title' => cnst::L_ACP . '_SETTINGS',
					'auth' => 'ext_marttiphpbb/showforumsubscribers && acl_a_board',
					'cat' => [
						cnst::L_ACP,
					],
				],
			],
		];
	}
}
