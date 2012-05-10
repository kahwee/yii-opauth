<?php

class OpauthModule extends CWebModule {

	public $securitySalt;
	public $strategies;

	public function init() {
		$this->setImport(array(
			'opauth.vendors.Opauth.Opauth',
		));
		$path = Yii::app()->createUrl($this->id) . '/';
		$opauth = new Opauth(array(
			'Security.salt' => $this->securitySalt,
			'path' => $path,
			'strategies' => $this->strategies,
		));
	}

	public function beforeControllerAction($controller, $action) {
		if (parent::beforeControllerAction($controller, $action)) {
			return true;
		}
		else
			return false;
	}

}
