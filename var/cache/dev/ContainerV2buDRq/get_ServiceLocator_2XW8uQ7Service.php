<?php

namespace ContainerV2buDRq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2XW8uQ7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2XW8uQ7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2XW8uQ7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annonce' => ['privates', '.errored..service_locator.2XW8uQ7.App\\Entity\\Annonce', NULL, 'Cannot autowire service ".service_locator.2XW8uQ7": it needs an instance of "App\\Entity\\Annonce" but this type has been excluded in "config/services.yaml".'],
        ], [
            'annonce' => 'App\\Entity\\Annonce',
        ]);
    }
}