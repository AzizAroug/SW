<?php

namespace Container4fpqx2s;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MbNPG0NService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MbNPG0N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MbNPG0N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'JWTManager' => ['services', 'lexik_jwt_authentication.jwt_manager', 'getLexikJwtAuthentication_JwtManagerService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', true],
        ], [
            'JWTManager' => '?',
            'doctrine' => '?',
        ]);
    }
}
