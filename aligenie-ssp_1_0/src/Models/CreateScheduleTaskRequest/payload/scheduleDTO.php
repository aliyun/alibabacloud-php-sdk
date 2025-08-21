<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\scheduleDTO\once;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\scheduleDTO\statutoryWorkingDay;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\scheduleDTO\weekly;

class scheduleDTO extends Model
{
    /**
     * @var once
     */
    public $once;

    /**
     * @var int
     */
    public $scheduleEndTime;

    /**
     * @var int
     */
    public $scheduleStartTime;

    /**
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
        'once' => 'Once',
        'scheduleEndTime' => 'ScheduleEndTime',
        'scheduleStartTime' => 'ScheduleStartTime',
        'scheduleType' => 'ScheduleType',
        'statutoryWorkingDay' => 'StatutoryWorkingDay',
        'weekly' => 'Weekly',
    ];

    public function validate()
    {
        if (null !== $this->once) {
            $this->once->validate();
        }
        if (null !== $this->statutoryWorkingDay) {
            $this->statutoryWorkingDay->validate();
        }
        if (null !== $this->weekly) {
            $this->weekly->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->once) {
            $res['Once'] = null !== $this->once ? $this->once->toArray($noStream) : $this->once;
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
            $res['StatutoryWorkingDay'] = null !== $this->statutoryWorkingDay ? $this->statutoryWorkingDay->toArray($noStream) : $this->statutoryWorkingDay;
        }

        if (null !== $this->weekly) {
            $res['Weekly'] = null !== $this->weekly ? $this->weekly->toArray($noStream) : $this->weekly;
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
