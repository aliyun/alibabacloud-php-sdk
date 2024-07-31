<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class hotelInfo extends Model
{
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
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @example 330183
     *
     * @var string
     */
    public $districtCode;

    /**
     * @var string
     */
    public $districtName;

    /**
     * @var string
     */
    public $hotelAddress;

    /**
     * @example 3
     *
     * @var string
     */
    public $hotelBrandCode;

    /**
     * @var string
     */
    public $hotelBrandName;

    /**
     * @example huazhu
     *
     * @var string
     */
    public $hotelGroup;

    /**
     * @example 55335212
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @example Test Hotel Name
     *
     * @var string
     */
    public $hotelNameEn;

    /**
     * @example 5
     *
     * @var string
     */
    public $star;
    protected $_name = [
        'cityCode'       => 'city_code',
        'cityName'       => 'city_name',
        'countryCode'    => 'country_code',
        'countryName'    => 'country_name',
        'districtCode'   => 'district_code',
        'districtName'   => 'district_name',
        'hotelAddress'   => 'hotel_address',
        'hotelBrandCode' => 'hotel_brand_code',
        'hotelBrandName' => 'hotel_brand_name',
        'hotelGroup'     => 'hotel_group',
        'hotelId'        => 'hotel_id',
        'hotelName'      => 'hotel_name',
        'hotelNameEn'    => 'hotel_name_en',
        'star'           => 'star',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->cityName) {
            $res['city_name'] = $this->cityName;
        }
        if (null !== $this->countryCode) {
            $res['country_code'] = $this->countryCode;
        }
        if (null !== $this->countryName) {
            $res['country_name'] = $this->countryName;
        }
        if (null !== $this->districtCode) {
            $res['district_code'] = $this->districtCode;
        }
        if (null !== $this->districtName) {
            $res['district_name'] = $this->districtName;
        }
        if (null !== $this->hotelAddress) {
            $res['hotel_address'] = $this->hotelAddress;
        }
        if (null !== $this->hotelBrandCode) {
            $res['hotel_brand_code'] = $this->hotelBrandCode;
        }
        if (null !== $this->hotelBrandName) {
            $res['hotel_brand_name'] = $this->hotelBrandName;
        }
        if (null !== $this->hotelGroup) {
            $res['hotel_group'] = $this->hotelGroup;
        }
        if (null !== $this->hotelId) {
            $res['hotel_id'] = $this->hotelId;
        }
        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }
        if (null !== $this->hotelNameEn) {
            $res['hotel_name_en'] = $this->hotelNameEn;
        }
        if (null !== $this->star) {
            $res['star'] = $this->star;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotelInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['city_name'])) {
            $model->cityName = $map['city_name'];
        }
        if (isset($map['country_code'])) {
            $model->countryCode = $map['country_code'];
        }
        if (isset($map['country_name'])) {
            $model->countryName = $map['country_name'];
        }
        if (isset($map['district_code'])) {
            $model->districtCode = $map['district_code'];
        }
        if (isset($map['district_name'])) {
            $model->districtName = $map['district_name'];
        }
        if (isset($map['hotel_address'])) {
            $model->hotelAddress = $map['hotel_address'];
        }
        if (isset($map['hotel_brand_code'])) {
            $model->hotelBrandCode = $map['hotel_brand_code'];
        }
        if (isset($map['hotel_brand_name'])) {
            $model->hotelBrandName = $map['hotel_brand_name'];
        }
        if (isset($map['hotel_group'])) {
            $model->hotelGroup = $map['hotel_group'];
        }
        if (isset($map['hotel_id'])) {
            $model->hotelId = $map['hotel_id'];
        }
        if (isset($map['hotel_name'])) {
            $model->hotelName = $map['hotel_name'];
        }
        if (isset($map['hotel_name_en'])) {
            $model->hotelNameEn = $map['hotel_name_en'];
        }
        if (isset($map['star'])) {
            $model->star = $map['star'];
        }

        return $model;
    }
}
