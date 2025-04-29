<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module;

use AlibabaCloud\Dara\Model;

class hotelDetailInfo extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var string
     */
    public $hotelTel;

    /**
     * @var int
     */
    public $shid;
    protected $_name = [
        'address' => 'address',
        'cityName' => 'city_name',
        'hotelName' => 'hotel_name',
        'hotelTel' => 'hotel_tel',
        'shid' => 'shid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->cityName) {
            $res['city_name'] = $this->cityName;
        }

        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }

        if (null !== $this->hotelTel) {
            $res['hotel_tel'] = $this->hotelTel;
        }

        if (null !== $this->shid) {
            $res['shid'] = $this->shid;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['city_name'])) {
            $model->cityName = $map['city_name'];
        }

        if (isset($map['hotel_name'])) {
            $model->hotelName = $map['hotel_name'];
        }

        if (isset($map['hotel_tel'])) {
            $model->hotelTel = $map['hotel_tel'];
        }

        if (isset($map['shid'])) {
            $model->shid = $map['shid'];
        }

        return $model;
    }
}
