<?php

namespace ContainerH6xUDC1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminPropertyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\AdminPropertyController' shared autowired service.
     *
     * @return \App\Controller\Admin\AdminPropertyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/AdminPropertyController.php';

        $container->services['App\\Controller\\Admin\\AdminPropertyController'] = $instance = new \App\Controller\Admin\AdminPropertyController(($container->privates['App\\Repository\\PropertyRepository'] ?? $container->load('getPropertyRepositoryService')), ($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Admin\\AdminPropertyController', $container));

        return $instance;
    }
}
