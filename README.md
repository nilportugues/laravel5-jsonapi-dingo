# Laravel 5 JSON API Mappings with Dingo


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

