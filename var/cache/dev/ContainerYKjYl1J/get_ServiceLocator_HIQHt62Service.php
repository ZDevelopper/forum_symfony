<?php

namespace ContainerYKjYl1J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HIQHt62Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HIQHt62' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HIQHt62'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sujetRepository' => ['privates', 'App\\Repository\\SujetRepository', 'getSujetRepositoryService', true],
        ], [
            'sujetRepository' => 'App\\Repository\\SujetRepository',
        ]);
    }
}