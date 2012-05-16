Opauth for Yii Framework
========================================

What is Opauth for Yii Framework?
-------------------

Opauth for Yii Framework is a wrapper for [Opauth](https://github.com/uzyn/opauth) by U-Zyn. The bundled Opauth may not be the latest, please grab the latest from the [Opauth repository](https://github.com/uzyn/opauth) and place it in `vendors`.

Opauth provides a standardized way to interface with 3rd-party authentication providers. Unlike many current authentication frameworks, Opauth does not deal with database, so developers are not forced to adhere to predetermined database schema.

You can include strategies from the [Opauth strategy list](https://github.com/uzyn/opauth/wiki/List-of-strategies).

How to make it work
-------------------

Deploy it by placing it the whole opauth directory into `protected/modules/opauth`.

And in your `./protected/config/main.php`, add `opauth` to begin:

```php
<?php
return array(
	...
	'modules' => array(
		'opauth' => array(
			'opauthParams' => array(
				'Security.salt' => 'LDFmiilYf8Fyw5W10rx4W1KsVrieQCnpBzzpTBWA5vJidQKDx8pMJbmw28R1C4m',
				'Strategy' => array(
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
