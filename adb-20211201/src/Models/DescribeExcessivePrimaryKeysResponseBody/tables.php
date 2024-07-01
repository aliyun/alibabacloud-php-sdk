<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExcessivePrimaryKeysResponseBody;

use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @description The total number of columns.
     *
     * @example 21
     *
     * @var int
     */
    public $columnCount;

    /**
     * @description The queried primary key fields.
     *
     * @example 2
     *
     * @var string
     */
    public $primaryKeyColumns;

    /**
     * @description The number of primary key fields.
     *
     * @example 3
     *
     * @var int
     */
    public $primaryKeyCount;

    /**
     * @description The data size of primary key indexes. Unit: bytes.
     *
     * @example 222
     *
     * @var int
     */
    public $primaryKeyIndexSize;

    /**
     * @description The name of the database.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The percentage of the table size. Unit: %.
     *
     * >  Formula: Table storage percentage = Total data size of a table/Total data size of the cluster × 100%.
     * @example 23
     *
     * @var float
     */
    public $spaceRatio;

    /**
     * @description The name of the table
     *
     * @example test
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The cold data size. Unit: bytes.
     *
     * >  Formula: Cold data size = Data size of table records + Data size of regular indexes + Data size of primary key indexes + Data size of other data.
     * @example 4
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return tables
     */
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
