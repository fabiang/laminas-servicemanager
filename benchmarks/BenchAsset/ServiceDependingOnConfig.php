<?php

/**
 * @see       https://github.com/laminasframwork/laminas-servicemanager for the canonical source repository
 * @copyright https://github.com/laminasframwork/laminas-servicemanager/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminasframwork/laminas-servicemanager/blob/master/LICENSE.md New BSD License
 */

namespace LaminasBench\ServiceManager\BenchAsset;

class ServiceDependingOnConfig
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }
}
