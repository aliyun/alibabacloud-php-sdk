<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageTotalResponseBody\data;

use AlibabaCloud\Tea\Model;

class totalCoverage extends Model
{
    /**
     * @var float
     */
    public $coveragePercentage;

    /**
     * @var float
     */
    public $deductAmount;
    protected $_name = [
        'coveragePercentage' => 'CoveragePercentage',
        'deductAmount'       => 'DeductAmount',
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
        if (null !== $this->deductAmount) {
            $res['DeductAmount'] = $this->deductAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return totalCoverage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoveragePercentage'])) {
            $model->coveragePercentage = $map['CoveragePercentage'];
        }
        if (isset($map['DeductAmount'])) {
            $model->deductAmount = $map['DeductAmount'];
        }

        return $model;
    }
}
