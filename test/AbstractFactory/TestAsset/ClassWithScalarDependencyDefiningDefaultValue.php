<?php

/**
 * @see       https://github.com/laminasframwork/laminas-servicemanager for the canonical source repository
 * @copyright https://github.com/laminasframwork/laminas-servicemanager/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminasframwork/laminas-servicemanager/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\ServiceManager\AbstractFactory\TestAsset;

class ClassWithScalarDependencyDefiningDefaultValue
{
    public $foo;

    /**
     * @param string $foo
     */
    public function __construct($foo = 'bar')
    {
        $this->foo = $foo;
    }
}
