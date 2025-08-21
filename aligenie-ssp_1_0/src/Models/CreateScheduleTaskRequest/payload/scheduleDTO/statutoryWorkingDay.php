<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateScheduleTaskRequest\payload\scheduleDTO;

use AlibabaCloud\Dara\Model;

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
        'hours' => 'Hours',
        'minutes' => 'Minutes',
    ];

    public function validate()
    {
        if (\is_array($this->hours)) {
            Model::validateArray($this->hours);
        }
        if (\is_array($this->minutes)) {
            Model::validateArray($this->minutes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hours) {
            if (\is_array($this->hours)) {
                $res['Hours'] = [];
                $n1 = 0;
                foreach ($this->hours as $item1) {
                    $res['Hours'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->minutes) {
            if (\is_array($this->minutes)) {
                $res['Minutes'] = [];
                $n1 = 0;
                foreach ($this->minutes as $item1) {
                    $res['Minutes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Hours'])) {
            if (!empty($map['Hours'])) {
                $model->hours = [];
                $n1 = 0;
                foreach ($map['Hours'] as $item1) {
                    $model->hours[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Minutes'])) {
            if (!empty($map['Minutes'])) {
                $model->minutes = [];
                $n1 = 0;
                foreach ($map['Minutes'] as $item1) {
                    $model->minutes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
