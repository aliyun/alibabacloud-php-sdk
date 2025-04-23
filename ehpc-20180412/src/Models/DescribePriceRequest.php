<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest\commodities;

class DescribePriceRequest extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var commodities[]
     */
    public $commodities;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $priceUnit;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'commodities' => 'Commodities',
        'orderType' => 'OrderType',
        'priceUnit' => 'PriceUnit',
    ];

    public function validate()
    {
        if (\is_array($this->commodities)) {
            Model::validateArray($this->commodities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->commodities) {
            if (\is_array($this->commodities)) {
                $res['Commodities'] = [];
                $n1 = 0;
                foreach ($this->commodities as $item1) {
                    $res['Commodities'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Commodities'])) {
            if (!empty($map['Commodities'])) {
                $model->commodities = [];
                $n1 = 0;
                foreach ($map['Commodities'] as $item1) {
                    $model->commodities[$n1++] = commodities::fromMap($item1);
                }
            }
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }

        return $model;
    }
}
