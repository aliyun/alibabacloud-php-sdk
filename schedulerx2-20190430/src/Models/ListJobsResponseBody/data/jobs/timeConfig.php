<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs;

use AlibabaCloud\Tea\Model;

class timeConfig extends Model
{
    /**
     * @description If the TimeType parameter is set to cron, you can specify custom calendar days.
     *
     * @example Business days
     *
     * @var string
     */
    public $calendar;

    /**
     * @description The time offset if the TimeType parameter is set to cron. Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $dataOffset;

    /**
     * @description The time expression. Valid values:
     *
     *   **api**: indicates that no time expression is used to specify the time when to schedule the job.
     *   **fix_rate**: indicates that the job is triggered at a fixed frequency. For example, a value of 30 indicates that the job is triggered every 30 seconds.
     *   **cron**: indicates that a standard CRON expression is used to specify the time when to schedule the job.
     *   **second_delay**: indicates that the job is triggered after a fixed delay. Valid values: 1 to 60. Unit: seconds.
     *
     * @example 0 0/10 * * * ?
     *
     * @var string
     */
    public $timeExpression;

    /**
     * @description The method that is used to specify the time when to schedule the job. Valid values:
     *
     *   **1**: cron
     *   **3**: fix_rate
     *   **4**: second_delay
     *   **100**: api
     *
     * @example 1
     *
     * @var int
     */
    public $timeType;
    protected $_name = [
        'calendar'       => 'Calendar',
        'dataOffset'     => 'DataOffset',
        'timeExpression' => 'TimeExpression',
        'timeType'       => 'TimeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calendar) {
            $res['Calendar'] = $this->calendar;
        }
        if (null !== $this->dataOffset) {
            $res['DataOffset'] = $this->dataOffset;
        }
        if (null !== $this->timeExpression) {
            $res['TimeExpression'] = $this->timeExpression;
        }
        if (null !== $this->timeType) {
            $res['TimeType'] = $this->timeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Calendar'])) {
            $model->calendar = $map['Calendar'];
        }
        if (isset($map['DataOffset'])) {
            $model->dataOffset = $map['DataOffset'];
        }
        if (isset($map['TimeExpression'])) {
            $model->timeExpression = $map['TimeExpression'];
        }
        if (isset($map['TimeType'])) {
            $model->timeType = $map['TimeType'];
        }

        return $model;
    }
}
