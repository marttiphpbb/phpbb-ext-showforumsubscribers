<?php

/**
* phpBB Extension - marttiphpbb showforumsubscribers
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [

	'ACP_MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_SETTINGS_SAVED'	=> 'The settings have been saved successfully!',
	'ACP_MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_TRESHOLD'			=> 'Treshold number',
	'ACP_MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_TRESHOLD_EXPLAIN'	=>
		'Above this number of forum subscribers, only the
		number is shown and not the usernames.',
]);
