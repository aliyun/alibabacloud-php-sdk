<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelAskingPriceResponseBody\module;

use AlibabaCloud\Dara\Model;

class hotelAskingPriceDetails extends Model
{
    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $hotelAddress;

    /**
     * @var string
     */
    public $hotelCode;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var bool
     */
    public $isProtocol;

    /**
     * @var float
     */
    public $minPrice;

    /**
     * @var float
     */
    public $originalMinPrice;
    protected $_name = [
        'cityCode' => 'city_code',
        'hotelAddress' => 'hotel_address',
        'hotelCode' => 'hotel_code',
        'hotelName' => 'hotel_name',
        'isProtocol' => 'is_protocol',
        'minPrice' => 'min_price',
        'originalMinPrice' => 'original_min_price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
