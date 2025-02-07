<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\scalingGroup;

use AlibabaCloud\Dara\Model;

class spotPriceLimit extends Model
{
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var string
     */
    public $priceLimit;
    protected $_name = [
        'instanceType' => 'instance_type',
        'priceLimit'   => 'price_limit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
