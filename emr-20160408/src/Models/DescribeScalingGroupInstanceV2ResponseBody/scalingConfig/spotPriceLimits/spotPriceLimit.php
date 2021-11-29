<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingConfig\spotPriceLimits;

use AlibabaCloud\Tea\Model;

class spotPriceLimit extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
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
     * @return spotPriceLimit
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
