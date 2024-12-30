<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTablePartitionDiagnoseResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example [20210110, 20210113,20210123]
     *
     * @var string
     */
    public $partitionDetail;

    /**
     * @example 2
     *
     * @var int
     */
    public $partitionNumber;

    /**
     * @example test_db
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example 66.23
     *
     * @var float
     */
    public $spaceRatio;

    /**
     * @example user
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 42949672960
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'partitionDetail' => 'PartitionDetail',
        'partitionNumber' => 'PartitionNumber',
        'schemaName'      => 'SchemaName',
        'spaceRatio'      => 'SpaceRatio',
        'tableName'       => 'TableName',
        'totalSize'       => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partitionDetail) {
            $res['PartitionDetail'] = $this->partitionDetail;
        }
        if (null !== $this->partitionNumber) {
            $res['PartitionNumber'] = $this->partitionNumber;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->spaceRatio) {
            $res['SpaceRatio'] = $this->spaceRatio;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PartitionDetail'])) {
            $model->partitionDetail = $map['PartitionDetail'];
        }
        if (isset($map['PartitionNumber'])) {
            $model->partitionNumber = $map['PartitionNumber'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SpaceRatio'])) {
            $model->spaceRatio = $map['SpaceRatio'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
