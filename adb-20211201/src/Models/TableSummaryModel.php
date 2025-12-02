<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class TableSummaryModel extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createdBySource;

    /**
     * @var string
     */
    public $createdByUser;

    /**
     * @var string
     */
    public $description;

    /**
     * @var OpenStructMvDetailModel
     */
    public $mvDetailModel;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $SQL;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $tableSize;

    /**
     * @var string
     */
    public $tableType;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createdBySource' => 'CreatedBySource',
        'createdByUser' => 'CreatedByUser',
        'description' => 'Description',
        'mvDetailModel' => 'MvDetailModel',
        'owner' => 'Owner',
        'SQL' => 'SQL',
        'schemaName' => 'SchemaName',
        'tableName' => 'TableName',
        'tableSize' => 'TableSize',
        'tableType' => 'TableType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->mvDetailModel) {
            $this->mvDetailModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createdBySource) {
            $res['CreatedBySource'] = $this->createdBySource;
        }

        if (null !== $this->createdByUser) {
            $res['CreatedByUser'] = $this->createdByUser;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->mvDetailModel) {
            $res['MvDetailModel'] = null !== $this->mvDetailModel ? $this->mvDetailModel->toArray($noStream) : $this->mvDetailModel;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tableSize) {
            $res['TableSize'] = $this->tableSize;
        }

        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatedBySource'])) {
            $model->createdBySource = $map['CreatedBySource'];
        }

        if (isset($map['CreatedByUser'])) {
            $model->createdByUser = $map['CreatedByUser'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MvDetailModel'])) {
            $model->mvDetailModel = OpenStructMvDetailModel::fromMap($map['MvDetailModel']);
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TableSize'])) {
            $model->tableSize = $map['TableSize'];
        }

        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
