<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageTotalResponseBody\data;

use AlibabaCloud\Tea\Model;

class periodCoverage extends Model
{
    /**
     * @description The returned data.
     *
     * @example 2021071500
     *
     * @var string
     */
    public $period;

    /**
     * @description The fee of purchased deduction plans.
     *
     * @example 0.1
     *
     * @var float
     */
    public $usagePercentage;
    protected $_name = [
        'period'          => 'Period',
        'usagePercentage' => 'UsagePercentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->usagePercentage) {
            $res['UsagePercentage'] = $this->usagePercentage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return periodCoverage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['UsagePercentage'])) {
            $model->usagePercentage = $map['UsagePercentage'];
        }

        return $model;
    }
}
