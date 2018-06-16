<?php
/**
* phpBB Extension - marttiphpbb showforumsubscribers
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showforumsubscribers\event;

use phpbb\event\data as event;
use phpbb\config\db as config;
use phpbb\template\twig\twig as template;
use phpbb\language\language;
use marttiphpbb\showforumsubscribers\service\forum_subscribers;
use marttiphpbb\showforumsubscribers\util\cnst;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $config;
	protected $template;
	protected $language;
	protected $forum_subscribers;

	public function __construct(
			config $config,
			template $template,
			language $language,
			forum_subscribers $forum_subscribers
	)
	{
		$this->config = $config;
		$this->template = $template;
		$this->language = $language;
		$this->forum_subscribers = $forum_subscribers;
	}

	static public function getSubscribedEvents()
	{
		return [
			'core.viewforum_get_topic_data'
				=> 'core_viewforum_get_topic_data',
		];
	}

	public function core_viewforum_get_topic_data(event $event)
	{
		$this->language->add_lang('common', cnst::FOLDER);
		$forum_id = $event['forum_id'];

		$count = $this->forum_subscribers->get_count($forum_id);
		$treshold = $this->config[cnst::ID . '_treshold'];

		if (!$count || $count > $treshold)
		{
			$list = $this->language->lang(cnst::L . '_NO_LIST', $count);
		}
		else
		{
			$list = $this->forum_subscribers->get_string($forum_id);
			$list = $this->language->lang(cnst::L . '_LIST', $count, $list);
		}

		$this->template->assign_vars([
			'MARTTIPHPBB_SHOWFORUMSUBSCRIBERS_LIST' => $list,
		]);
	}
}
