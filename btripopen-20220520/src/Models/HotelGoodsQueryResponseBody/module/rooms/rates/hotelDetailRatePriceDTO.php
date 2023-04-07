<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates;

use AlibabaCloud\Tea\Model;

class hotelDetailRatePriceDTO extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $beforeDiscountPrice;

    /**
     * @example demo
     *
     * @var string
     */
    public $breakfast;

    /**
     * @example 1000
     *
     * @var int
     */
    public $discountPrice;

    /**
     * @example 100
     *
     * @var int
     */
    public $lastDiscountsPrice;

    /**
     * @example 1
     *
     * @var int
     */
    public $lastNum;

    /**
     * @example 2023-03-25
     *
     * @var string
     */
    public $rateStartTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'beforeDiscountPrice' => 'before_discount_price',
        'breakfast'           => 'breakfast',
        'discountPrice'       => 'discount_price',
        'lastDiscountsPrice'  => 'last_discounts_price',
        'lastNum'             => 'last_num',
        'rateStartTime'       => 'rate_start_time',
        'status'              => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beforeDiscountPrice) {
            $res['before_discount_price'] = $this->beforeDiscountPrice;
        }
        if (null !== $this->breakfast) {
            $res['breakfast'] = $this->breakfast;
        }
        if (null !== $this->discountPrice) {
            $res['discount_price'] = $this->discountPrice;
        }
        if (null !== $this->lastDiscountsPrice) {
            $res['last_discounts_price'] = $this->lastDiscountsPrice;
        }
        if (null !== $this->lastNum) {
            $res['last_num'] = $this->lastNum;
        }
        if (null !== $this->rateStartTime) {
            $res['rate_start_time'] = $this->rateStartTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotelDetailRatePriceDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['before_discount_price'])) {
            $model->beforeDiscountPrice = $map['before_discount_price'];
        }
        if (isset($map['breakfast'])) {
            $model->breakfast = $map['breakfast'];
        }
        if (isset($map['discount_price'])) {
            $model->discountPrice = $map['discount_price'];
        }
        if (isset($map['last_discounts_price'])) {
            $model->lastDiscountsPrice = $map['last_discounts_price'];
        }
        if (isset($map['last_num'])) {
            $model->lastNum = $map['last_num'];
        }
        if (isset($map['rate_start_time'])) {
            $model->rateStartTime = $map['rate_start_time'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
