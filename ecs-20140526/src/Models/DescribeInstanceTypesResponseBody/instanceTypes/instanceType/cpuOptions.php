<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\cpuOptions\supportedTopologyTypes;

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
     * @var supportedTopologyTypes
     */
    public $supportedTopologyTypes;

    /**
     * @var int
     */
    public $threadsPerCore;
    protected $_name = [
        'core' => 'Core',
        'coreFactor' => 'CoreFactor',
        'hyperThreadingAdjustable' => 'HyperThreadingAdjustable',
        'supportedTopologyTypes' => 'SupportedTopologyTypes',
        'threadsPerCore' => 'ThreadsPerCore',
    ];

    public function validate()
    {
        if (null !== $this->supportedTopologyTypes) {
            $this->supportedTopologyTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SupportedTopologyTypes'] = null !== $this->supportedTopologyTypes ? $this->supportedTopologyTypes->toArray($noStream) : $this->supportedTopologyTypes;
        }

        if (null !== $this->threadsPerCore) {
            $res['ThreadsPerCore'] = $this->threadsPerCore;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
