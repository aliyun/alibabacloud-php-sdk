<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO;

use AlibabaCloud\Tea\Model;

class fullPlan extends Model
{
    /**
     * @var string[]
     */
    public $days;

    /**
     * @example 2
     *
     * @var int
     */
    public $interval;

    /**
     * @example daily
     *
     * @var string
     */
    public $planType;

    /**
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
