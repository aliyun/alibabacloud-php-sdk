<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalResponseBody\data;

use AlibabaCloud\Tea\Model;

class totalCoverage extends Model
{
    /**
     * @var string
     */
    public $capacityUnit;

    /**
     * @var float
     */
    public $deductQuantity;

    /**
     * @var float
     */
    public $coveragePercentage;

    /**
     * @var float
     */
    public $totalQuantity;
    protected $_name = [
        'capacityUnit'       => 'CapacityUnit',
        'deductQuantity'     => 'DeductQuantity',
        'coveragePercentage' => 'CoveragePercentage',
        'totalQuantity'      => 'TotalQuantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityUnit) {
            $res['CapacityUnit'] = $this->capacityUnit;
        }
        if (null !== $this->deductQuantity) {
            $res['DeductQuantity'] = $this->deductQuantity;
        }
        if (null !== $this->coveragePercentage) {
            $res['CoveragePercentage'] = $this->coveragePercentage;
        }
        if (null !== $this->totalQuantity) {
            $res['TotalQuantity'] = $this->totalQuantity;
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
        if (isset($map['CapacityUnit'])) {
            $model->capacityUnit = $map['CapacityUnit'];
        }
        if (isset($map['DeductQuantity'])) {
            $model->deductQuantity = $map['DeductQuantity'];
        }
        if (isset($map['CoveragePercentage'])) {
            $model->coveragePercentage = $map['CoveragePercentage'];
        }
        if (isset($map['TotalQuantity'])) {
            $model->totalQuantity = $map['TotalQuantity'];
        }

        return $model;
    }
}
