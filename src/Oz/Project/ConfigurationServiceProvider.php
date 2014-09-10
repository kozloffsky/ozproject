<?php
/**
 * Created by PhpStorm.
 * User: mikeoz
 * Date: 10.09.14
 * Time: 18:20
 */

namespace Oz\Project;


use Oz\Project\Config\ModulesConfiguration;
use Silex\Application;
use Silex\ServiceProviderInterface;
use Symfony\Component\Config\FileLocator;

/**
 * Class ConfigurationServiceProvider
 * Register config loaders and validators and process configuration at runtime
 * @package Oz\Project
 */
class ConfigurationServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Application $app An Application instance
     */
    public function register(Application $app)
    {
        $app[Config::FILE_LOCATOR] = $app->share(
            function () use ($app) {
                return new FileLocator(array($app[Config::ROOT]));
            }
        );

        $app[Config::MODULES_CONFIGURATION] = $app->share(
            function () {
                return new ModulesConfiguration();
            }
        );
    }

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(Application $app)
    {

    }

} 