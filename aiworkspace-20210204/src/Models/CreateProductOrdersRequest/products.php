<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateProductOrdersRequest;

use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateProductOrdersRequest\products\instanceProperties;
use AlibabaCloud\Tea\Model;

class products extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var instanceProperties[]
     */
    public $instanceProperties;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'autoRenew'          => 'AutoRenew',
        'chargeType'         => 'ChargeType',
        'duration'           => 'Duration',
        'instanceProperties' => 'InstanceProperties',
        'orderType'          => 'OrderType',
        'pricingCycle'       => 'PricingCycle',
        'productCode'        => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceProperties) {
            $res['InstanceProperties'] = [];
            if (null !== $this->instanceProperties && \is_array($this->instanceProperties)) {
                $n = 0;
                foreach ($this->instanceProperties as $item) {
                    $res['InstanceProperties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return products
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceProperties'])) {
            if (!empty($map['InstanceProperties'])) {
                $model->instanceProperties = [];
                $n                         = 0;
                foreach ($map['InstanceProperties'] as $item) {
                    $model->instanceProperties[$n++] = null !== $item ? instanceProperties::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
