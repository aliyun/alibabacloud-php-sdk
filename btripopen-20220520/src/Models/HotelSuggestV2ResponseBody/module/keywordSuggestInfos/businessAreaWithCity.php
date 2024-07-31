<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestV2ResponseBody\module\keywordSuggestInfos;

use AlibabaCloud\Tea\Model;

class businessAreaWithCity extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @example 300100
     *
     * @var int
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example 57140953
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example https://gw.alicdn.com/imgextra/i3/O1CN01qKg25r1rKLOKxT3vB_!!6000000005612-2-tps-32-32.png
     *
     * @var string
     */
    public $icon;

    /**
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
     * @example 5
     *
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $typeDesc;
    protected $_name = [
        'address'     => 'address',
        'cityCode'    => 'city_code',
        'cityName'    => 'city_name',
        'displayName' => 'display_name',
        'hotelId'     => 'hotel_id',
        'icon'        => 'icon',
        'point'       => 'point',
        'price'       => 'price',
        'region'      => 'region',
        'type'        => 'type',
        'typeDesc'    => 'type_desc',
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
     * @return businessAreaWithCity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
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
