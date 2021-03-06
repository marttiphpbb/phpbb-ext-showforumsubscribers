<?php
/**
* phpBB Extension - marttiphpbb showforumsubscribers
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showforumsubscribers\service;

use phpbb\db\driver\factory as db;
use marttiphpbb\showforumsubscribers\util\cnst;

class forum_subscribers
{
	protected $db;
	protected $forums_watch_table;
	protected $users_table;

	public function __construct(
		db $db,
		string $forums_watch_table,
		string $users_table
	)
	{
		$this->db = $db;
		$this->forums_watch_table = $forums_watch_table;
		$this->users_table = $users_table;
	}

	public function get_count(int $forum_id):int
	{
		$sql = 'select count(*)
			from ' . $this->forums_watch_table . '
			where forum_id = ' . $forum_id;

		$result = $this->db->sql_query($sql);
		$count = $this->db->sql_fetchfield('count(*)');
		$this->db->sql_freeresult($result);

		return $count;
	}

	public function get_string(int $forum_id):string
	{
		$users = [];

		$sql = 'select u.username, u.user_id,
			u.user_type, u.user_colour
			from ' . $this->users_table . ' u, ' . $this->forums_watch_table . ' w
			where w.forum_id = ' . $forum_id . '
				and w.user_id = u.user_id
			order by u.username_clean asc';
		$result = $this->db->sql_query($sql);
		$rowset = $this->db->sql_fetchrowset($result);
		$this->db->sql_freeresult($result);

		foreach ($rowset as $row)
		{
			$users[$row['user_id']] = get_username_string(($row['user_type'] <> USER_IGNORE) ? 'full' : 'no_profile', $row['user_id'], $row['username'], $row['user_colour']);
		}

		return implode(', ', $users);
	}
}
