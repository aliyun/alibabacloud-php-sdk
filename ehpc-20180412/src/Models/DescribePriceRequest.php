<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest\commodities;
use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @var commodities[]
     */
    public $commodities;

    /**
     * @example INSTANCE-BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @example Hour
     *
     * @var string
     */
    public $priceUnit;
    protected $_name = [
        'chargeType'  => 'ChargeType',
        'commodities' => 'Commodities',
        'orderType'   => 'OrderType',
        'priceUnit'   => 'PriceUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
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
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
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
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }

        return $model;
    }
}
