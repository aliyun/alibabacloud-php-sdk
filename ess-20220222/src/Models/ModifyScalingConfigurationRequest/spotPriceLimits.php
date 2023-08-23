<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationRequest;

use AlibabaCloud\Tea\Model;

class spotPriceLimits extends Model
{
    /**
     * @description The instance type of the preemptible instance. This parameter takes effect only if you set SpotStrategy to SpotWithPriceLimit.
     *
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The price limit of the preemptible instance. This parameter takes effect only if you set SpotStrategy to SpotWithPriceLimit.
     *
     * @example 0.125
     *
     * @var float
     */
    public $priceLimit;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'priceLimit'   => 'PriceLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->priceLimit) {
            $res['PriceLimit'] = $this->priceLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spotPriceLimits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['PriceLimit'])) {
            $model->priceLimit = $map['PriceLimit'];
        }

        return $model;
    }
}
