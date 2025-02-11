<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results;

use AlibabaCloud\Dara\Model;

class skewedTables extends Model
{
    /**
     * @var string
     */
    public $DDL;
    /**
     * @var int
     */
    public $partitionCount;
    /**
     * @var string
     */
    public $schemaName;
    /**
     * @var string
     */
    public $shardSkewedRows;
    /**
     * @var string
     */
    public $tableName;
    /**
     * @var int
     */
    public $totalDataSize;
    /**
     * @var string
     */
    public $totalLocalDataSize;
    /**
     * @var int
     */
    public $totalPkSize;
    /**
     * @var int
     */
    public $totalRemoteDataSize;
    /**
     * @var int
     */
    public $totalRowCount;
    protected $_name = [
        'DDL'                 => 'DDL',
        'partitionCount'      => 'PartitionCount',
        'schemaName'          => 'SchemaName',
        'shardSkewedRows'     => 'ShardSkewedRows',
        'tableName'           => 'TableName',
        'totalDataSize'       => 'TotalDataSize',
        'totalLocalDataSize'  => 'TotalLocalDataSize',
        'totalPkSize'         => 'TotalPkSize',
        'totalRemoteDataSize' => 'TotalRemoteDataSize',
        'totalRowCount'       => 'TotalRowCount',
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

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->shardSkewedRows) {
            $res['ShardSkewedRows'] = $this->shardSkewedRows;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->totalDataSize) {
            $res['TotalDataSize'] = $this->totalDataSize;
        }

        if (null !== $this->totalLocalDataSize) {
            $res['TotalLocalDataSize'] = $this->totalLocalDataSize;
        }

        if (null !== $this->totalPkSize) {
            $res['TotalPkSize'] = $this->totalPkSize;
        }

        if (null !== $this->totalRemoteDataSize) {
            $res['TotalRemoteDataSize'] = $this->totalRemoteDataSize;
        }

        if (null !== $this->totalRowCount) {
            $res['TotalRowCount'] = $this->totalRowCount;
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

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['ShardSkewedRows'])) {
            $model->shardSkewedRows = $map['ShardSkewedRows'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TotalDataSize'])) {
            $model->totalDataSize = $map['TotalDataSize'];
        }

        if (isset($map['TotalLocalDataSize'])) {
            $model->totalLocalDataSize = $map['TotalLocalDataSize'];
        }

        if (isset($map['TotalPkSize'])) {
            $model->totalPkSize = $map['TotalPkSize'];
        }

        if (isset($map['TotalRemoteDataSize'])) {
            $model->totalRemoteDataSize = $map['TotalRemoteDataSize'];
        }

        if (isset($map['TotalRowCount'])) {
            $model->totalRowCount = $map['TotalRowCount'];
        }

        return $model;
    }
}
