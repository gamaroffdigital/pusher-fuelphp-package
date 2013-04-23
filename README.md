# Pusher FuelPHP Package

A wrapper for the Pusher PHP Library

#How to Install

Clone it into fuel/packages:

```sh
git clone --recursive git@github.com:gamaroffdigital/pusher-fuelphp-package.git
```

Load it in config.php
```php
'always_load' => array(

	'packages' => array(

		'pusher'

	)

)
```

Create a config file in fuel/app/config called pusher.php to store the app id, key and secret
```php
return array(
	'app_id'	=> APP_ID,
	'app_key'	=> APP_KEY,
	'app_secret'=> APP_SECRET
);
```

Load it in config.php
```php
'always_load' => array(

	'config' => array(

		'pusher'

	)

)
```

#How to Use
```php
Pusher\Client::trigger()
```