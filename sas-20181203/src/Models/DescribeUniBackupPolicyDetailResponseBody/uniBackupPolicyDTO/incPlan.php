<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO;

use AlibabaCloud\Tea\Model;

class incPlan extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string[]
     */
    public $days;
    protected $_name = [
        'startTime' => 'StartTime',
        'planType'  => 'PlanType',
        'interval'  => 'Interval',
        'days'      => 'Days',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return incPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Days'])) {
            if (!empty($map['Days'])) {
                $model->days = $map['Days'];
            }
        }

        return $model;
    }
}
