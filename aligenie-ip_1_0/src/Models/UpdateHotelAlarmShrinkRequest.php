<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class UpdateHotelAlarmShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alarmsShrink;

    /**
     * @example a7a381a668bc485980bed3876a75e013
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $scheduleInfoShrink;
    protected $_name = [
        'alarmsShrink'       => 'Alarms',
        'hotelId'            => 'HotelId',
        'scheduleInfoShrink' => 'ScheduleInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmsShrink) {
            $res['Alarms'] = $this->alarmsShrink;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->scheduleInfoShrink) {
            $res['ScheduleInfo'] = $this->scheduleInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHotelAlarmShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alarms'])) {
            $model->alarmsShrink = $map['Alarms'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['ScheduleInfo'])) {
            $model->scheduleInfoShrink = $map['ScheduleInfo'];
        }

        return $model;
    }
}
