<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableStatisticsResponseBody\items;

use AlibabaCloud\Tea\Model;

class tableStatisticRecords extends Model
{
    /**
     * @var int
     */
    public $coldDataSize;

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
    public $partitionCount;

    /**
     * @var int
     */
    public $primaryKeyIndexSize;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var string
     */
    public $schemaName;

    /**
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
