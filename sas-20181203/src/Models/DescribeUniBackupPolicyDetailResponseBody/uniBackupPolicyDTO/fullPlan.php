<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO;

use AlibabaCloud\Dara\Model;

class fullPlan extends Model
{
    /**
     * @var string[]
     */
    public $days;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var string
     */
    public $planType;
    /**
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
        if (\is_array($this->days)) {
            Model::validateArray($this->days);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->days) {
            if (\is_array($this->days)) {
                $res['Days'] = [];
                $n1          = 0;
                foreach ($this->days as $item1) {
                    $res['Days'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Days'])) {
            if (!empty($map['Days'])) {
                $model->days = [];
                $n1          = 0;
                foreach ($map['Days'] as $item1) {
                    $model->days[$n1++] = $item1;
                }
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
