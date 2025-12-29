<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class UpdateHotelAlarmShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alarmsShrink;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $scheduleInfoShrink;
    protected $_name = [
        'alarmsShrink' => 'Alarms',
        'hotelId' => 'HotelId',
        'scheduleInfoShrink' => 'ScheduleInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
