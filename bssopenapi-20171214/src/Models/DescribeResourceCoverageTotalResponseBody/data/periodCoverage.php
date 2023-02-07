<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalResponseBody\data;

use AlibabaCloud\Tea\Model;

class periodCoverage extends Model
{
    /**
     * @description The coverage rate of deduction plans within the specified period.
     *
     * @example 0.1
     *
     * @var float
     */
    public $coveragePercentage;

    /**
     * @description The period.
     *
     * The value is in the format of yyyyMMddHH.
     * @example 2020110100
     *
     * @var string
     */
    public $period;
    protected $_name = [
        'coveragePercentage' => 'CoveragePercentage',
        'period'             => 'Period',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coveragePercentage) {
            $res['CoveragePercentage'] = $this->coveragePercentage;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (isset($map['CoveragePercentage'])) {
            $model->coveragePercentage = $map['CoveragePercentage'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
