# Laravel 5 JSON API Mappings with Dingo



[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nilportugues/laravel5-jsonapi-dingo/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nilportugues/laravel5-jsonapi-dingo/?branch=master) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/c4fb1b65-e649-464f-b78c-e5802743a78f/mini.png)](https://insight.sensiolabs.com/projects/c4fb1b65-e649-464f-b78c-e5802743a78f) 
[![Latest Stable Version](https://poser.pugx.org/nilportugues/laravel5-json-api-dingo/v/stable)](https://packagist.org/packages/nilportugues/laravel5-json-api-dingo) 
[![Total Downloads](https://poser.pugx.org/nilportugues/laravel5-json-api-dingo/downloads)](https://packagist.org/packages/nilportugues/laravel5-json-api-dingo) 
[![License](https://poser.pugx.org/nilportugues/laravel5-json-api-dingo/license)](https://packagist.org/packages/nilportugues/laravel5-json-api-dingo) 
[![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](https://paypal.me/nilportugues)


This package makes [Laravel 5 JSON API Server Package](https://github.com/nilportugues/laravel5-jsonapi)  and [Dingo](https://github.com/dingo/api) play well together by using Dingo's API routing system instead of Laravel's.

By doing this you get the automatic formatting of the JSON API mappings and the versioning and security offered by Dingo.


## Features 

- Package provides a full implementation of the **[JSON API](https://github.com/json-api/json-api)** specification, and is **featured** on the official site!
- A **JSON API Transformer** that will allow you to convert any mapped object into a valid JSON API resource.
- Controller boilerplate to write a fully compiliant **JSON API Server** using your **exisiting Eloquent Models**.

## Installation

Use [Composer](https://getcomposer.org) to install the package:

```
$ composer require nilportugues/laravel5-json-api-dingo
```

## Configuration

Open up `config/app.php` and add the following line under `providers` array:

```php
'providers' => [
    //...
    NilPortugues\Laravel5\JsonApiDingo\Laravel5JsonApiDingoServiceProvider::class,
],
```


## Contribute

Contributions to the package are always welcome!

* Report any bugs or issues you find on the [issue tracker](https://github.com/nilportugues/laravel5-jsonapi-dingo/issues/new).
* You can grab the source code at the package's [Git repository](https://github.com/nilportugues/laravel5-jsonapi-dingo).


<br>
## Support

Get in touch with me using one of the following means:

 - Emailing me at <contact@nilportugues.com>
 - Opening an [Issue](https://github.com/nilportugues/laravel5-jsonapi-dingo/issues/new)

<br>
## Authors

* [Nil Portugués Calderó](http://nilportugues.com)
* [The Community Contributors](https://github.com/nilportugues/laravel5-jsonapi-dingo/graphs/contributors)


## License
The code base is licensed under the [MIT license](LICENSE).
