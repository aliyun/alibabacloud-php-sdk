<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class KeywordSuggestInfo extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var \AlibabaCloud\SDK\BtripOpen\V20220520\Models\KeywordSuggestInfo
     */
    public $businessAreaWithCity;

    /**
     * @example 300100
     *
     * @var int
     */
    public $cityCode;

    /**
     * @example 杭州
     *
     * @var string
     */
    public $cityName;

    /**
     * @example 杭州东站
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 53853318
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $icon;

    /**
     * @example 4.8分
     *
     * @var string
     */
    public $point;

    /**
     * @example 524
     *
     * @var string
     */
    public $price;

    /**
     * @example 0
     *
     * @var int
     */
    public $region;

    /**
     * @var int
     */
    public $type;

    /**
     * @example 景点
     *
     * @var string
     */
    public $typeDesc;
    protected $_name = [
        'address'              => 'address',
        'businessAreaWithCity' => 'business_area_with_city',
        'cityCode'             => 'city_code',
        'cityName'             => 'city_name',
        'displayName'          => 'display_name',
        'hotelId'              => 'hotel_id',
        'icon'                 => 'icon',
        'point'                => 'point',
        'price'                => 'price',
        'region'               => 'region',
        'type'                 => 'type',
        'typeDesc'             => 'type_desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->businessAreaWithCity) {
            $res['business_area_with_city'] = null !== $this->businessAreaWithCity ? $this->businessAreaWithCity->toMap() : null;
        }
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->cityName) {
            $res['city_name'] = $this->cityName;
        }
        if (null !== $this->displayName) {
            $res['display_name'] = $this->displayName;
        }
        if (null !== $this->hotelId) {
            $res['hotel_id'] = $this->hotelId;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->point) {
            $res['point'] = $this->point;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->typeDesc) {
            $res['type_desc'] = $this->typeDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KeywordSuggestInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['business_area_with_city'])) {
            $model->businessAreaWithCity = self::fromMap($map['business_area_with_city']);
        }
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['city_name'])) {
            $model->cityName = $map['city_name'];
        }
        if (isset($map['display_name'])) {
            $model->displayName = $map['display_name'];
        }
        if (isset($map['hotel_id'])) {
            $model->hotelId = $map['hotel_id'];
        }
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }
        if (isset($map['point'])) {
            $model->point = $map['point'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['type_desc'])) {
            $model->typeDesc = $map['type_desc'];
        }

        return $model;
    }
}
