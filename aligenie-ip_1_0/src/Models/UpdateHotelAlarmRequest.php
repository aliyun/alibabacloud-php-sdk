<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmRequest\alarms;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmRequest\scheduleInfo;

class UpdateHotelAlarmRequest extends Model
{
    /**
     * @var alarms[]
     */
    public $alarms;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var scheduleInfo
     */
    public $scheduleInfo;
    protected $_name = [
        'alarms' => 'Alarms',
        'hotelId' => 'HotelId',
        'scheduleInfo' => 'ScheduleInfo',
    ];

    public function validate()
    {
        if (\is_array($this->alarms)) {
            Model::validateArray($this->alarms);
        }
        if (null !== $this->scheduleInfo) {
            $this->scheduleInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarms) {
            if (\is_array($this->alarms)) {
                $res['Alarms'] = [];
                $n1 = 0;
                foreach ($this->alarms as $item1) {
                    $res['Alarms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
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
        if (isset($map['Alarms'])) {
            if (!empty($map['Alarms'])) {
                $model->alarms = [];
                $n1 = 0;
                foreach ($map['Alarms'] as $item1) {
                    $model->alarms[$n1] = alarms::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['ScheduleInfo'])) {
            $model->scheduleInfo = scheduleInfo::fromMap($map['ScheduleInfo']);
        }

        return $model;
    }
}
