<?php
/**
* phpBB Extension - marttiphpbb showforumsubscribers
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showforumsubscribers\migrations;

use phpbb\db\migration\migration;
use marttiphpbb\showforumsubscribers\util\cnst;

class mgr_3 extends migration
{
	static public function depends_on()
	{
		return [
			'\marttiphpbb\showforumsubscribers\migrations\mgr_2',
		];
	}

	public function update_data()
	{
		return [
			['config.remove', [cnst::ID . '_treshold']],
		];
	}
}
