<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class HotelAskingPriceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $adultNum;

    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $checkInDate;

    /**
     * @var string
     */
    public $checkOutDate;

    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var int
     */
    public $dir;

    /**
     * @var string
     */
    public $hotelStar;

    /**
     * @var bool
     */
    public $isProtocol;

    /**
     * @var int
     */
    public $paymentType;

    /**
     * @var string
     */
    public $shidsShrink;

    /**
     * @var int
     */
    public $sortCode;
    protected $_name = [
        'adultNum' => 'adult_num',
        'btripUserId' => 'btrip_user_id',
        'checkInDate' => 'check_in_date',
        'checkOutDate' => 'check_out_date',
        'cityCode' => 'city_code',
        'cityName' => 'city_name',
        'dir' => 'dir',
        'hotelStar' => 'hotel_star',
        'isProtocol' => 'is_protocol',
        'paymentType' => 'payment_type',
        'shidsShrink' => 'shids',
        'sortCode' => 'sort_code',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->shidsShrink) {
            $res['shids'] = $this->shidsShrink;
        }

        if (null !== $this->sortCode) {
            $res['sort_code'] = $this->sortCode;
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
            $model->shidsShrink = $map['shids'];
        }

        if (isset($map['sort_code'])) {
            $model->sortCode = $map['sort_code'];
        }

        return $model;
    }
}
