<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\flightItemDetailList;

use AlibabaCloud\Dara\Model;

class flightPrice extends Model
{
    /**
     * @var float
     */
    public $sellPrice;

    /**
     * @var float
     */
    public $tax;
    protected $_name = [
        'sellPrice' => 'sell_price',
        'tax' => 'tax',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
