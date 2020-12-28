<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest\commodities;
use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var commodities[]
     */
    public $commodities;
    protected $_name = [
        'priceUnit'   => 'PriceUnit',
        'chargeType'  => 'ChargeType',
        'orderType'   => 'OrderType',
        'commodities' => 'Commodities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->commodities) {
            $res['Commodities'] = [];
            if (null !== $this->commodities && \is_array($this->commodities)) {
                $n = 0;
                foreach ($this->commodities as $item) {
                    $res['Commodities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['Commodities'])) {
            if (!empty($map['Commodities'])) {
                $model->commodities = [];
                $n                  = 0;
                foreach ($map['Commodities'] as $item) {
                    $model->commodities[$n++] = null !== $item ? commodities::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
