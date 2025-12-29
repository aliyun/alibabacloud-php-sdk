<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateHotelAlarmRequest\scheduleInfo;

class CreateHotelAlarmRequest extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $musicType;

    /**
     * @var string[]
     */
    public $rooms;

    /**
     * @var scheduleInfo
     */
    public $scheduleInfo;
    protected $_name = [
        'hotelId' => 'HotelId',
        'musicType' => 'MusicType',
        'rooms' => 'Rooms',
        'scheduleInfo' => 'ScheduleInfo',
    ];

    public function validate()
    {
        if (\is_array($this->rooms)) {
            Model::validateArray($this->rooms);
        }
        if (null !== $this->scheduleInfo) {
            $this->scheduleInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->musicType) {
            $res['MusicType'] = $this->musicType;
        }

        if (null !== $this->rooms) {
            if (\is_array($this->rooms)) {
                $res['Rooms'] = [];
                $n1 = 0;
                foreach ($this->rooms as $item1) {
                    $res['Rooms'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scheduleInfo) {
            $res['ScheduleInfo'] = null !== $this->scheduleInfo ? $this->scheduleInfo->toArray($noStream) : $this->scheduleInfo;
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
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['MusicType'])) {
            $model->musicType = $map['MusicType'];
        }

        if (isset($map['Rooms'])) {
            if (!empty($map['Rooms'])) {
                $model->rooms = [];
                $n1 = 0;
                foreach ($map['Rooms'] as $item1) {
                    $model->rooms[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScheduleInfo'])) {
            $model->scheduleInfo = scheduleInfo::fromMap($map['ScheduleInfo']);
        }

        return $model;
    }
}
