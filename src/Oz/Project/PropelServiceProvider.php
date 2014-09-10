<?php
/**
 * Created by PhpStorm.
 * User: mikeoz
 * Date: 10.09.14
 * Time: 21:00
 */

namespace Oz\Project;


use Silex\Application as App;
use Silex\ServiceProviderInterface;

class PropelServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Application $app An Application instance
     */
    public function register(App $app)
    {
        $root = $app[Config::ROOT];
        require_once $root . '/config.php';
    }

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(App $app)
    {
        // TODO: Implement boot() method.
    }


} 