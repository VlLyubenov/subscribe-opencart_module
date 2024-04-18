<?php

namespace Opencart\Catalog\Model\Extension\Opencart\Module;

use Opencart\System\Engine\Controller;
use Opencart\System\Engine\Model;

/**
 * Class Subscribe
 *
 * @package Opencart\Catalog\Model\Extension\Opencart\Module
 */
class Subscribe extends Controller {

	// INSERT INTO oc_subscribe(`email`) VALUES('whatever@mail.bg');

    public function add($email) {
		$this->db->query("INSERT INTO " .DB_PREFIX. "subscribe(`email`) VALUES('" .$this->db->escape($email)."')");
    }

}
