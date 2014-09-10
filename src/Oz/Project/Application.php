<?php
/**
 * Created by PhpStorm.
 * User: mikeoz
 * Date: 10.09.14
 * Time: 17:01
 */

namespace Oz\Project;

use Silex\Provider\ServiceControllerServiceProvider;
use Symfony\Component\Config\FileLocator;

class Application extends \Silex\Application
{


    public function __construct(array $values = array())
    {
        parent::__construct($values);
        $this->register(new ServiceControllerServiceProvider());

        $locator = new FileLocator(array($this[Config::ROOT]));
        var_dump($locator->locate('modules.yml', null));
    }
}