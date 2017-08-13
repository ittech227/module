<?php

namespace ittech227\module;

use ittech227\module\Factory\RouteDelegator;
use Zend\Expressive\Application;

class ConfigProvider
{
    function __invoke()
    {
        return [
            'dependencies' => [
                'delegators' => [
                    Application::class => [
                        RouteDelegator::class,
                    ],
                ],
            ],
        ];
    }
}