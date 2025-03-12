<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO;

use AlibabaCloud\Tea\Model;

class fullPlan extends Model
{
    /**
     * @description An array that consists of the days of a week on which the backup is performed.
     *
     * @var string[]
     */
    public $days;

    /**
     * @description The interval of backup tasks.
     *
     * @example 2
     *
     * @var int
     */
    public $interval;

    /**
     * @description The unit of the interval. Valid values:
     *
     *   **hourly**: hour
     *   **daily**: day
     *   **weekly**: week
     *
     * @example daily
     *
     * @var string
     */
    public $planType;

    /**
     * @description The time when the full backup started. The time is in the HH:mm:ss format.
     *
     * @example 00:10:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'days'      => 'Days',
        'interval'  => 'Interval',
        'planType'  => 'PlanType',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Days'])) {
            if (!empty($map['Days'])) {
                $model->days = $map['Days'];
            }
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
