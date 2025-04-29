<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos;

use AlibabaCloud\Dara\Model;

class expandInfo extends Model
{
    /**
     * @var string
     */
    public $checkIn;

    /**
     * @var string
     */
    public $checkOut;

    /**
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
     * @var int
     */
    public $hotelType;

    /**
     * @var string
     */
    public $openingTime;

    /**
     * @var string[]
     */
    public $roomFacilities;

    /**
     * @var int
     */
    public $rooms;

    /**
     * @var string[]
     */
    public $service;

    /**
     * @var string
     */
    public $themeTag;
    protected $_name = [
        'checkIn' => 'check_in',
        'checkOut' => 'check_out',
        'decorateTime' => 'decorate_time',
        'floors' => 'floors',
        'hotelFacilities' => 'hotel_facilities',
        'hotelType' => 'hotel_type',
        'openingTime' => 'opening_time',
        'roomFacilities' => 'room_facilities',
        'rooms' => 'rooms',
        'service' => 'service',
        'themeTag' => 'theme_tag',
    ];

    public function validate()
    {
        if (\is_array($this->hotelFacilities)) {
            Model::validateArray($this->hotelFacilities);
        }
        if (\is_array($this->roomFacilities)) {
            Model::validateArray($this->roomFacilities);
        }
        if (\is_array($this->service)) {
            Model::validateArray($this->service);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->hotelFacilities)) {
                $res['hotel_facilities'] = [];
                $n1 = 0;
                foreach ($this->hotelFacilities as $item1) {
                    $res['hotel_facilities'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->hotelType) {
            $res['hotel_type'] = $this->hotelType;
        }

        if (null !== $this->openingTime) {
            $res['opening_time'] = $this->openingTime;
        }

        if (null !== $this->roomFacilities) {
            if (\is_array($this->roomFacilities)) {
                $res['room_facilities'] = [];
                $n1 = 0;
                foreach ($this->roomFacilities as $item1) {
                    $res['room_facilities'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->rooms) {
            $res['rooms'] = $this->rooms;
        }

        if (null !== $this->service) {
            if (\is_array($this->service)) {
                $res['service'] = [];
                $n1 = 0;
                foreach ($this->service as $item1) {
                    $res['service'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->themeTag) {
            $res['theme_tag'] = $this->themeTag;
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
                $model->hotelFacilities = [];
                $n1 = 0;
                foreach ($map['hotel_facilities'] as $item1) {
                    $model->hotelFacilities[$n1++] = $item1;
                }
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
                $model->roomFacilities = [];
                $n1 = 0;
                foreach ($map['room_facilities'] as $item1) {
                    $model->roomFacilities[$n1++] = $item1;
                }
            }
        }

        if (isset($map['rooms'])) {
            $model->rooms = $map['rooms'];
        }

        if (isset($map['service'])) {
            if (!empty($map['service'])) {
                $model->service = [];
                $n1 = 0;
                foreach ($map['service'] as $item1) {
                    $model->service[$n1++] = $item1;
                }
            }
        }

        if (isset($map['theme_tag'])) {
            $model->themeTag = $map['theme_tag'];
        }

        return $model;
    }
}
