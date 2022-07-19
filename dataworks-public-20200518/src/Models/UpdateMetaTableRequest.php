<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateMetaTableRequest extends Model
{
    /**
     * @var string
     */
    public $addedLabels;

    /**
     * @var string
     */
    public $caption;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $envType;

    /**
     * @var string
     */
    public $newOwnerId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $removedLabels;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $visibility;
    protected $_name = [
        'addedLabels'   => 'AddedLabels',
        'caption'       => 'Caption',
        'categoryId'    => 'CategoryId',
        'envType'       => 'EnvType',
        'newOwnerId'    => 'NewOwnerId',
        'projectId'     => 'ProjectId',
        'removedLabels' => 'RemovedLabels',
        'schema'        => 'Schema',
        'tableGuid'     => 'TableGuid',
        'tableName'     => 'TableName',
        'visibility'    => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addedLabels) {
            $res['AddedLabels'] = $this->addedLabels;
        }
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->newOwnerId) {
            $res['NewOwnerId'] = $this->newOwnerId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->removedLabels) {
            $res['RemovedLabels'] = $this->removedLabels;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMetaTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddedLabels'])) {
            $model->addedLabels = $map['AddedLabels'];
        }
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['NewOwnerId'])) {
            $model->newOwnerId = $map['NewOwnerId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RemovedLabels'])) {
            $model->removedLabels = $map['RemovedLabels'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
