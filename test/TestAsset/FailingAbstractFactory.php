<?php

/**
 * @see       https://github.com/laminasframwork/laminas-servicemanager for the canonical source repository
 * @copyright https://github.com/laminasframwork/laminas-servicemanager/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminasframwork/laminas-servicemanager/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\ServiceManager\TestAsset;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\AbstractFactoryInterface;

class FailingAbstractFactory implements AbstractFactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function canCreate(ContainerInterface $container, $name)
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function __invoke(ContainerInterface $container, $className, array $options = null)
    {
    }
}
