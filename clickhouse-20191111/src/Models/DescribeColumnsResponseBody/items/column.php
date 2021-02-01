<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeColumnsResponseBody\items;

use AlibabaCloud\Tea\Model;

class column extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var bool
     */
    public $autoIncrementColumn;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $schemaName;
    protected $_name = [
        'type'                => 'Type',
        'columnName'          => 'ColumnName',
        'tableName'           => 'TableName',
        'autoIncrementColumn' => 'AutoIncrementColumn',
        'DBClusterId'         => 'DBClusterId',
        'primaryKey'          => 'PrimaryKey',
        'schemaName'          => 'SchemaName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->autoIncrementColumn) {
            $res['AutoIncrementColumn'] = $this->autoIncrementColumn;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['AutoIncrementColumn'])) {
            $model->autoIncrementColumn = $map['AutoIncrementColumn'];
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

        return $model;
    }
}
