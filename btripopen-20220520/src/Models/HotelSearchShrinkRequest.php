<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class HotelSearchShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $adultNum;

    /**
     * @var string
     */
    public $brandCodeShrink;

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
     * @var int
     */
    public $dir;

    /**
     * @var int
     */
    public $distance;

    /**
     * @var string
     */
    public $districtCode;

    /**
     * @var string
     */
    public $hotelStar;

    /**
     * @var bool
     */
    public $isProtocol;

    /**
     * @var string
     */
    public $keyWords;

    /**
     * @var string
     */
    public $location;

    /**
     * @var float
     */
    public $maxPrice;

    /**
     * @var float
     */
    public $minPrice;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $payOverType;

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

    /**
     * @var int
     */
    public $superMan;
    protected $_name = [
        'adultNum' => 'adult_num',
        'brandCodeShrink' => 'brand_code',
        'btripUserId' => 'btrip_user_id',
        'checkInDate' => 'check_in_date',
        'checkOutDate' => 'check_out_date',
        'cityCode' => 'city_code',
        'dir' => 'dir',
        'distance' => 'distance',
        'districtCode' => 'district_code',
        'hotelStar' => 'hotel_star',
        'isProtocol' => 'is_protocol',
        'keyWords' => 'key_words',
        'location' => 'location',
        'maxPrice' => 'max_price',
        'minPrice' => 'min_price',
        'pageNo' => 'page_no',
        'pageSize' => 'page_size',
        'payOverType' => 'pay_over_type',
        'paymentType' => 'payment_type',
        'shidsShrink' => 'shids',
        'sortCode' => 'sort_code',
        'superMan' => 'super_man',
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

        if (null !== $this->brandCodeShrink) {
            $res['brand_code'] = $this->brandCodeShrink;
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

        if (null !== $this->dir) {
            $res['dir'] = $this->dir;
        }

        if (null !== $this->distance) {
            $res['distance'] = $this->distance;
        }

        if (null !== $this->districtCode) {
            $res['district_code'] = $this->districtCode;
        }

        if (null !== $this->hotelStar) {
            $res['hotel_star'] = $this->hotelStar;
        }

        if (null !== $this->isProtocol) {
            $res['is_protocol'] = $this->isProtocol;
        }

        if (null !== $this->keyWords) {
            $res['key_words'] = $this->keyWords;
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->maxPrice) {
            $res['max_price'] = $this->maxPrice;
        }

        if (null !== $this->minPrice) {
            $res['min_price'] = $this->minPrice;
        }

        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        if (null !== $this->payOverType) {
            $res['pay_over_type'] = $this->payOverType;
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

        if (null !== $this->superMan) {
            $res['super_man'] = $this->superMan;
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

        if (isset($map['brand_code'])) {
            $model->brandCodeShrink = $map['brand_code'];
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

        if (isset($map['dir'])) {
            $model->dir = $map['dir'];
        }

        if (isset($map['distance'])) {
            $model->distance = $map['distance'];
        }

        if (isset($map['district_code'])) {
            $model->districtCode = $map['district_code'];
        }

        if (isset($map['hotel_star'])) {
            $model->hotelStar = $map['hotel_star'];
        }

        if (isset($map['is_protocol'])) {
            $model->isProtocol = $map['is_protocol'];
        }

        if (isset($map['key_words'])) {
            $model->keyWords = $map['key_words'];
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['max_price'])) {
            $model->maxPrice = $map['max_price'];
        }

        if (isset($map['min_price'])) {
            $model->minPrice = $map['min_price'];
        }

        if (isset($map['page_no'])) {
            $model->pageNo = $map['page_no'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        if (isset($map['pay_over_type'])) {
            $model->payOverType = $map['pay_over_type'];
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

        if (isset($map['super_man'])) {
            $model->superMan = $map['super_man'];
        }

        return $model;
    }
}
