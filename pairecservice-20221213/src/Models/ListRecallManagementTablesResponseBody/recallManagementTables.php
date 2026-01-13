<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementTablesResponseBody;

use AlibabaCloud\Dara\Model;

class recallManagementTables extends Model
{
    /**
     * @var bool
     */
    public $canDelete;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $indexEffectiveTime;

    /**
     * @var string
     */
    public $indexVersionId;

    /**
     * @var string
     */
    public $maxcomputeProjectName;

    /**
     * @var string
     */
    public $maxcomputeSchema;

    /**
     * @var string
     */
    public $maxcomputeTableName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $partitionFields;

    /**
     * @var string
     */
    public $recallManagementTableId;

    /**
     * @var string
     */
    public $recallType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'canDelete' => 'CanDelete',
        'dataSource' => 'DataSource',
        'description' => 'Description',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'indexEffectiveTime' => 'IndexEffectiveTime',
        'indexVersionId' => 'IndexVersionId',
        'maxcomputeProjectName' => 'MaxcomputeProjectName',
        'maxcomputeSchema' => 'MaxcomputeSchema',
        'maxcomputeTableName' => 'MaxcomputeTableName',
        'name' => 'Name',
        'partitionFields' => 'PartitionFields',
        'recallManagementTableId' => 'RecallManagementTableId',
        'recallType' => 'RecallType',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canDelete) {
            $res['CanDelete'] = $this->canDelete;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->indexEffectiveTime) {
            $res['IndexEffectiveTime'] = $this->indexEffectiveTime;
        }

        if (null !== $this->indexVersionId) {
            $res['IndexVersionId'] = $this->indexVersionId;
        }

        if (null !== $this->maxcomputeProjectName) {
            $res['MaxcomputeProjectName'] = $this->maxcomputeProjectName;
        }

        if (null !== $this->maxcomputeSchema) {
            $res['MaxcomputeSchema'] = $this->maxcomputeSchema;
        }

        if (null !== $this->maxcomputeTableName) {
            $res['MaxcomputeTableName'] = $this->maxcomputeTableName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->partitionFields) {
            $res['PartitionFields'] = $this->partitionFields;
        }

        if (null !== $this->recallManagementTableId) {
            $res['RecallManagementTableId'] = $this->recallManagementTableId;
        }

        if (null !== $this->recallType) {
            $res['RecallType'] = $this->recallType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CanDelete'])) {
            $model->canDelete = $map['CanDelete'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['IndexEffectiveTime'])) {
            $model->indexEffectiveTime = $map['IndexEffectiveTime'];
        }

        if (isset($map['IndexVersionId'])) {
            $model->indexVersionId = $map['IndexVersionId'];
        }

        if (isset($map['MaxcomputeProjectName'])) {
            $model->maxcomputeProjectName = $map['MaxcomputeProjectName'];
        }

        if (isset($map['MaxcomputeSchema'])) {
            $model->maxcomputeSchema = $map['MaxcomputeSchema'];
        }

        if (isset($map['MaxcomputeTableName'])) {
            $model->maxcomputeTableName = $map['MaxcomputeTableName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PartitionFields'])) {
            $model->partitionFields = $map['PartitionFields'];
        }

        if (isset($map['RecallManagementTableId'])) {
            $model->recallManagementTableId = $map['RecallManagementTableId'];
        }

        if (isset($map['RecallType'])) {
            $model->recallType = $map['RecallType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
