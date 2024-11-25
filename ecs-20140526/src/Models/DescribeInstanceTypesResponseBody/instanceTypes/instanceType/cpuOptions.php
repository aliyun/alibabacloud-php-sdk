<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\cpuOptions\supportedTopologyTypes;
use AlibabaCloud\Tea\Model;

class cpuOptions extends Model
{
    /**
     * @var int
     */
    public $core;

    /**
     * @var int
     */
    public $coreFactor;

    /**
     * @var bool
     */
    public $hyperThreadingAdjustable;

    /**
     * @description The CPU topology types of the instance type.
     *
     * @var supportedTopologyTypes
     */
    public $supportedTopologyTypes;

    /**
     * @var int
     */
    public $threadsPerCore;
    protected $_name = [
        'core'                     => 'Core',
        'coreFactor'               => 'CoreFactor',
        'hyperThreadingAdjustable' => 'HyperThreadingAdjustable',
        'supportedTopologyTypes'   => 'SupportedTopologyTypes',
        'threadsPerCore'           => 'ThreadsPerCore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }
        if (null !== $this->coreFactor) {
            $res['CoreFactor'] = $this->coreFactor;
        }
        if (null !== $this->hyperThreadingAdjustable) {
            $res['HyperThreadingAdjustable'] = $this->hyperThreadingAdjustable;
        }
        if (null !== $this->supportedTopologyTypes) {
            $res['SupportedTopologyTypes'] = null !== $this->supportedTopologyTypes ? $this->supportedTopologyTypes->toMap() : null;
        }
        if (null !== $this->threadsPerCore) {
            $res['ThreadsPerCore'] = $this->threadsPerCore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }
        if (isset($map['CoreFactor'])) {
            $model->coreFactor = $map['CoreFactor'];
        }
        if (isset($map['HyperThreadingAdjustable'])) {
            $model->hyperThreadingAdjustable = $map['HyperThreadingAdjustable'];
        }
        if (isset($map['SupportedTopologyTypes'])) {
            $model->supportedTopologyTypes = supportedTopologyTypes::fromMap($map['SupportedTopologyTypes']);
        }
        if (isset($map['ThreadsPerCore'])) {
            $model->threadsPerCore = $map['ThreadsPerCore'];
        }

        return $model;
    }
}
