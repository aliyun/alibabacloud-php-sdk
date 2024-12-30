<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results\topAccessTables;

use AlibabaCloud\Tea\Model;

class searchResults extends Model
{
    /**
     * @example 1111
     *
     * @var int
     */
    public $accessCount;

    /**
     * @example 234
     *
     * @var float
     */
    public $avgScanCost;

    /**
     * @example 234
     *
     * @var float
     */
    public $avgScanSize;

    /**
     * @example 345
     *
     * @var int
     */
    public $maxScanCost;

    /**
     * @example 2345
     *
     * @var int
     */
    public $maxScanSize;

    /**
     * @example tiberias_2copt_origin_order_goods_info
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return searchResults
     */
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
