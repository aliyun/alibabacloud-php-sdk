<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableStatisticsResponseBody\items;

use AlibabaCloud\Dara\Model;

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
    public $hotDataSize;

    /**
     * @var int
     */
    public $indexSize;

    /**
     * @var int
     */
    public $otherSize;

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
     * @var float
     */
    public $spaceRatio;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'coldDataSize' => 'ColdDataSize',
        'dataSize' => 'DataSize',
        'hotDataSize' => 'HotDataSize',
        'indexSize' => 'IndexSize',
        'otherSize' => 'OtherSize',
        'partitionCount' => 'PartitionCount',
        'primaryKeyIndexSize' => 'PrimaryKeyIndexSize',
        'rowCount' => 'RowCount',
        'schemaName' => 'SchemaName',
        'spaceRatio' => 'SpaceRatio',
        'tableName' => 'TableName',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coldDataSize) {
            $res['ColdDataSize'] = $this->coldDataSize;
        }

        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

        if (null !== $this->hotDataSize) {
            $res['HotDataSize'] = $this->hotDataSize;
        }

        if (null !== $this->indexSize) {
            $res['IndexSize'] = $this->indexSize;
        }

        if (null !== $this->otherSize) {
            $res['OtherSize'] = $this->otherSize;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColdDataSize'])) {
            $model->coldDataSize = $map['ColdDataSize'];
        }

        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

        if (isset($map['HotDataSize'])) {
            $model->hotDataSize = $map['HotDataSize'];
        }

        if (isset($map['IndexSize'])) {
            $model->indexSize = $map['IndexSize'];
        }

        if (isset($map['OtherSize'])) {
            $model->otherSize = $map['OtherSize'];
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
