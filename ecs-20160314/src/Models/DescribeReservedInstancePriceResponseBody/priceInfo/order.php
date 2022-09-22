<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstancePriceResponseBody\priceInfo;

use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $reservedInstanceHourPrice;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency'                  => 'Currency',
        'reservedInstanceHourPrice' => 'ReservedInstanceHourPrice',
        'tradePrice'                => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->reservedInstanceHourPrice) {
            $res['ReservedInstanceHourPrice'] = $this->reservedInstanceHourPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return order
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['ReservedInstanceHourPrice'])) {
            $model->reservedInstanceHourPrice = $map['ReservedInstanceHourPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
