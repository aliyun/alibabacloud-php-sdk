<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationShrinkRequest;

use AlibabaCloud\Dara\Model;

class spotPriceLimits extends Model
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
        'priceLimit' => 'PriceLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
