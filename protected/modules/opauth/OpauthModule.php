<?php

class OpauthModule extends CWebModule {

	public $securitySalt;
	public $securityIteration = 300;
	public $securityTimeout = '2 minutes';
	public $strategies;
	public $debug;

	public function init() {
		$this->setImport(array(
			'opauth.vendors.Opauth.Opauth',
		));
		if (is_null($this->debug)) {
			if (defined('YII_DEBUG')) {
				$this->debug = true;
			}
		}
		$path = Yii::app()->createUrl($this->id) . '/';
		if ($_SERVER['REQUEST_URI'] != $path . 'callback') {
			$opauth = new Opauth(array(
				'Security.salt' => $this->securitySalt,
				'Security.iteration' => $this->securityIteration,
				'Security.timeout' => $this->securityTimeout,
				'debug' => $this->debug,
				'path' => $path,
				'callback_uri' => '{path}callback',
				'callback_transport' => 'post',
				'strategies' => $this->strategies,
			));
		}
	}

	public function beforeControllerAction($controller, $action) {
		if (parent::beforeControllerAction($controller, $action)) {
			return true;
		}
		else
			return false;
	}

}
