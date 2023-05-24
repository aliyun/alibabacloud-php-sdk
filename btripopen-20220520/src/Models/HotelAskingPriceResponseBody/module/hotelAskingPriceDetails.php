<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelAskingPriceResponseBody\module;

use AlibabaCloud\Tea\Model;

class hotelAskingPriceDetails extends Model
{
    /**
     * @example 652302
     *
     * @var string
     */
    public $cityCode;

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
     * @var string
     */
    public $hotelName;

    /**
     * @example true
     *
     * @var bool
     */
    public $isProtocol;

    /**
     * @example 100
     *
     * @var float
     */
    public $minPrice;

    /**
     * @example 100
     *
     * @var float
     */
    public $originalMinPrice;
    protected $_name = [
        'cityCode'         => 'city_code',
        'hotelAddress'     => 'hotel_address',
        'hotelCode'        => 'hotel_code',
        'hotelName'        => 'hotel_name',
        'isProtocol'       => 'is_protocol',
        'minPrice'         => 'min_price',
        'originalMinPrice' => 'original_min_price',
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
        if (null !== $this->hotelAddress) {
            $res['hotel_address'] = $this->hotelAddress;
        }
        if (null !== $this->hotelCode) {
            $res['hotel_code'] = $this->hotelCode;
        }
        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }
        if (null !== $this->isProtocol) {
            $res['is_protocol'] = $this->isProtocol;
        }
        if (null !== $this->minPrice) {
            $res['min_price'] = $this->minPrice;
        }
        if (null !== $this->originalMinPrice) {
            $res['original_min_price'] = $this->originalMinPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotelAskingPriceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['hotel_address'])) {
            $model->hotelAddress = $map['hotel_address'];
        }
        if (isset($map['hotel_code'])) {
            $model->hotelCode = $map['hotel_code'];
        }
        if (isset($map['hotel_name'])) {
            $model->hotelName = $map['hotel_name'];
        }
        if (isset($map['is_protocol'])) {
            $model->isProtocol = $map['is_protocol'];
        }
        if (isset($map['min_price'])) {
            $model->minPrice = $map['min_price'];
        }
        if (isset($map['original_min_price'])) {
            $model->originalMinPrice = $map['original_min_price'];
        }

        return $model;
    }
}
