<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalResponseBody\data;

use AlibabaCloud\Dara\Model;

class periodCoverage extends Model
{
    /**
     * @var float
     */
    public $coveragePercentage;

    /**
     * @var string
     */
    public $period;
    protected $_name = [
        'coveragePercentage' => 'CoveragePercentage',
        'period' => 'Period',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
