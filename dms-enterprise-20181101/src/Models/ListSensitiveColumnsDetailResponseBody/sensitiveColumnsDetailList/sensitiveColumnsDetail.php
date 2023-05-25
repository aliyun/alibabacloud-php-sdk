<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponseBody\sensitiveColumnsDetailList;

use AlibabaCloud\Tea\Model;

class sensitiveColumnsDetail extends Model
{
    /**
     * @description The description of the field.
     *
     * @example test
     *
     * @var string
     */
    public $columnDescription;

    /**
     * @description The name of the field.
     *
     * @example ColumnName_test
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The data type of the field.
     *
     * @example varchar(32)
     *
     * @var string
     */
    public $columnType;

    /**
     * @description The ID of the database.
     *
     * @example 1860****
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The type of the database.
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the environment to which the database belongs.
     *
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @description Indicates whether the database is a logical database. Valid values:
     *
     *   **true**: The database is a logical database.
     *   **false**: The database is not a logical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The name of the database.
     *
     * @example SchemaName_test
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name that is used to search for the database.
     *
     * @example test@xxx:3306
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The name of the table.
     *
     * @example test
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'columnDescription' => 'ColumnDescription',
        'columnName'        => 'ColumnName',
        'columnType'        => 'ColumnType',
        'dbId'              => 'DbId',
        'dbType'            => 'DbType',
        'envType'           => 'EnvType',
        'logic'             => 'Logic',
        'schemaName'        => 'SchemaName',
        'searchName'        => 'SearchName',
        'tableName'         => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnDescription) {
            $res['ColumnDescription'] = $this->columnDescription;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveColumnsDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnDescription'])) {
            $model->columnDescription = $map['ColumnDescription'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
