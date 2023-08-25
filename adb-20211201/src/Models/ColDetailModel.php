<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ColDetailModel extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $distributeKey;

    /**
     * @var bool
     */
    public $nullable;

    /**
     * @var bool
     */
    public $partitionKey;

    /**
     * @var bool
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'columnName'    => 'ColumnName',
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'distributeKey' => 'DistributeKey',
        'nullable'      => 'Nullable',
        'partitionKey'  => 'PartitionKey',
        'primaryKey'    => 'PrimaryKey',
        'schemaName'    => 'SchemaName',
        'tableName'     => 'TableName',
        'type'          => 'Type',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->distributeKey) {
            $res['DistributeKey'] = $this->distributeKey;
        }
        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
        }
        if (null !== $this->partitionKey) {
            $res['PartitionKey'] = $this->partitionKey;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ColDetailModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DistributeKey'])) {
            $model->distributeKey = $map['DistributeKey'];
        }
        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }
        if (isset($map['PartitionKey'])) {
            $model->partitionKey = $map['PartitionKey'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
