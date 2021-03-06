<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Germen38\Bundle\TrackBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Extension for loading configuration
 *
 * @author Jan Sanne Mulder <jansanne@e-active.nl>
 */
class IntegratedTrackExtension extends Extension implements PrependExtensionInterface
{
    /**
     * Load the configuration
     *
     * @param array $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

        $loader->load('controllers.xml');
        $loader->load('routing.xml');

    }

    public function prepend(ContainerBuilder $container)
    {
        // TODO: Implement prepend() method.
    }


}
