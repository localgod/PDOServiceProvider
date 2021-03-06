[![Build Status](https://secure.travis-ci.org/localgod/PDOServiceProvider.png?branch=master)](http://travis-ci.org/localgod/PDOServiceProvider)
[![Latest Stable Version](https://poser.pugx.org/localgod/pdo-service-provider/v/stable.png)](https://packagist.org/packages/localgod/pdo-service-provider)
[![Total Downloads](https://poser.pugx.org/localgod/pdo-service-provider/downloads.png)](https://packagist.org/packages/localgod/pdo-service-provider)
[![Project Status](http://stillmaintained.com/localgod/PDOServiceProvider.png)](http://stillmaintained.com/localgod/PDOServiceProvider)
[![Dependency Status](https://www.versioneye.com/user/projects/554c76c15d47f2511d000171/badge.svg?style=flat)](https://www.versioneye.com/user/projects/554c76c15d47f2511d000171)

# PDOServiceProvider

## Summary
PDOServiceProvider is a service provider for Silex (http://silex.sensiolabs.org/)

It will allow you to access a pdo instance in your application.

## Requirements

PDOServiceProvider requires php version 5.3.3 or higher.

## Installation
Just add the following line to your required section in your composer.json file:

```json
"require" : {
	"localgod/pdo-service-provider" : "1.0.0"
}
```

and add these line in your application:

```php
<?php
use PDOException;
use Localgod\Silex\PDOServiceProvider;

try {
    $app->register(new PDOServiceProvider(), array(
    'pdo.connection' => array(
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => 3306,
        'name' => 'name',
        'user' => 'username',
        'pass' => 'password'
    )));
} catch (PDOException $e) {
    die($e->getMessage());
}
?>
```
