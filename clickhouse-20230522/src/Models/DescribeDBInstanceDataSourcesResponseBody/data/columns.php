<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceDataSourcesResponseBody\data;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @description The column name.
     *
     * @example c31
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The description of the database account.
     *
     * @example Used for test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The database name.
     *
     * @example dbtest
     *
     * @var string
     */
    public $DBName;

    /**
     * @description Indicates whether the column is the primary key of the table. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var string
     */
    public $primaryKey;

    /**
     * @description The table name.
     *
     * @example tableTest
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The type of the stored data.
     *
     * @example UInt64
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'columnName' => 'ColumnName',
        'comment' => 'Comment',
        'DBName' => 'DBName',
        'primaryKey' => 'PrimaryKey',
        'tableName' => 'TableName',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
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
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
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
