<?php
namespace Opencart\Admin\Model\Extension\Opencart\Module;
/**
 * Class Subscribe
 *
 * @package Opencart\Admin\Model\Extension\Opencart\Module
 */
class Subscribe extends \Opencart\System\Engine\Model {
	/**
	 * Install
	 *
	 * @return void
	 */
	public function install(): void {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "subscribe` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `email` varchar(300) NOT NULL,
		  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
		  PRIMARY KEY (`id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");
	}

	/**
	 * Uninstall
	 *
	 * @return void
	 */
	public function uninstall(): void {
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "subscribe`");
	}


}
