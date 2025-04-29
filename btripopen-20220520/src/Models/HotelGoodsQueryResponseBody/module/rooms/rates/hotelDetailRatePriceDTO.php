<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates;

use AlibabaCloud\Dara\Model;

class hotelDetailRatePriceDTO extends Model
{
    /**
     * @var int
     */
    public $beforeDiscountPrice;

    /**
     * @var string
     */
    public $breakfast;

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
    public $lastDiscountsRoundingPrice;

    /**
     * @var int
     */
    public $lastNum;

    /**
     * @var string
     */
    public $rateStartTime;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'beforeDiscountPrice' => 'before_discount_price',
        'breakfast' => 'breakfast',
        'discountPrice' => 'discount_price',
        'lastDiscountsPrice' => 'last_discounts_price',
        'lastDiscountsRoundingPrice' => 'last_discounts_rounding_price',
        'lastNum' => 'last_num',
        'rateStartTime' => 'rate_start_time',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->lastDiscountsRoundingPrice) {
            $res['last_discounts_rounding_price'] = $this->lastDiscountsRoundingPrice;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['last_discounts_rounding_price'])) {
            $model->lastDiscountsRoundingPrice = $map['last_discounts_rounding_price'];
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
