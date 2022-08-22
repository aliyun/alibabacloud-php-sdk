<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\scheduleDTO;

use AlibabaCloud\Tea\Model;

class weekly extends Model
{
    /**
     * @var int[]
     */
    public $daysOfWeek;

    /**
     * @var int[]
     */
    public $hours;

    /**
     * @var int[]
     */
    public $minutes;
    protected $_name = [
        'daysOfWeek' => 'DaysOfWeek',
        'hours'      => 'Hours',
        'minutes'    => 'Minutes',
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
        if (null !== $this->hours) {
            $res['Hours'] = $this->hours;
        }
        if (null !== $this->minutes) {
            $res['Minutes'] = $this->minutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return weekly
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DaysOfWeek'])) {
            if (!empty($map['DaysOfWeek'])) {
                $model->daysOfWeek = $map['DaysOfWeek'];
            }
        }
        if (isset($map['Hours'])) {
            if (!empty($map['Hours'])) {
                $model->hours = $map['Hours'];
            }
        }
        if (isset($map['Minutes'])) {
            if (!empty($map['Minutes'])) {
                $model->minutes = $map['Minutes'];
            }
        }

        return $model;
    }
}
