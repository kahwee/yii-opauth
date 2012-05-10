<?php

class CallbackController extends Controller {

	public function actionIndex() {
		var_dump(Yii::app()->user);
	}

}
