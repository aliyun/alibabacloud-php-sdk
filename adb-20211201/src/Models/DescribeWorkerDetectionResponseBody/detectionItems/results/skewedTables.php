<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponseBody\detectionItems\results;

use AlibabaCloud\Tea\Model;

class skewedTables extends Model
{
    /**
     * @example create table test(id varchar)
     *
     * @var string
     */
    public $DDL;

    /**
     * @example 2
     *
     * @var int
     */
    public $partitionCount;

    /**
     * @example platfunc
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example 1234
     *
     * @var string
     */
    public $shardSkewedRows;

    /**
     * @example sls_log_cheat_action
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 2345
     *
     * @var int
     */
    public $totalDataSize;

    /**
     * @example 2345
     *
     * @var string
     */
    public $totalLocalDataSize;

    /**
     * @example 234
     *
     * @var int
     */
    public $totalPkSize;

    /**
     * @example 234
     *
     * @var int
     */
    public $totalRemoteDataSize;

    /**
     * @example 34
     *
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

    /**
     * @param array $map
     *
     * @return skewedTables
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
