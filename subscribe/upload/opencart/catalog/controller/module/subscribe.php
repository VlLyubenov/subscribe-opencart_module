<?php

namespace Opencart\Catalog\Controller\Extension\Opencart\Module;
/**
 * Class Subscribe
 *
 * @package Opencart\Catalog\Controller\Extension\Opencart\Module
 */
class Subscribe extends \Opencart\System\Engine\Controller {
    /**
     * Index
     *
     * @param array<string, mixed> $setting
     *
     * @return string
     */
    public function index(array $setting): string {
        $this->load->language('extension/opencart/module/subscribe');

        $data = array();

        return $this->load->view('extension/opencart/module/subscribe', $data);
	}


    public function addEmail() {

        $email = $_POST['email'];

        // if (empty($email)) {
        //     $json['error'] = 'Please fill in email address';
        // } else {
		// 	$this->load->model("extension/opencart/module/subscribe");
        //     $this->model_extension_opencart_module_subscribe->add($email);
        //     $json['success'] = 'Email address added';
        // }

		$this->load->model("extension/opencart/module/subscribe");
        $this->model_extension_opencart_module_subscribe->add($email);

        // $this->responce->addHeader('Content-Type: application/json');
        // $this->responce->setOutput(json_encode($json));

    }
}

