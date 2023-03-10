<?php

namespace ContainerH6xUDC1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PropertyController' shared autowired service.
     *
     * @return \App\Controller\PropertyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PropertyController.php';

        $container->services['App\\Controller\\PropertyController'] = $instance = new \App\Controller\PropertyController(($container->privates['App\\Repository\\PropertyRepository'] ?? $container->load('getPropertyRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\PropertyController', $container));

        return $instance;
    }
}
