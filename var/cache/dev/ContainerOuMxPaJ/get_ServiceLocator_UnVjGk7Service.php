<?php

namespace ContainerOuMxPaJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UnVjGk7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UnVjGk7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UnVjGk7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annonceRepository' => ['privates', 'App\\Repository\\AnnonceRepository', 'getAnnonceRepositoryService', true],
        ], [
            'annonceRepository' => 'App\\Repository\\AnnonceRepository',
        ]);
    }
}
