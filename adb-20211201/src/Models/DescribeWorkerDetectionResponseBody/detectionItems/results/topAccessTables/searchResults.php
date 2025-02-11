<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\topAccessTables;

use AlibabaCloud\Dara\Model;

class searchResults extends Model
{
    /**
     * @var int
     */
    public $accessCount;
    /**
     * @var float
     */
    public $avgScanCost;
    /**
     * @var float
     */
    public $avgScanSize;
    /**
     * @var int
     */
    public $maxScanCost;
    /**
     * @var int
     */
    public $maxScanSize;
    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'accessCount' => 'AccessCount',
        'avgScanCost' => 'AvgScanCost',
        'avgScanSize' => 'AvgScanSize',
        'maxScanCost' => 'MaxScanCost',
        'maxScanSize' => 'MaxScanSize',
        'tableName'   => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessCount) {
            $res['AccessCount'] = $this->accessCount;
        }

        if (null !== $this->avgScanCost) {
            $res['AvgScanCost'] = $this->avgScanCost;
        }

        if (null !== $this->avgScanSize) {
            $res['AvgScanSize'] = $this->avgScanSize;
        }

        if (null !== $this->maxScanCost) {
            $res['MaxScanCost'] = $this->maxScanCost;
        }

        if (null !== $this->maxScanSize) {
            $res['MaxScanSize'] = $this->maxScanSize;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['AccessCount'])) {
            $model->accessCount = $map['AccessCount'];
        }

        if (isset($map['AvgScanCost'])) {
            $model->avgScanCost = $map['AvgScanCost'];
        }

        if (isset($map['AvgScanSize'])) {
            $model->avgScanSize = $map['AvgScanSize'];
        }

        if (isset($map['MaxScanCost'])) {
            $model->maxScanCost = $map['MaxScanCost'];
        }

        if (isset($map['MaxScanSize'])) {
            $model->maxScanSize = $map['MaxScanSize'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
