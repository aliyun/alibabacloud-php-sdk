<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityStatisticsResponseBody\scalingActivityStatusStatistics;

use AlibabaCloud\Dara\Model;

class statistic extends Model
{
    /**
     * @var int
     */
    public $failedActivityCount;

    /**
     * @var int
     */
    public $successActivityCount;

    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $warningActivityCount;
    protected $_name = [
        'failedActivityCount' => 'FailedActivityCount',
        'successActivityCount' => 'SuccessActivityCount',
        'time' => 'Time',
        'warningActivityCount' => 'WarningActivityCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedActivityCount) {
            $res['FailedActivityCount'] = $this->failedActivityCount;
        }

        if (null !== $this->successActivityCount) {
            $res['SuccessActivityCount'] = $this->successActivityCount;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->warningActivityCount) {
            $res['WarningActivityCount'] = $this->warningActivityCount;
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
        if (isset($map['FailedActivityCount'])) {
            $model->failedActivityCount = $map['FailedActivityCount'];
        }

        if (isset($map['SuccessActivityCount'])) {
            $model->successActivityCount = $map['SuccessActivityCount'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['WarningActivityCount'])) {
            $model->warningActivityCount = $map['WarningActivityCount'];
        }

        return $model;
    }
}
