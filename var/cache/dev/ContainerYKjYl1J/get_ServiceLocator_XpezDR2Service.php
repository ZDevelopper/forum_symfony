<?php

namespace ContainerYKjYl1J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XpezDR2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XpezDR2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XpezDR2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sujet' => ['privates', '.errored..service_locator.XpezDR2.App\\Entity\\Sujet', NULL, 'Cannot autowire service ".service_locator.XpezDR2": it references class "App\\Entity\\Sujet" but no such service exists.'],
        ], [
            'sujet' => 'App\\Entity\\Sujet',
        ]);
    }
}
