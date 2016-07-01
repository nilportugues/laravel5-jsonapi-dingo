<?php

namespace NilPortugues\Laravel5\JsonApiDingo;

use NilPortugues\Laravel5\JsonApi\JsonApiSerializer;
use NilPortugues\Laravel5\JsonApi\Laravel5JsonApiServiceProvider;

class Laravel5JsonApiDingoServiceProvider extends Laravel5JsonApiServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.self::PATH, 'jsonapi');

        $provider = new DingoProvider();

        $this->app->singleton(JsonApiSerializer::class, $provider->provider());
    }
}
