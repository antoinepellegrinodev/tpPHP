<?php

namespace ContainerV2buDRq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_ComponentFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.component_factory' shared service.
     *
     * @return \Symfony\UX\TwigComponent\ComponentFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/ComponentFactory.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['ux.twig_component.component_factory'])) {
            return $container->privates['ux.twig_component.component_factory'];
        }

        return $container->privates['ux.twig_component.component_factory'] = new \Symfony\UX\TwigComponent\ComponentFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'list_annonce' => [false, 'App\\Twig\\Components\\ListAnnonceComponent', 'getListAnnonceComponentService', true],
        ], [
            'list_annonce' => 'App\\Twig\\Components\\ListAnnonceComponent',
        ]), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), $a, ['list_annonce' => ['key' => 'list_annonce', 'expose_public_props' => true, 'attributes_var' => 'attributes', 'service_id' => 'App\\Twig\\Components\\ListAnnonceComponent', 'class' => 'App\\Twig\\Components\\ListAnnonceComponent', 'template' => 'components/list_annonce.html.twig']]);
    }
}