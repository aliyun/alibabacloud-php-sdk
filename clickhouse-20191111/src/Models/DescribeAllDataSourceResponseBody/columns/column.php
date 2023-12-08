<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourceResponseBody\columns;

use AlibabaCloud\Tea\Model;

class column extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoIncrementColumn;

    /**
     * @example name
     *
     * @var string
     */
    public $columnName;

    /**
     * @example cc-bp108z124a8o7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example true
     *
     * @var bool
     */
    public $primaryKey;

    /**
     * @example database
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example table
     *
     * @var string
     */
    public $tableName;

    /**
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
