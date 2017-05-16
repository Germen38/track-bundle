<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Germen38\Bundle\TrackBundle;

use Germen38\Bundle\TrackBundle\DependencyInjection\IntegratedTrackExtension;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Jan Sanne Mulder <jansanne@e-active.nl>
 */
class IntegratedTrackBundle extends Bundle
{
    /**
     * @return IntegratedTrackExtension
     */
    public function getContainerExtension()
    {
        return new IntegratedTrackExtension();
    }
}