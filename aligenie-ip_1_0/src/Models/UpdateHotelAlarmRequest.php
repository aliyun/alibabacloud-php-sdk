<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmRequest\alarms;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelAlarmRequest\scheduleInfo;
use AlibabaCloud\Tea\Model;

class UpdateHotelAlarmRequest extends Model
{
    /**
     * @var alarms[]
     */
    public $alarms;

    /**
     * @example a7a381a668bc485980bed3876a75e013
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var scheduleInfo
     */
    public $scheduleInfo;
    protected $_name = [
        'alarms'       => 'Alarms',
        'hotelId'      => 'HotelId',
        'scheduleInfo' => 'ScheduleInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarms) {
            $res['Alarms'] = [];
            if (null !== $this->alarms && \is_array($this->alarms)) {
                $n = 0;
                foreach ($this->alarms as $item) {
                    $res['Alarms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->scheduleInfo) {
            $res['ScheduleInfo'] = null !== $this->scheduleInfo ? $this->scheduleInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHotelAlarmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alarms'])) {
            if (!empty($map['Alarms'])) {
                $model->alarms = [];
                $n             = 0;
                foreach ($map['Alarms'] as $item) {
                    $model->alarms[$n++] = null !== $item ? alarms::fromMap($item) : $item;
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
