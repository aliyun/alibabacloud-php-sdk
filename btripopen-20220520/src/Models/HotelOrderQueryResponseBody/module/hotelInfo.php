<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class hotelInfo extends Model
{
    /**
     * @example 1669344020
     *
     * @var int
     */
    public $checkIn;

    /**
     * @example 1669344020
     *
     * @var int
     */
    public $checkOut;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $cityAdCode;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @example 11
     *
     * @var int
     */
    public $hotelSupportVatInvoiceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $night;

    /**
     * @example 1
     *
     * @var int
     */
    public $roomNum;

    /**
     * @var string
     */
    public $roomType;
    protected $_name = [
        'checkIn'                    => 'check_in',
        'checkOut'                   => 'check_out',
        'city'                       => 'city',
        'cityAdCode'                 => 'city_ad_code',
        'hotelName'                  => 'hotel_name',
        'hotelSupportVatInvoiceType' => 'hotel_support_vat_invoice_type',
        'night'                      => 'night',
        'roomNum'                    => 'room_num',
        'roomType'                   => 'room_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }
        if (null !== $this->checkOut) {
            $res['check_out'] = $this->checkOut;
        }
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->cityAdCode) {
            $res['city_ad_code'] = $this->cityAdCode;
        }
        if (null !== $this->hotelName) {
            $res['hotel_name'] = $this->hotelName;
        }
        if (null !== $this->hotelSupportVatInvoiceType) {
            $res['hotel_support_vat_invoice_type'] = $this->hotelSupportVatInvoiceType;
        }
        if (null !== $this->night) {
            $res['night'] = $this->night;
        }
        if (null !== $this->roomNum) {
            $res['room_num'] = $this->roomNum;
        }
        if (null !== $this->roomType) {
            $res['room_type'] = $this->roomType;
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
        if (isset($map['check_in'])) {
            $model->checkIn = $map['check_in'];
        }
        if (isset($map['check_out'])) {
            $model->checkOut = $map['check_out'];
        }
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }
        if (isset($map['city_ad_code'])) {
            $model->cityAdCode = $map['city_ad_code'];
        }
        if (isset($map['hotel_name'])) {
            $model->hotelName = $map['hotel_name'];
        }
        if (isset($map['hotel_support_vat_invoice_type'])) {
            $model->hotelSupportVatInvoiceType = $map['hotel_support_vat_invoice_type'];
        }
        if (isset($map['night'])) {
            $model->night = $map['night'];
        }
        if (isset($map['room_num'])) {
            $model->roomNum = $map['room_num'];
        }
        if (isset($map['room_type'])) {
            $model->roomType = $map['room_type'];
        }

        return $model;
    }
}
