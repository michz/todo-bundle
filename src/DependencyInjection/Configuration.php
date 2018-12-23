<?php
declare(strict_types=1);

/*
 * Copyright 2018 by Michael Zapf.
 * Licensed under MIT. See file /LICENSE.
 */

namespace mztx\TodoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('todo');
        $rootNode
            ->children()
                ->arrayNode('paths')
                    ->scalarPrototype()
                    ->end()
                ->end()
                ->arrayNode('extensions')
                    ->scalarPrototype()
                    ->end()
                    ->defaultValue(['php', 'md', 'txt', 'htm', 'html', 'twig', 'yml', 'yaml', 'txt'])
                ->end()
            ->end();
        return $treeBuilder;
    }
}
