<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingConfigurationRequest;

use AlibabaCloud\Tea\Model;

class spotPriceLimit extends Model
{
    /**
     * @var float
     */
    public $priceLimit;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'priceLimit'   => 'PriceLimit',
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceLimit) {
            $res['PriceLimit'] = $this->priceLimit;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (isset($map['PriceLimit'])) {
            $model->priceLimit = $map['PriceLimit'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
