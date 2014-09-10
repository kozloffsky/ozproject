<?php
/**
 * Created by PhpStorm.
 * User: miho
 * Date: 11.09.14
 * Time: 1:46
 */

namespace Oz\Project\Config;


interface SystemConfigurationServiceInterface {
    public function get($path);
    public function set($path, $value);
} 