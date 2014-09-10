<?php
/**
 * Created by PhpStorm.
 * User: mikeoz
 * Date: 10.09.14
 * Time: 18:22
 */

namespace Oz\Project\Config;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class ModulesConfiguration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ozshop');

        $rootNode
            ->arrayNode('modules')
            ->end()
            ->end();

        return $treeBuilder;
    }
}
