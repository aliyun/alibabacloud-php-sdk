<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponseBody\sensitiveColumnsDetailList;

use AlibabaCloud\Tea\Model;

class sensitiveColumnsDetail extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $columnDescription;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $columnType;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var string
     */
    public $envType;
    protected $_name = [
        'dbId'              => 'DbId',
        'columnName'        => 'ColumnName',
        'columnDescription' => 'ColumnDescription',
        'tableName'         => 'TableName',
        'dbType'            => 'DbType',
        'columnType'        => 'ColumnType',
        'logic'             => 'Logic',
        'schemaName'        => 'SchemaName',
        'searchName'        => 'SearchName',
        'envType'           => 'EnvType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnDescription) {
            $res['ColumnDescription'] = $this->columnDescription;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
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
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnDescription'])) {
            $model->columnDescription = $map['ColumnDescription'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
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
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        return $model;
    }
}
