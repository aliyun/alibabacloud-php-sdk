<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results;

use AlibabaCloud\Tea\Model;

class partitionedTables extends Model
{
    /**
     * @example create table test(id varchar)
     *
     * @var string
     */
    public $DDL;

    /**
     * @example 234
     *
     * @var string
     */
    public $partitionCount;

    /**
     * @example [2024,2025]
     *
     * @var string
     */
    public $partitionIds;

    /**
     * @example nxg
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example zhw_place_order
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 1234
     *
     * @var int
     */
    public $totalDataSize;
    protected $_name = [
        'DDL'            => 'DDL',
        'partitionCount' => 'PartitionCount',
        'partitionIds'   => 'PartitionIds',
        'schemaName'     => 'SchemaName',
        'tableName'      => 'TableName',
        'totalDataSize'  => 'TotalDataSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DDL) {
            $res['DDL'] = $this->DDL;
        }
        if (null !== $this->partitionCount) {
            $res['PartitionCount'] = $this->partitionCount;
        }
        if (null !== $this->partitionIds) {
            $res['PartitionIds'] = $this->partitionIds;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->totalDataSize) {
            $res['TotalDataSize'] = $this->totalDataSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return partitionedTables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DDL'])) {
            $model->DDL = $map['DDL'];
        }
        if (isset($map['PartitionCount'])) {
            $model->partitionCount = $map['PartitionCount'];
        }
        if (isset($map['PartitionIds'])) {
            $model->partitionIds = $map['PartitionIds'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TotalDataSize'])) {
            $model->totalDataSize = $map['TotalDataSize'];
        }

        return $model;
    }
}
