<?php
/**
 * Created by PhpStorm.
 * User: mikeoz
 * Date: 10.09.14
 * Time: 17:01
 */

namespace Oz\Project;

use Silex\Provider\ServiceControllerServiceProvider;

class Application extends \Silex\Application
{


    public function __construct(array $values = array())
    {
        parent::__construct($values);
        $this->register(new ServiceControllerServiceProvider());

    }
}