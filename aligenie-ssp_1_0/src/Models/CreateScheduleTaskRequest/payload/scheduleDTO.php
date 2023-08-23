<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\scheduleDTO\once;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\scheduleDTO\statutoryWorkingDay;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\scheduleDTO\weekly;
use AlibabaCloud\Tea\Model;

class scheduleDTO extends Model
{
    /**
     * @var once
     */
    public $once;

    /**
     * @example 1661589255000
     *
     * @var int
     */
    public $scheduleEndTime;

    /**
     * @example 1656318855000
     *
     * @var int
     */
    public $scheduleStartTime;

    /**
     * @example ONCE
     *
     * @var string
     */
    public $scheduleType;

    /**
     * @var statutoryWorkingDay
     */
    public $statutoryWorkingDay;

    /**
     * @var weekly
     */
    public $weekly;
    protected $_name = [
        'once'                => 'Once',
        'scheduleEndTime'     => 'ScheduleEndTime',
        'scheduleStartTime'   => 'ScheduleStartTime',
        'scheduleType'        => 'ScheduleType',
        'statutoryWorkingDay' => 'StatutoryWorkingDay',
        'weekly'              => 'Weekly',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->once) {
            $res['Once'] = null !== $this->once ? $this->once->toMap() : null;
        }
        if (null !== $this->scheduleEndTime) {
            $res['ScheduleEndTime'] = $this->scheduleEndTime;
        }
        if (null !== $this->scheduleStartTime) {
            $res['ScheduleStartTime'] = $this->scheduleStartTime;
        }
        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }
        if (null !== $this->statutoryWorkingDay) {
            $res['StatutoryWorkingDay'] = null !== $this->statutoryWorkingDay ? $this->statutoryWorkingDay->toMap() : null;
        }
        if (null !== $this->weekly) {
            $res['Weekly'] = null !== $this->weekly ? $this->weekly->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Once'])) {
            $model->once = once::fromMap($map['Once']);
        }
        if (isset($map['ScheduleEndTime'])) {
            $model->scheduleEndTime = $map['ScheduleEndTime'];
        }
        if (isset($map['ScheduleStartTime'])) {
            $model->scheduleStartTime = $map['ScheduleStartTime'];
        }
        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }
        if (isset($map['StatutoryWorkingDay'])) {
            $model->statutoryWorkingDay = statutoryWorkingDay::fromMap($map['StatutoryWorkingDay']);
        }
        if (isset($map['Weekly'])) {
            $model->weekly = weekly::fromMap($map['Weekly']);
        }

        return $model;
    }
}
