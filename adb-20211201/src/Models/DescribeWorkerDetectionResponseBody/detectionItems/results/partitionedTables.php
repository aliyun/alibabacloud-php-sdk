<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results;

use AlibabaCloud\Dara\Model;

class partitionedTables extends Model
{
    /**
     * @var string
     */
    public $DDL;
    /**
     * @var string
     */
    public $partitionCount;
    /**
     * @var string
     */
    public $partitionIds;
    /**
     * @var string
     */
    public $schemaName;
    /**
     * @var string
     */
    public $tableName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
