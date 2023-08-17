<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableStatisticsResponseBody\items;

use AlibabaCloud\Tea\Model;

class tableStatisticRecords extends Model
{
    /**
     * @description The total amount of cold data. Unit: byte.
     *
     * >  The parameter is returned only when the engine version of the cluster is 3.1.3.4 or later.
     * @example 0
     *
     * @var int
     */
    public $coldDataSize;

    /**
     * @description The amount of data in the table. Unit: byte.
     *
     * @example 15592
     *
     * @var int
     */
    public $dataSize;

    /**
     * @description The amount of data in indexes. Unit: byte.
     *
     * @example 3076
     *
     * @var int
     */
    public $indexSize;

    /**
     * @description The number of partitions.
     *
     * @example 1
     *
     * @var int
     */
    public $partitionCount;

    /**
     * @description The amount of data in primary key indexes. Unit: byte.
     *
     * @example 16340
     *
     * @var int
     */
    public $primaryKeyIndexSize;

    /**
     * @description The number of rows in the table.
     *
     * @example 3
     *
     * @var int
     */
    public $rowCount;

    /**
     * @description The name of the database.
     *
     * @example test_schema
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name of the table.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'coldDataSize'        => 'ColdDataSize',
        'dataSize'            => 'DataSize',
        'indexSize'           => 'IndexSize',
        'partitionCount'      => 'PartitionCount',
        'primaryKeyIndexSize' => 'PrimaryKeyIndexSize',
        'rowCount'            => 'RowCount',
        'schemaName'          => 'SchemaName',
        'tableName'           => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldDataSize) {
            $res['ColdDataSize'] = $this->coldDataSize;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->indexSize) {
            $res['IndexSize'] = $this->indexSize;
        }
        if (null !== $this->partitionCount) {
            $res['PartitionCount'] = $this->partitionCount;
        }
        if (null !== $this->primaryKeyIndexSize) {
            $res['PrimaryKeyIndexSize'] = $this->primaryKeyIndexSize;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableStatisticRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColdDataSize'])) {
            $model->coldDataSize = $map['ColdDataSize'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['IndexSize'])) {
            $model->indexSize = $map['IndexSize'];
        }
        if (isset($map['PartitionCount'])) {
            $model->partitionCount = $map['PartitionCount'];
        }
        if (isset($map['PrimaryKeyIndexSize'])) {
            $model->primaryKeyIndexSize = $map['PrimaryKeyIndexSize'];
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
