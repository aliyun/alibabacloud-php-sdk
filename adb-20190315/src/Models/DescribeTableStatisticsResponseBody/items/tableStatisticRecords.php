<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableStatisticsResponseBody\items;

use AlibabaCloud\Tea\Model;

class tableStatisticRecords extends Model
{
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
    public $rowCount;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var int
     */
    public $indexSize;

    /**
     * @var int
     */
    public $primaryKeyIndexSize;

    /**
     * @var int
     */
    public $partitionCount;

    /**
     * @var int
     */
    public $coldDataSize;
    protected $_name = [
        'schemaName'          => 'SchemaName',
        'tableName'           => 'TableName',
        'rowCount'            => 'RowCount',
        'dataSize'            => 'DataSize',
        'indexSize'           => 'IndexSize',
        'primaryKeyIndexSize' => 'PrimaryKeyIndexSize',
        'partitionCount'      => 'PartitionCount',
        'coldDataSize'        => 'ColdDataSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->indexSize) {
            $res['IndexSize'] = $this->indexSize;
        }
        if (null !== $this->primaryKeyIndexSize) {
            $res['PrimaryKeyIndexSize'] = $this->primaryKeyIndexSize;
        }
        if (null !== $this->partitionCount) {
            $res['PartitionCount'] = $this->partitionCount;
        }
        if (null !== $this->coldDataSize) {
            $res['ColdDataSize'] = $this->coldDataSize;
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
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['IndexSize'])) {
            $model->indexSize = $map['IndexSize'];
        }
        if (isset($map['PrimaryKeyIndexSize'])) {
            $model->primaryKeyIndexSize = $map['PrimaryKeyIndexSize'];
        }
        if (isset($map['PartitionCount'])) {
            $model->partitionCount = $map['PartitionCount'];
        }
        if (isset($map['ColdDataSize'])) {
            $model->coldDataSize = $map['ColdDataSize'];
        }

        return $model;
    }
}
