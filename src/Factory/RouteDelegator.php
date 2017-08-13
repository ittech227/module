<?php

namespace ittech227\module\Factory;

use Interop\Container\ContainerInterface;
use ittech227\module\Middleware\IndexAction;
use Zend\Expressive\Application;

class RouteDelegator
{
    function __invoke(ContainerInterface $container, $serviceName, callable $callback)
    {
        /** @var $app Application */
        $app = $callback();
        // Setup routes:
        $app->get('/module', IndexAction::class, 'module-index');

        return $app;
    }
}