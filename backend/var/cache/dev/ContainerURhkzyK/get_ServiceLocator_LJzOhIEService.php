<?php

namespace ContainerURhkzyK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LJzOhIEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lJzOhIE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lJzOhIE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', true],
            'notifier' => ['privates', 'notifier', 'getNotifierService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'doctrine' => '?',
            'notifier' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}