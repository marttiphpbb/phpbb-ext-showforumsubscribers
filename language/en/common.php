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

	'MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_NO_LIST' => [
		0 => 'No users subscribed to this forum',
		1 => '%1$s user subscribed to this forum',
		2 => '%1$s users subscribed to this forum',
	],
	'MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_LIST' => [
		1 => '%1$s user subscribed to this forum: %2$s',
		2 => '%1$s users subscribed to this forum: %2$s',
	],
	'MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_FORUM_SUBSCRIBERS'
		=> 'Forum Subscribers',
]);
