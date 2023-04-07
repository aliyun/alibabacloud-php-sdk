<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos;

use AlibabaCloud\Tea\Model;

class expandInfo extends Model
{
    /**
     * @example 17:00
     *
     * @var string
     */
    public $checkIn;

    /**
     * @example 12:00
     *
     * @var string
     */
    public $checkOut;

    /**
     * @example 2020
     *
     * @var string
     */
    public $decorateTime;

    /**
     * @var string
     */
    public $floors;

    /**
     * @var string[]
     */
    public $hotelFacilities;

    /**
     * @example 0
     *
     * @var int
     */
    public $hotelType;

    /**
     * @example 2020
     *
     * @var string
     */
    public $openingTime;

    /**
     * @var string[]
     */
    public $roomFacilities;

    /**
     * @example 1
     *
     * @var int
     */
    public $rooms;

    /**
     * @var string[]
     */
    public $service;

    /**
     * @example 1
     *
     * @var string
     */
    public $themeTag;
    protected $_name = [
        'checkIn'         => 'check_in',
        'checkOut'        => 'check_out',
        'decorateTime'    => 'decorate_time',
        'floors'          => 'floors',
        'hotelFacilities' => 'hotel_facilities',
        'hotelType'       => 'hotel_type',
        'openingTime'     => 'opening_time',
        'roomFacilities'  => 'room_facilities',
        'rooms'           => 'rooms',
        'service'         => 'service',
        'themeTag'        => 'theme_tag',
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
        if (null !== $this->decorateTime) {
            $res['decorate_time'] = $this->decorateTime;
        }
        if (null !== $this->floors) {
            $res['floors'] = $this->floors;
        }
        if (null !== $this->hotelFacilities) {
            $res['hotel_facilities'] = $this->hotelFacilities;
        }
        if (null !== $this->hotelType) {
            $res['hotel_type'] = $this->hotelType;
        }
        if (null !== $this->openingTime) {
            $res['opening_time'] = $this->openingTime;
        }
        if (null !== $this->roomFacilities) {
            $res['room_facilities'] = $this->roomFacilities;
        }
        if (null !== $this->rooms) {
            $res['rooms'] = $this->rooms;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }
        if (null !== $this->themeTag) {
            $res['theme_tag'] = $this->themeTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expandInfo
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
        if (isset($map['decorate_time'])) {
            $model->decorateTime = $map['decorate_time'];
        }
        if (isset($map['floors'])) {
            $model->floors = $map['floors'];
        }
        if (isset($map['hotel_facilities'])) {
            if (!empty($map['hotel_facilities'])) {
                $model->hotelFacilities = $map['hotel_facilities'];
            }
        }
        if (isset($map['hotel_type'])) {
            $model->hotelType = $map['hotel_type'];
        }
        if (isset($map['opening_time'])) {
            $model->openingTime = $map['opening_time'];
        }
        if (isset($map['room_facilities'])) {
            if (!empty($map['room_facilities'])) {
                $model->roomFacilities = $map['room_facilities'];
            }
        }
        if (isset($map['rooms'])) {
            $model->rooms = $map['rooms'];
        }
        if (isset($map['service'])) {
            if (!empty($map['service'])) {
                $model->service = $map['service'];
            }
        }
        if (isset($map['theme_tag'])) {
            $model->themeTag = $map['theme_tag'];
        }

        return $model;
    }
}
