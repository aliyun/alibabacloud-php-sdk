<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ScalingGroupConfig\multiAvailablePolicy;

use AlibabaCloud\Tea\Model;

class policyParam extends Model
{
    /**
     * @description 按需实例最小个数。
     *
     * @example 1
     *
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @description 按需实例百分比。
     *
     * @example 10
     *
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @description 抢占实例类型池规模。
     *
     * @example 10
     *
     * @var int
     */
    public $spotInstancePools;

    /**
     * @description 是否使用按量补偿。
     *
     * @example false
     *
     * @var bool
     */
    public $spotInstanceRemedy;
    protected $_name = [
        'onDemandBaseCapacity'                => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'spotInstancePools'                   => 'SpotInstancePools',
        'spotInstanceRemedy'                  => 'SpotInstanceRemedy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onDemandBaseCapacity) {
            $res['OnDemandBaseCapacity'] = $this->onDemandBaseCapacity;
        }
        if (null !== $this->onDemandPercentageAboveBaseCapacity) {
            $res['OnDemandPercentageAboveBaseCapacity'] = $this->onDemandPercentageAboveBaseCapacity;
        }
        if (null !== $this->spotInstancePools) {
            $res['SpotInstancePools'] = $this->spotInstancePools;
        }
        if (null !== $this->spotInstanceRemedy) {
            $res['SpotInstanceRemedy'] = $this->spotInstanceRemedy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnDemandBaseCapacity'])) {
            $model->onDemandBaseCapacity = $map['OnDemandBaseCapacity'];
        }
        if (isset($map['OnDemandPercentageAboveBaseCapacity'])) {
            $model->onDemandPercentageAboveBaseCapacity = $map['OnDemandPercentageAboveBaseCapacity'];
        }
        if (isset($map['SpotInstancePools'])) {
            $model->spotInstancePools = $map['SpotInstancePools'];
        }
        if (isset($map['SpotInstanceRemedy'])) {
            $model->spotInstanceRemedy = $map['SpotInstanceRemedy'];
        }

        return $model;
    }
}
