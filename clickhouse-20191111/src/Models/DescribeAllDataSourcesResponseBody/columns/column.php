<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourcesResponseBody\columns;

use AlibabaCloud\Tea\Model;

class column extends Model
{
    /**
     * @description Indicates whether the column is an auto-increment column. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $autoIncrementColumn;

    /**
     * @description The column name.
     *
     * @example name
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The cluster ID.
     *
     * @example cc-bp108z124a8o7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Indicates whether the column is the primary key of the table. Valid values:
     *
     *   **true**: The column is the primary key of the table.
     *   **false**: The column is not the primary key of the table.
     *
     * @example true
     *
     * @var bool
     */
    public $primaryKey;

    /**
     * @description The database name.
     *
     * @example database
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The table name.
     *
     * @example table
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The column type.
     *
     * @example String
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoIncrementColumn' => 'AutoIncrementColumn',
        'columnName'          => 'ColumnName',
        'DBClusterId'         => 'DBClusterId',
        'primaryKey'          => 'PrimaryKey',
        'schemaName'          => 'SchemaName',
        'tableName'           => 'TableName',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoIncrementColumn) {
            $res['AutoIncrementColumn'] = $this->autoIncrementColumn;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return column
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoIncrementColumn'])) {
            $model->autoIncrementColumn = $map['AutoIncrementColumn'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
