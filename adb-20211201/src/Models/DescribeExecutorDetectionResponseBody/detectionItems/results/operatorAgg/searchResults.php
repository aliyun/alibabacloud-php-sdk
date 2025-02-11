<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems\results\operatorAgg;

use AlibabaCloud\Dara\Model;

class searchResults extends Model
{
    /**
     * @var float
     */
    public $avgValue;
    /**
     * @var int
     */
    public $maxValue;
    /**
     * @var int
     */
    public $operatorCount;
    /**
     * @var string
     */
    public $operatorName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
