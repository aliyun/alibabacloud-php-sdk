<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelPricePullShrinkRequest extends Model
{
    /**
     * @example 1000
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @example 2022-05-15
     *
     * @var string
     */
    public $checkIn;

    /**
     * @example 2022-05-15
     *
     * @var string
     */
    public $checkOut;

    /**
     * @example 330100
     *
     * @var int
     */
    public $cityCode;

    /**
     * @var string
     */
    public $hotelIdsShrink;

    /**
     * @example 0
     *
     * @var int
     */
    public $paymentType;
    protected $_name = [
        'btripUserId'    => 'btrip_user_id',
        'checkIn'        => 'check_in',
        'checkOut'       => 'check_out',
        'cityCode'       => 'city_code',
        'hotelIdsShrink' => 'hotel_ids',
        'paymentType'    => 'payment_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }
        if (null !== $this->checkOut) {
            $res['check_out'] = $this->checkOut;
        }
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->hotelIdsShrink) {
            $res['hotel_ids'] = $this->hotelIdsShrink;
        }
        if (null !== $this->paymentType) {
            $res['payment_type'] = $this->paymentType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelPricePullShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['check_in'])) {
            $model->checkIn = $map['check_in'];
        }
        if (isset($map['check_out'])) {
            $model->checkOut = $map['check_out'];
        }
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['hotel_ids'])) {
            $model->hotelIdsShrink = $map['hotel_ids'];
        }
        if (isset($map['payment_type'])) {
            $model->paymentType = $map['payment_type'];
        }

        return $model;
    }
}
