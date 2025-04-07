<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels\nodePool\recurrenceSchedules;

use AlibabaCloud\Tea\Model;

class timerPeriods extends Model
{
    /**
     * @description The number of destination resources.
     *
     * @example 5
     *
     * @var int
     */
    public $amount;

    /**
     * @description The time when the scaling policy ends. Format: HH:mm.
     *
     * @example 11:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time when the scaling policy starts. Format: HH:mm.
     *
     * @example 09:30
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'amount' => 'Amount',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timerPeriods
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
