yii2 devinotelecom viber
========================
Send messages (text, images, buttons) on viber client

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist budko1989/yii2-devino-viber "*"
```

or add

```
"budko1989/yii2-devino-viber": "*"
```

to the require section of your `composer.json` file.

Run migration

```
./yii migrate/up --migrationPath=@vendor/yii2-devino-viber/migrations
```

Configuration
-------------

Add the following in your config:

```php
<?php
...
    'components' => [
        'viber' => [
            'class' => 'budko1989\devinoviber\DevinoViber',
            'sender' => 'your_sender',
            'login' => 'your_login',
            'password' => 'your_password',
            'debug' => false,
        ],
        ...
    ],
...
```

Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php Yii::$app->viber->sendText('test', '+380XXXXXXXXX'); ?>```

Once the extension is installed, simply use it in your code by  :

```php
<?php Yii::$app->viber->sendImage('test', '+380XXXXXXXXX'); ?>```

Once the extension is installed, simply use it in your code by  :

```php
<?php Yii::$app->viber->sendButton('test', '+380XXXXXXXXX'); ?>```