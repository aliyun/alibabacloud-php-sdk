<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\operatorAgg;

use AlibabaCloud\Tea\Model;

class searchResults extends Model
{
    /**
     * @example 2234
     *
     * @var float
     */
    public $avgValue;

    /**
     * @example 444
     *
     * @var int
     */
    public $maxValue;

    /**
     * @example 1234
     *
     * @var int
     */
    public $operatorCount;

    /**
     * @example Aggregation
     *
     * @var string
     */
    public $operatorName;

    /**
     * @example 123
     *
     * @var int
     */
    public $totalValue;
    protected $_name = [
        'avgValue'      => 'AvgValue',
        'maxValue'      => 'MaxValue',
        'operatorCount' => 'OperatorCount',
        'operatorName'  => 'OperatorName',
        'totalValue'    => 'TotalValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgValue) {
            $res['AvgValue'] = $this->avgValue;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->operatorCount) {
            $res['OperatorCount'] = $this->operatorCount;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->totalValue) {
            $res['TotalValue'] = $this->totalValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgValue'])) {
            $model->avgValue = $map['AvgValue'];
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['OperatorCount'])) {
            $model->operatorCount = $map['OperatorCount'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['TotalValue'])) {
            $model->totalValue = $map['TotalValue'];
        }

        return $model;
    }
}
