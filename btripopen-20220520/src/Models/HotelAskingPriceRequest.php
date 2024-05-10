<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelAskingPriceRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $adultNum;

    /**
     * @example 1000
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @description This parameter is required.
     *
     * @example 2023-02-22 00:00:00
     *
     * @var string
     */
    public $checkInDate;

    /**
     * @description This parameter is required.
     *
     * @example 2023-02-22 00:00:00
     *
     * @var string
     */
    public $checkOutDate;

    /**
     * @example 330100
     *
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @example 1
     *
     * @var int
     */
    public $dir;

    /**
     * @example 1
     *
     * @var string
     */
    public $hotelStar;

    /**
     * @example true
     *
     * @var bool
     */
    public $isProtocol;

    /**
     * @example 0
     *
     * @var int
     */
    public $paymentType;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $shids;

    /**
     * @example 0
     *
     * @var int
     */
    public $sortCode;
    protected $_name = [
        'adultNum'     => 'adult_num',
        'btripUserId'  => 'btrip_user_id',
        'checkInDate'  => 'check_in_date',
        'checkOutDate' => 'check_out_date',
        'cityCode'     => 'city_code',
        'cityName'     => 'city_name',
        'dir'          => 'dir',
        'hotelStar'    => 'hotel_star',
        'isProtocol'   => 'is_protocol',
        'paymentType'  => 'payment_type',
        'shids'        => 'shids',
        'sortCode'     => 'sort_code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adultNum) {
            $res['adult_num'] = $this->adultNum;
        }
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->checkInDate) {
            $res['check_in_date'] = $this->checkInDate;
        }
        if (null !== $this->checkOutDate) {
            $res['check_out_date'] = $this->checkOutDate;
        }
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->cityName) {
            $res['city_name'] = $this->cityName;
        }
        if (null !== $this->dir) {
            $res['dir'] = $this->dir;
        }
        if (null !== $this->hotelStar) {
            $res['hotel_star'] = $this->hotelStar;
        }
        if (null !== $this->isProtocol) {
            $res['is_protocol'] = $this->isProtocol;
        }
        if (null !== $this->paymentType) {
            $res['payment_type'] = $this->paymentType;
        }
        if (null !== $this->shids) {
            $res['shids'] = $this->shids;
        }
        if (null !== $this->sortCode) {
            $res['sort_code'] = $this->sortCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelAskingPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adult_num'])) {
            $model->adultNum = $map['adult_num'];
        }
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['check_in_date'])) {
            $model->checkInDate = $map['check_in_date'];
        }
        if (isset($map['check_out_date'])) {
            $model->checkOutDate = $map['check_out_date'];
        }
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['city_name'])) {
            $model->cityName = $map['city_name'];
        }
        if (isset($map['dir'])) {
            $model->dir = $map['dir'];
        }
        if (isset($map['hotel_star'])) {
            $model->hotelStar = $map['hotel_star'];
        }
        if (isset($map['is_protocol'])) {
            $model->isProtocol = $map['is_protocol'];
        }
        if (isset($map['payment_type'])) {
            $model->paymentType = $map['payment_type'];
        }
        if (isset($map['shids'])) {
            if (!empty($map['shids'])) {
                $model->shids = $map['shids'];
            }
        }
        if (isset($map['sort_code'])) {
            $model->sortCode = $map['sort_code'];
        }

        return $model;
    }
}
