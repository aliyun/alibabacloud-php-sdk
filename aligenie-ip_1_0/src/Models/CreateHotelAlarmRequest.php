<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\CreateHotelAlarmRequest\scheduleInfo;
use AlibabaCloud\Tea\Model;

class CreateHotelAlarmRequest extends Model
{
    /**
     * @example cf2446fc9d144c85aaee4f9ae20a96e7
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example DOU_YIN
     *
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
        'hotelId'      => 'HotelId',
        'musicType'    => 'MusicType',
        'rooms'        => 'Rooms',
        'scheduleInfo' => 'ScheduleInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->musicType) {
            $res['MusicType'] = $this->musicType;
        }
        if (null !== $this->rooms) {
            $res['Rooms'] = $this->rooms;
        }
        if (null !== $this->scheduleInfo) {
            $res['ScheduleInfo'] = null !== $this->scheduleInfo ? $this->scheduleInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHotelAlarmRequest
     */
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
                $model->rooms = $map['Rooms'];
            }
        }
        if (isset($map['ScheduleInfo'])) {
            $model->scheduleInfo = scheduleInfo::fromMap($map['ScheduleInfo']);
        }

        return $model;
    }
}
