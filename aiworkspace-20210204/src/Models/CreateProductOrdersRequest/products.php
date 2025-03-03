<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateProductOrdersRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateProductOrdersRequest\products\instanceProperties;

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
        if (\is_array($this->instanceProperties)) {
            Model::validateArray($this->instanceProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instanceProperties)) {
                $res['InstanceProperties'] = [];
                $n1                        = 0;
                foreach ($this->instanceProperties as $item1) {
                    $res['InstanceProperties'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                        = 0;
                foreach ($map['InstanceProperties'] as $item1) {
                    $model->instanceProperties[$n1++] = instanceProperties::fromMap($item1);
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
