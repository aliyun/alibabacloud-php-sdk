<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\scheduleDTO;

use AlibabaCloud\Tea\Model;

class statutoryWorkingDay extends Model
{
    /**
     * @var int[]
     */
    public $hours;

    /**
     * @var int[]
     */
    public $minutes;
    protected $_name = [
        'hours'   => 'Hours',
        'minutes' => 'Minutes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return statutoryWorkingDay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
