<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExcessivePrimaryKeysResponseBody;

use AlibabaCloud\Dara\Model;

class tables extends Model
{
    /**
     * @var int
     */
    public $columnCount;
    /**
     * @var string
     */
    public $primaryKeyColumns;
    /**
     * @var int
     */
    public $primaryKeyCount;
    /**
     * @var int
     */
    public $primaryKeyIndexSize;
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
        'columnCount'         => 'ColumnCount',
        'primaryKeyColumns'   => 'PrimaryKeyColumns',
        'primaryKeyCount'     => 'PrimaryKeyCount',
        'primaryKeyIndexSize' => 'PrimaryKeyIndexSize',
        'schemaName'          => 'SchemaName',
        'spaceRatio'          => 'SpaceRatio',
        'tableName'           => 'TableName',
        'totalSize'           => 'TotalSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnCount) {
            $res['ColumnCount'] = $this->columnCount;
        }

        if (null !== $this->primaryKeyColumns) {
            $res['PrimaryKeyColumns'] = $this->primaryKeyColumns;
        }

        if (null !== $this->primaryKeyCount) {
            $res['PrimaryKeyCount'] = $this->primaryKeyCount;
        }

        if (null !== $this->primaryKeyIndexSize) {
            $res['PrimaryKeyIndexSize'] = $this->primaryKeyIndexSize;
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
        if (isset($map['ColumnCount'])) {
            $model->columnCount = $map['ColumnCount'];
        }

        if (isset($map['PrimaryKeyColumns'])) {
            $model->primaryKeyColumns = $map['PrimaryKeyColumns'];
        }

        if (isset($map['PrimaryKeyCount'])) {
            $model->primaryKeyCount = $map['PrimaryKeyCount'];
        }

        if (isset($map['PrimaryKeyIndexSize'])) {
            $model->primaryKeyIndexSize = $map['PrimaryKeyIndexSize'];
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
