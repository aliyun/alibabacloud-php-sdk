<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class CreateHotelAlarmShrinkRequest extends Model
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
     * @var string
     */
    public $roomsShrink;

    /**
     * @var string
     */
    public $scheduleInfoShrink;
    protected $_name = [
        'hotelId'            => 'HotelId',
        'musicType'          => 'MusicType',
        'roomsShrink'        => 'Rooms',
        'scheduleInfoShrink' => 'ScheduleInfo',
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
        if (null !== $this->roomsShrink) {
            $res['Rooms'] = $this->roomsShrink;
        }
        if (null !== $this->scheduleInfoShrink) {
            $res['ScheduleInfo'] = $this->scheduleInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHotelAlarmShrinkRequest
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
            $model->roomsShrink = $map['Rooms'];
        }
        if (isset($map['ScheduleInfo'])) {
            $model->scheduleInfoShrink = $map['ScheduleInfo'];
        }

        return $model;
    }
}
