<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\scalingGroup;

use AlibabaCloud\Tea\Model;

class spotPriceLimit extends Model
{
    /**
     * @description 抢占实例规格。
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 抢占实例单价。
     *
     * @var string
     */
    public $priceLimit;
    protected $_name = [
        'instanceType' => 'instance_type',
        'priceLimit'   => 'price_limit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['instance_type'] = $this->instanceType;
        }
        if (null !== $this->priceLimit) {
            $res['price_limit'] = $this->priceLimit;
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
        if (isset($map['instance_type'])) {
            $model->instanceType = $map['instance_type'];
        }
        if (isset($map['price_limit'])) {
            $model->priceLimit = $map['price_limit'];
        }

        return $model;
    }
}
