<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class CostOptimizedConfig extends Model
{
    /**
     * @description 按量实例个数的最小值。节点组所需要按量实例个数的最小值，取值范围：0~1000。当按量实例个数少于该值时，将优先创建按量实例。
     *
     * This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @description 节点组满足最小按量实例OnDemandBaseCapacity要求后，超出的实例中按量实例应占的比例，取值范围：0～100。
     *
     * This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @description 指定可用实例规格的个数，伸缩组将按成本最低的多个规格均衡创建抢占式实例。取值范围：0~10。
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $spotInstancePools;
    protected $_name = [
        'onDemandBaseCapacity'                => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'spotInstancePools'                   => 'SpotInstancePools',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CostOptimizedConfig
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

        return $model;
    }
}
