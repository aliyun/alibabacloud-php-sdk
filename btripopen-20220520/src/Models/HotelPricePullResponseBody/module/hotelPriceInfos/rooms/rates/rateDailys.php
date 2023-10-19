<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelPricePullResponseBody\module\hotelPriceInfos\rooms\rates;

use AlibabaCloud\Tea\Model;

class rateDailys extends Model
{
    /**
     * @example 30000
     *
     * @var int
     */
    public $discountPrice;

    /**
     * @example 62800
     *
     * @var int
     */
    public $lastDiscountsPrice;

    /**
     * @example 62800
     *
     * @var int
     */
    public $price;

    /**
     * @example 2023-10-17
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'discountPrice'      => 'discount_price',
        'lastDiscountsPrice' => 'last_discounts_price',
        'price'              => 'price',
        'startDate'          => 'start_date',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return rateDailys
     */
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
