<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\MaintainWindowForView;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayInWeek) {
            $res['dayInWeek'] = $this->dayInWeek;
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

    /**
     * @param array $map
     *
     * @return effectTimeRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dayInWeek'])) {
            if (!empty($map['dayInWeek'])) {
                $model->dayInWeek = $map['dayInWeek'];
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
