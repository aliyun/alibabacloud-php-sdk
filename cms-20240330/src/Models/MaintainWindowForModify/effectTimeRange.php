<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\MaintainWindowForModify;

use AlibabaCloud\Dara\Model;

class effectTimeRange extends Model
{
    /**
     * @var int[]
     */
    public $dayInWeek;

    /**
     * @var int
     */
    public $endTimeInMinute;

    /**
     * @var int
     */
    public $startTimeInMinute;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'dayInWeek' => 'dayInWeek',
        'endTimeInMinute' => 'endTimeInMinute',
        'startTimeInMinute' => 'startTimeInMinute',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
        if (\is_array($this->dayInWeek)) {
            Model::validateArray($this->dayInWeek);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dayInWeek) {
            if (\is_array($this->dayInWeek)) {
                $res['dayInWeek'] = [];
                $n1 = 0;
                foreach ($this->dayInWeek as $item1) {
                    $res['dayInWeek'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTimeInMinute) {
            $res['endTimeInMinute'] = $this->endTimeInMinute;
        }

        if (null !== $this->startTimeInMinute) {
            $res['startTimeInMinute'] = $this->startTimeInMinute;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
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
        if (isset($map['dayInWeek'])) {
            if (!empty($map['dayInWeek'])) {
                $model->dayInWeek = [];
                $n1 = 0;
                foreach ($map['dayInWeek'] as $item1) {
                    $model->dayInWeek[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['endTimeInMinute'])) {
            $model->endTimeInMinute = $map['endTimeInMinute'];
        }

        if (isset($map['startTimeInMinute'])) {
            $model->startTimeInMinute = $map['startTimeInMinute'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
