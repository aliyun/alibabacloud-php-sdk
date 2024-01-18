<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList;

use AlibabaCloud\Tea\Model;

class flightPrice extends Model
{
    /**
     * @example 300
     *
     * @var float
     */
    public $sellPrice;

    /**
     * @example 10
     *
     * @var float
     */
    public $tax;
    protected $_name = [
        'sellPrice' => 'sell_price',
        'tax'       => 'tax',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sellPrice) {
            $res['sell_price'] = $this->sellPrice;
        }
        if (null !== $this->tax) {
            $res['tax'] = $this->tax;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightPrice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sell_price'])) {
            $model->sellPrice = $map['sell_price'];
        }
        if (isset($map['tax'])) {
            $model->tax = $map['tax'];
        }

        return $model;
    }
}
