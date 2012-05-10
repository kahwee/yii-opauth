Opauth for Yii Framework
========================================

What is Opauth for Yii Framework?

How to make it work
-------------------

Deploy it by placing it the whole opauth directory into `protected/modules/opauth`.

The module can be found in https://github.com/kahwee/yii-opauth/tree/master/protected/modules/opauth

And in your `./protected/config/main.php`, add `opauth` to begin:

```php
<?php
return array(
	...
	'modules' => array(
		'opauth' => array(
			'opauthParams' => array(
				'strategies' => array(
					'facebook' => array(
						'app_id' => 'YOUR_FACEBOOK_APP_ID',
						'app_secret' => 'YOUR_FACEBOOK_APP_SECRET',
					)
				),
			),
		),
	),
	...
);
```

Issues?
-------

If you have any issues, please highlight them in [yii-opauth's GitHub issues](https://github.com/kahwee/yii-opauth/issues).
