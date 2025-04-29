<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos\rooms\rates;

use AlibabaCloud\Dara\Model;

class rateDailys extends Model
{
    /**
     * @var int
     */
    public $discountPrice;

    /**
     * @var int
     */
    public $lastDiscountsPrice;

    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'discountPrice' => 'discount_price',
        'lastDiscountsPrice' => 'last_discounts_price',
        'price' => 'price',
        'startDate' => 'start_date',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discountPrice) {
            $res['discount_price'] = $this->discountPrice;
        }

        if (null !== $this->lastDiscountsPrice) {
            $res['last_discounts_price'] = $this->lastDiscountsPrice;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
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
        if (isset($map['discount_price'])) {
            $model->discountPrice = $map['discount_price'];
        }

        if (isset($map['last_discounts_price'])) {
            $model->lastDiscountsPrice = $map['last_discounts_price'];
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['start_date'])) {
            $model->startDate = $map['start_date'];
        }

        return $model;
    }
}
