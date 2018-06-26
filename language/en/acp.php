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

	'ACP_MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_SETTINGS_SAVED'
		=> 'The settings have been saved successfully!',
	'ACP_MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_SETTINGS_EXPLAIN'
		=> 'In case of a performance issue it might be useful to
		limit the visualisation of the forum subscribers.',
	'ACP_MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_THRESHOLD'
		=> 'Threshold number',
	'ACP_MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_THRESHOLD_EXPLAIN'
		=> 'When this number of forum subscribers is exceeded, only the
		total count number is shown and not the usernames.',
	'ACP_MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_LATEST'
		=> 'Show latest forum subscribers up to',
	'ACP_MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_LATEST_EXPLAIN'
		=> 'This number of latest forum
		subscribers are shown in order of subscription (latest last).
		When this setting is zero or negative, all forum subscriber
		usernames are shown alphabetically. In both cases,
		the threshold setting overrules. When the threshold is exceeded,
		only the total count number of subscribers is shown.',
]);
