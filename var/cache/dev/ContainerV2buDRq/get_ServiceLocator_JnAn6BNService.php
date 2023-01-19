<?php

namespace ContainerV2buDRq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JnAn6BNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jnAn6BN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jnAn6BN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AnnonceController::delete' => ['privates', '.service_locator.7XPcrkQ', 'get_ServiceLocator_7XPcrkQService', true],
            'App\\Controller\\AnnonceController::edit' => ['privates', '.service_locator.7XPcrkQ', 'get_ServiceLocator_7XPcrkQService', true],
            'App\\Controller\\AnnonceController::index' => ['privates', '.service_locator.UnVjGk7', 'get_ServiceLocator_UnVjGk7Service', true],
            'App\\Controller\\AnnonceController::new' => ['privates', '.service_locator.UnVjGk7', 'get_ServiceLocator_UnVjGk7Service', true],
            'App\\Controller\\AnnonceController::show' => ['privates', '.service_locator.2XW8uQ7', 'get_ServiceLocator_2XW8uQ7Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AnnonceController:delete' => ['privates', '.service_locator.7XPcrkQ', 'get_ServiceLocator_7XPcrkQService', true],
            'App\\Controller\\AnnonceController:edit' => ['privates', '.service_locator.7XPcrkQ', 'get_ServiceLocator_7XPcrkQService', true],
            'App\\Controller\\AnnonceController:index' => ['privates', '.service_locator.UnVjGk7', 'get_ServiceLocator_UnVjGk7Service', true],
            'App\\Controller\\AnnonceController:new' => ['privates', '.service_locator.UnVjGk7', 'get_ServiceLocator_UnVjGk7Service', true],
            'App\\Controller\\AnnonceController:show' => ['privates', '.service_locator.2XW8uQ7', 'get_ServiceLocator_2XW8uQ7Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AnnonceController::delete' => '?',
            'App\\Controller\\AnnonceController::edit' => '?',
            'App\\Controller\\AnnonceController::index' => '?',
            'App\\Controller\\AnnonceController::new' => '?',
            'App\\Controller\\AnnonceController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AnnonceController:delete' => '?',
            'App\\Controller\\AnnonceController:edit' => '?',
            'App\\Controller\\AnnonceController:index' => '?',
            'App\\Controller\\AnnonceController:new' => '?',
            'App\\Controller\\AnnonceController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}