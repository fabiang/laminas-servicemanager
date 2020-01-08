<?php

/**
 * @see       https://github.com/laminasframwork/laminas-servicemanager for the canonical source repository
 * @copyright https://github.com/laminasframwork/laminas-servicemanager/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminasframwork/laminas-servicemanager/blob/master/LICENSE.md New BSD License
 */

namespace LaminasBench\ServiceManager\BenchAsset;

class ServiceWithDependency
{
    /**
     * @var Dependency
     */
    private $dependency;

    /**
     * @param Dependency $dependency
     */
    public function __construct(Dependency $dependency)
    {
        $this->dependency = $dependency;
    }
}
