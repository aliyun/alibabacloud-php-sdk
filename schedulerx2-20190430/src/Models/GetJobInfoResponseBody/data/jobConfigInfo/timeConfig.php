<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo;

use AlibabaCloud\Tea\Model;

class timeConfig extends Model
{
    /**
     * @description Custom calendar days specified if TimeType is set to **1** (cron).
     *
     * @example Business days
     *
     * @var string
     */
    public $calendar;

    /**
     * @description The time offset specified if TimeType is set to **1** (cron). Unit: seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $dataOffset;

    /**
     * @description The time expression specified based on the value of TimeType:
     *
     *   If TimeType is set to **100** (api), no time expression is required.
     *   If TimeType is set to **3** (fix_rate), this parameter value indicates the specific and fixed frequency. For example, if the value is 30, the system triggers a job every 30 seconds.
     *   If TimeType is set to **1** (cron), this parameter value indicates the standard CRON expression used to specify the time when to schedule the job.
     *   If TimeType is set to **4** (second_delay), this parameter value indicates the fixed delay after which the job is triggered. Valid values: 1 to 60. Unit: seconds.
     *
     * @example 0 0/10 * * * ?
     *
     * @var string
     */
    public $timeExpression;

    /**
     * @description The time type. Valid values:
     *
     *   **1**: cron
     *   **3**: fix_rate
     *   **4**: second_delay
     *   **5**: one_time
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
