<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumResponseBody\result\dataList;

use AlibabaCloud\Tea\Model;

class scheduleInfo extends Model
{
    /**
     * @var int[]
     */
    public $daysOfWeek;

    /**
     * @var int
     */
    public $hour;

    /**
     * @var int
     */
    public $minute;

    /**
     * @var int
     */
    public $scheduleId;
    protected $_name = [
        'daysOfWeek' => 'DaysOfWeek',
        'hour'       => 'Hour',
        'minute'     => 'Minute',
        'scheduleId' => 'ScheduleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->daysOfWeek) {
            $res['DaysOfWeek'] = $this->daysOfWeek;
        }
        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }
        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DaysOfWeek'])) {
            if (!empty($map['DaysOfWeek'])) {
                $model->daysOfWeek = $map['DaysOfWeek'];
            }
        }
        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }
        if (isset($map['Minute'])) {
            $model->minute = $map['Minute'];
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }

        return $model;
    }
}
