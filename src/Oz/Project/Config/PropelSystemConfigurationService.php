<?php
/**
 * Created by PhpStorm.
 * User: miho
 * Date: 11.09.14
 * Time: 1:47
 */

namespace Oz\Project\Config;


use Oz\Project\Domain\ConfigEntityQuery;

class PropelSystemConfigurationService implements SystemConfigurationServiceInterface
{

    public function get($path)
    {
        $entity = ConfigEntityQuery::create()->findOneByPath($path);
        if(!$entity){
            return null;
        }
        return unserialize($entity->getValue());
    }

    public function set($path, $value)
    {
        $entity = ConfigEntityQuery::create()
            ->filterByPath($path)
            ->findOneOrCreate();
        $entity->setValue(serialize($value));
        $entity->save();
    }
} 