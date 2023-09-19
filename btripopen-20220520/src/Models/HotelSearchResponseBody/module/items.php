<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSearchResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSearchResponseBody\module\items\discountDesc;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $brandName;

    /**
     * @example 1902
     *
     * @var string
     */
    public $btandCode;

    /**
     * @example 330100
     *
     * @var string
     */
    public $cityCode;

    /**
     * @var discountDesc
     */
    public $discountDesc;

    /**
     * @example 100
     *
     * @var int
     */
    public $distance;

    /**
     * @example 330100
     *
     * @var string
     */
    public $districtCode;

    /**
     * @var string
     */
    public $hotelAddress;

    /**
     * @example 55335212
     *
     * @var string
     */
    public $hotelCode;

    /**
     * @example Business travel hotel
     *
     * @var string
     */
    public $hotelEnName;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @example 3
     *
     * @var string
     */
    public $hotelStar;

    /**
     * @example https://img.alicdn.com/imgextra/i3/6000000000003/O1CN01xkZQR41BtPxK1PQCb_!!6000000000003-0-hotel.jpg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example true
     *
     * @var bool
     */
    public $isProtocol;

    /**
     * @example 119.844005,30.054384
     *
     * @var string
     */
    public $location;

    /**
     * @example 100
     *
     * @var float
     */
    public $minPrice;

    /**
     * @var float
     */
    public $originalMinPrice;

    /**
     * @example 3.2
     *
     * @var string
     */
    public $score;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 0571-88886784-8888
     *
     * @var string
     */
    public $tel;
    protected $_name = [
        'brandName'        => 'brand_name',
        'btandCode'        => 'btand_code',
        'cityCode'         => 'city_code',
        'discountDesc'     => 'discount_desc',
        'distance'         => 'distance',
        'districtCode'     => 'district_code',
        'hotelAddress'     => 'hotel_address',
        'hotelCode'        => 'hotel_code',
        'hotelEnName'      => 'hotel_en_name',
        'hotelName'        => 'hotel_name',
        'hotelStar'        => 'hotel_star',
        'imageUrl'         => 'image_url',
        'isProtocol'       => 'is_protocol',
        'location'         => 'location',
        'minPrice'         => 'min_price',
        'originalMinPrice' => 'original_min_price',
        'score'            => 'score',
        'status'           => 'status',
        'tel'              => 'tel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brandName) {
            $res['brand_name'] = $this->brandName;
        }
        if (null !== $this->btandCode) {
            $res['btand_code'] = $this->btandCode;
        }
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->discountDesc) {
            $res['discount_desc'] = null !== $this->discountDesc ? $this->discountDesc->toMap() : null;
        }
        if (null !== $this->distance) {
            $res['distance'] = $this->distance;
        }
        if (null !== $this->districtCode) {
            $res['district_code'] = $this->districtCode;
        }
        if (null !== $this->hotelAddress) {
            $res['hotel_address'] = $this->hotelAddress;
        }
        if (null !== $this->hotelCode) {
            $res['hotel_code'] = $this->hotelCode;
        }
        if (null !== $this->hotelEnName) {
            $res['hotel_en_name'] = $this->hotelEnName;
        }
        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }
        if (null !== $this->hotelStar) {
            $res['hotel_star'] = $this->hotelStar;
        }
        if (null !== $this->imageUrl) {
            $res['image_url'] = $this->imageUrl;
        }
        if (null !== $this->isProtocol) {
            $res['is_protocol'] = $this->isProtocol;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->minPrice) {
            $res['min_price'] = $this->minPrice;
        }
        if (null !== $this->originalMinPrice) {
            $res['original_min_price'] = $this->originalMinPrice;
        }
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tel) {
            $res['tel'] = $this->tel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['brand_name'])) {
            $model->brandName = $map['brand_name'];
        }
        if (isset($map['btand_code'])) {
            $model->btandCode = $map['btand_code'];
        }
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['discount_desc'])) {
            $model->discountDesc = discountDesc::fromMap($map['discount_desc']);
        }
        if (isset($map['distance'])) {
            $model->distance = $map['distance'];
        }
        if (isset($map['district_code'])) {
            $model->districtCode = $map['district_code'];
        }
        if (isset($map['hotel_address'])) {
            $model->hotelAddress = $map['hotel_address'];
        }
        if (isset($map['hotel_code'])) {
            $model->hotelCode = $map['hotel_code'];
        }
        if (isset($map['hotel_en_name'])) {
            $model->hotelEnName = $map['hotel_en_name'];
        }
        if (isset($map['hotel_name'])) {
            $model->hotelName = $map['hotel_name'];
        }
        if (isset($map['hotel_star'])) {
            $model->hotelStar = $map['hotel_star'];
        }
        if (isset($map['image_url'])) {
            $model->imageUrl = $map['image_url'];
        }
        if (isset($map['is_protocol'])) {
            $model->isProtocol = $map['is_protocol'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['min_price'])) {
            $model->minPrice = $map['min_price'];
        }
        if (isset($map['original_min_price'])) {
            $model->originalMinPrice = $map['original_min_price'];
        }
        if (isset($map['score'])) {
            $model->score = $map['score'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tel'])) {
            $model->tel = $map['tel'];
        }

        return $model;
    }
}
